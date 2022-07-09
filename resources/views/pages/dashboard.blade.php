@extends('layouts.app')

@section('content')
    <div>
        hello {{$data->username}}

       <h1><a href="logout">Logout</a></h1>
    </div>
@endsection
