@extends('layouts.main-layout')

@section('principal')


<h1>NEW WORKER</h1>
<form method="POST" action="{{ route('store') }}">
    
    @csrf
    @method('POST')

    {{-- team1 --}}
    <div class="row">
        <label for="team1" class="inp-wrk">Team 1:</label>
        <input type="text" name="team1" class="inp-wrk">
    </div>
    {{-- team2 --}}
    <div class="row">
        <label for="team2" class="inp-wrk">Team 2:</label>
        <input type="text" name="team2" class="inp-wrk">
    </div>
    {{-- point1 --}}
    <div class="row">
        <label for="point1" class="inp-wrk">Point 1:</label>
        <input type="text" name="point1" class="inp-wrk">
    </div>
    {{-- point2 --}}
    <div class="row">
        <label for="point2" class="inp-wrk">Point 2:</label>
        <input type="text" name="point2" class="inp-wrk">
    </div>
    {{-- result --}}
    <div class="row">
        <label for="result" class="inp-wrk">Result:</label>
        <input type="text" name="result" class="inp-wrk">
    </div>

    <div class="row">
        <button class="bnt">
            CREATE
        </button>
    </div>  
</form>

@endsection