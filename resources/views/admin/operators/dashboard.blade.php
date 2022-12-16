@extends('layout.appAdmin')
@section('content')

<h1>Dashboard Operatori</h1>

@if (session()->has('status'))
<div class="flex flex-row justify-center my-2 alert alert-success">
  {{session('status')}}
</div>
@endif

<a href="{{route('admin.showAddOperator')}}">Aggiungi Operatore</a> <br>
    @foreach ($operators as $operator)
        {{$operator->name}} / {{$operator->ability->name}} <a href="{{ route('admin.showEditOperator', $operator) }}">Modifica</a> <br>
        <hr>
    @endforeach
@endsection