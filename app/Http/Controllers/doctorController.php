<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class doctorController extends Controller
{
    function index(){
        $doctors = \App\Models\Doctor::all();

        return view('doctors',
    ['doc'=> $doctors]);
    }
}
