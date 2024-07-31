<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotersInAdminController extends Controller
{
    function home(){
        return view('admin.voter.home');
    }
}
