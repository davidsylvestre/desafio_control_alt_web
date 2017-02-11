@extends('layouts.app')

@section('title', 'Random')

@section('content')
    @foreach ($numbers as $number)
    <p>* {{$number}}</p>
@endforeach
@endsection