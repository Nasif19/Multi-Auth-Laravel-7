@extends('layouts.app')

@section('content')
    <center>
        <p>Name: {{Auth()->user()->name}} </p>
        <p>Email: {{Auth()->user()->email}} </p>
        <p>Role: {{Auth()->user()->role}} </p>
    </center>
@endsection