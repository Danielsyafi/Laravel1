@extends('layout.container')

@section('container2')
    <h1>Hello, world!</h1>
    <h2>{{$Nama}}</h2>
    <h3>{{$Role}}</h3>

    @if($Role == 'admin')
       <a href="">ke halaman admin</a>

    @endif
    @endsection
    