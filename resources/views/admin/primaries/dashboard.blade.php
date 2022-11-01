@extends('layout.appAdmin')
@section('content')

<h1>Dashboard Primarie</h1>

<a href="{{route('admin.showAddPrimaries')}}">Aggiungi Abilità</a> <br>
    @foreach ($primaries as $primary)
        {{$primary->name}} / {{$primary->type}} <a href="{{ route('admin.showEditPrimary', $primary) }}">Modifica</a> <br>
    @endforeach
@endsection