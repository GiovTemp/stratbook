@extends('layout.appAdmin')
@section('content')
<h1>Dashboard Abilità</h1>

<a href="{{route('admin.showAddAbilities')}}">Inserisci nuova abilità</a> <br>

@foreach ($abilities as $ability)
    {{$ability -> name}} associata a  {{$ability->operator->name ?? 'operatore non assegnato'}}<br>
@endforeach

@endsection