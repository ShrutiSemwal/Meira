<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function display(Request $request)
    {
        $username=$request->input('username');

        $request-> validate([
            'username'=>'required| max: 20 | min: 3 | string',
            'contact'=>'required | digits:10',
            'email'=>'required |  email:dns',
            'password'=>'required',
            'cpassword'=>'required',
        ]);

        return view('welcome',['username'=>$username]);
    }
}
