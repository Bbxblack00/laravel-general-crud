@extends('layouts.main-layout')

@section('principal')

    @if ($match -> result)

    <h2><u>{{ $match -> team1 }}</u> VS {{ $match -> team2 }}</h2>

    @else
        
    <h2>{{ $match -> team1 }} VS <u>{{ $match -> team2 }}</u></h2>

    @endif

    <h1>Match id: {{ $match -> id }}</h1>

    <h2>{{ $match -> team1 }} VS {{ $match -> team2 }}</h2>

    <h3>RESULTS:</h3>

    <h2>{{ $match -> point1 }} <-> {{ $match -> point2 }}</h2>

    
    
@endsection