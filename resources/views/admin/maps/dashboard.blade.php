@extends('layout.appUser')
@section('content')
<h1>Dashboard Mappe</h1>

<a href="{{route('admin.showAddMap')}}">Inserisci nuova mappa </a> <br>

@foreach ($maps as $map)
    {{$map -> name}} <a href="{{route('admin.deleteMap', compact('map'))}}"><button>Elimina mappa dal roster</button></a> <br>
@endforeach

@endsection