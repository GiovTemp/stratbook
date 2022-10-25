@extends('layout.appUser')
@section('content')

<h1>Dashboard Operatori</h1>

<a href="{{route('admin.showAddOperator')}}">Aggiungi Operatore</a> <br>
    @foreach ($operators as $operator)
        {{$operator->name}} <a href="{{ route('admin.showEditOperator', $operator) }}">Modifica</a> <br>
    @endforeach
@endsection