@extends('layouts.main-layout')

@section('principal')

    @if ($match -> result)

    <h2 class="space"><u>{{ $match -> team1 }}</u> VS {{ $match -> team2 }}</h2>

    @else
        
    <h2 class="space">{{ $match -> team1 }} VS <u>{{ $match -> team2 }}</u></h2>

    @endif

    <h1 class="space">Match id: {{ $match -> id }}</h1>

    <h2 class="space">{{ $match -> team1 }} VS {{ $match -> team2 }}</h2>

    <h3 class="space">RESULTS:</h3>

    <h2 class="space">{{ $match -> point1 }} <-> {{ $match -> point2 }}</h2>

    
    
@endsection