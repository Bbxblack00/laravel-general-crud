<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;

class MatchController extends Controller
{
    public function home(){

        $matches = Match::all();

        // dd($matches);

        return view('pages.home', compact('matches'));
    }

    public function single($id){

        $match = Match::findOrFail($id);

        return view('pages.match', compact('match'));
    }

    public function create(){

        return view('pages.create');
    }

    public function edit($id) {

        $match = Match::findOrFail($id);


        return view('pages.edit', compact('match'));
    }

    public function update(Request $request, $id) {

        $validate = $request -> validate([
        'team1' => 'max:128|min:1',
        'team2' => 'max:128|min:1',
        'point1' => 'max:20|min:0|numeric',
        'point2' => 'max:20|min:0|numeric',
        'result' => 'max:1|min:0|numeric',
    ]);

        $match = Match::findOrFail($id);

        $match = update($validate);

        return redirect() -> route('home');
    }



    public function store(Request $request) {

        $validate = $request -> validate([
            'team1' => 'max:128|min:1',
            'team2' => 'max:128|min:1',
            'point1' => 'max:20|min:0|numeric',
            'point2' => 'max:20|min:0|numeric',
            'result' => 'max:1|min:0|numeric',
        ]);

        // dd($request -> all());

        $match = Match::create($validate);
        return redirect() -> route('match', $match -> id);
    }



    public function destroy($id) {

        $match = Match::findOrFail($id);

        $match -> delete();

        return redirect() -> route('home');
    }

}
