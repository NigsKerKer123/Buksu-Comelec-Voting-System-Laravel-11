<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoterController extends Controller
{
    function home(){
        return view('voter.home');
    }
}
