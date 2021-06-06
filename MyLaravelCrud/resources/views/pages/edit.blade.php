@extends('layouts.main-layout')

@section('principal')

    <h1>NEW MATCH: [{{ $match -> id }}]</h1>
    
    <form method="POST" action="{{ route('store') }}">
        
        @csrf
        @method('POST')

        {{-- team1 --}}
        <div class="row">
            <label for="team1" class="inp-wrk">Team 1:</label>
            <input type="text" name="team1" class="inp-wrk" value="{{ $match -> team1 }}">
        </div>
        {{-- team2 --}}
        <div class="row">
            <label for="team2" class="inp-wrk">Team 2:</label>
            <input type="text" name="team2" class="inp-wrk" value="{{ $match -> team2 }}">
        </div>
        {{-- point1 --}}
        <div class="row">
            <label for="point1" class="inp-wrk">Point 1:</label>
            <input type="text" name="point1" class="inp-wrk" value="{{ $match -> point1 }}">
        </div>
        {{-- point2 --}}
        <div class="row">
            <label for="point2" class="inp-wrk">Point 2:</label>
            <input type="text" name="point2" class="inp-wrk" value="{{ $match -> point2 }}">
        </div>
        {{-- result --}}
        <div class="row">
            <label for="result" class="inp-wrk">Result:</label>
            <input type="text" name="result" class="inp-wrk" value="{{ $match -> result }}">
        </div>
    
        <div class="row">
            <button class="bnt">
                CONFIRM
            </button>
        </div>
    </form>


@endsection
