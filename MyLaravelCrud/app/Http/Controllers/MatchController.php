<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MatchController extends Controller
{
    public function home(){

        return view('pages.home', compact());
    }
}
