<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartyListController extends Controller
{
    public function home(){
        return view('admin.partylist.home');
    }
}
