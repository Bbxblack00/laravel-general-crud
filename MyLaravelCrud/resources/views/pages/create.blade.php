@extends('layouts.main-layout')

@section('principal')


<h1>NEW WORKER</h1>
<form method="POST" action="">
    
    @csrf
    @method('POST')

    {{--  --}}
    <div class="row">
        <label for="firstname" class="inp-wrk">Firstname:</label>
        <input type="text" name="firstname" class="inp-wrk">
    </div>
    {{--  --}}
    <div class="row">
        <label for="Lastname" class="inp-wrk">Lastname:</label>
        <input type="text" name="lastname" class="inp-wrk">
    </div>
    {{--  --}}
    <div class="row">
        <label for="role" class="inp-wrk">Ruolo:</label>
        <input type="text" name="role" class="inp-wrk">
    </div>
    {{--  --}}
    <div class="row">
        <label for="ral" class="inp-wrk">Ral:</label>
        <input type="text" name="ral" class="inp-wrk">
    </div>
    {{--  --}}
    <div class="row">
        <label for="ral" class="inp-wrk">Ral:</label>
        <input type="text" name="ral" class="inp-wrk">
    </div>

    <div class="row">
        <button class="bnt">
            CREATE
        </button>
    </div>  
</form>

@endsection