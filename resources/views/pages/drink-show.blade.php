@extends('layouts.main-layout')

@section('content')

    <h1>
        {{ $drink -> name }}
    </h1>
    <h2>
        Alchool: {{ $drink -> alchool_perc / 10 }} %
    </h2>
    <h2>
        Price: {{ $drink -> price / 100 }} Euro
    </h2>
    
@endsection