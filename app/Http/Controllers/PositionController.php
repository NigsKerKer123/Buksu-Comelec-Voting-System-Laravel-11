<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function home(){
        return view('admin.position.home');
    }
}
