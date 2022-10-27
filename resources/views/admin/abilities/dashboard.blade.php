@extends('layout.appAdmin')
@section('content')
<h1>Dashboard Abilità</h1>

@foreach ($abilities as $ability)
    {{$ability -> name}} associata a  {{$ability->operator->name}}<br>
@endforeach

@endsection