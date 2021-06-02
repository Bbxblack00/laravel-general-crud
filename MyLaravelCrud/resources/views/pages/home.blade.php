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

    @foreach ($workers as $worker)

    <div class="row">
        <a href="{{ route ('employee', $worker -> id) }}">
            [{{ $worker -> id }}] -> {{ $worker -> firtsname }} {{ $worker -> lastname }}
        </a>
        <a href="{{ route('edit', $worker -> id) }}"><i class="fas fa-pen"></i></a>
        <a href="{{ route('destroy', $worker -> id) }}"><i class="fas fa-user-minus"></i></a>
    </div>
        
    @endforeach

    <div class="row">
        <a href="{{ route('create') }}">
            <button class="button">
                New Worker
            </button>
        </a>
    </div>

    {{-- <h1>HELLO</h1> --}}
    
@endsection