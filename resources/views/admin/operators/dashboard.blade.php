@extends('layout.appUser')
@section('content')

<h1>Dashboard Operatori</h1>

<a href="{{route('admin.showAddOperator')}}">Aggiungi Operatore</a>
    @foreach ($operators as $operator)
        {{$operator->name}}<br>
    @endforeach
@endsection