@extends('layouts.main-layout')

@section('content')
    <h1>MY NEW DRINK</h1>

    <form action="{{ route('drink-store') }}" method="POST">

        @csrf
        @method('POST')

        <label for="name">Name: </label>
        <input name="name" type="text">

        <br>

        <label for="alchool_perc">Alchool: </label>
        <input name="alchool_perc" type="number">

        <br>

        <label for="price">Price: </label>
        <input name="price" type="number">

        <br>

        <input type="submit" value="SAVE">


    </form>
    
@endsection