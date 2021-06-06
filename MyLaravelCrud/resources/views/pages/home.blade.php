@extends('layouts.main-layout')

@section('principal')

{{-- come detto a lezione, cercare di portarsi in pari
    con l'esercizio visto questa mattina,
    completando tutto il necessario per operare una CRUD
    completa sull'entita' definita nella migration
    che vi allego, passando ovviamente anche per i
    seeder/factory; cercare in particolar modo di chiarsi
    gli elementi cardine di tutti i passaggi principali,
    eventualmente chiedendo se qualcosa non vi e' chiaro --}}


    @foreach ($matches as $match)

        <a href="{{ route('single', $match -> id) }}" class="space">
            
            <p>
               {{ $match -> id }} - {{ $match -> team1 }} ||  {{ $match -> team2 }}
            </p>

        </a>
        
        
        @endforeach
        
        <a href="{{ route('create') }}">
            <button>
                CREATE
            </button>
        </a>
        {{-- <h1>HELLO</h1> --}}
        
@endsection