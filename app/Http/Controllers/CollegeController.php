<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollegeController extends Controller
{
    function home(){
        return view('admin.college.home');
    }
}
