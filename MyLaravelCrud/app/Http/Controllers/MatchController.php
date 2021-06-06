<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MatchController extends Controller
{
    public function home(){

        $matches = Match::all();

        dd($matches);

        return view('pages.home');
    }
}
