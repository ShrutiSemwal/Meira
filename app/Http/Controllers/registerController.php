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
    public function registerDisplay(Request $request)
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

    public function loginDisplay(Request $req)
    {
        $username=$req->input('name');
        $password=$req->input('password');

        $req-> validate([
            'name'=>'required|max:20| min:3| string',
            'password'=>'required',
        ]);

        return view('welcome',['username'=>$username]);

        
    }

    function contactDisplay(Request $reqt)
    {
        $name=$reqt->input('name');
        $email=$reqt->input('email');
        $feedback=$reqt->input('feedback');

        $reqt-> validate([
              'name'=>'required|max:20| min:3| string',
              'email'=>'required |  email:dns',
              'feedback'=>'required',
        ]);

        echo "Thank you!";
    }
}
