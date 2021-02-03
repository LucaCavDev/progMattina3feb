@extends('layouts.main-layout')

@section('content')

    <h1>
        Drink Edit:
    </h1>

    <form action="{{ route('drink-update', $drink -> id) }}" method="POST">

        @csrf
        @method('POST')

        <label for="name">Name: </label>
        <input name="name" type="text" value="{{ $drink -> name }}">

        <br>

        <label for="alchool_perc">Alchool: </label>
        <input name="alchool_perc" type="number" value="{{ $drink -> alchool_perc / 10 }}">

        <br>

        <label for="price">Price: </label>
        <input name="price" type="number" value="{{ $drink -> price / 100 }}">

        <br>

        <input type="submit" value="SAVE">


    </form>

    
@endsection