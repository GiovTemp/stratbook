@extends('layout.appAdmin')
@section('content')

<h1>Dashboard Secondarie</h1>

<a href="{{route('admin.showAddSecondaries')}}">Aggiungi Secondaria</a> <br>
    @foreach ($secondaries as $secondary)
        {{$secondary->name}} / {{$secondary->type}} <a href="{{ route('admin.showEditSecondary', $secondary) }}">Modifica</a> <br>
    @endforeach
@endsection