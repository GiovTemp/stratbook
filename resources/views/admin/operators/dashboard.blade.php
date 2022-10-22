@extends('layout.appUser')
@section('content')
    @foreach ($operators as $operator)
        {{$operator->name}}<br>
    @endforeach
@endsection