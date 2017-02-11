@extends('layouts.app')

@section('title', 'File')

@section('content')
    <form action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="filename">
        <input type="submit">
    </form>
@endsection