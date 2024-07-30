<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    function home(){
        return view('admin.candidate.home');
    }
}
