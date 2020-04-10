<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $validation = Validator::make($request->all(), [
			'email'=>'required',
			'password'=>'required'
        ]);

        if($validation->fails()){
			return back()
					->with('errors', $validation->errors())
					->withInput();
		}

        //database finding
        $find = User::where('email', $request->email)
                ->where('password', $request->password)
                ->first();

         if($find != null){

            if($find->role == "admin"){

                $request->session()->put('uname', $find->name);
                $request->session()->put('uemail', $find->email);
                $request->session()->put('uid', $find->id);

                return redirect()->route('admin_home');
            }

            if($find->role == "manager"){
                $request->session()->put('uname', $find->name);
                $request->session()->put('uemail', $find->email);
                $request->session()->put('uid', $find->id);

                return redirect()->route('manager_home');
            }

            else{
                $request->session()->flash('msg', 'invalid username/password');
                return redirect()->route('login');
            }

    	}else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('login');
    	}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
