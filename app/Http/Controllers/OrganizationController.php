<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    function home(){
        return view('admin.organization.home');
    }
}
