@extends('layout.appAdmin')
@section('content')
<h1>Dashboard Mappe</h1>

@if (session()->has('status'))
<div class="flex flex-row justify-center my-2 alert alert-success">
  {{session('status')}}
</div>
@endif

<a href="{{route('admin.showAddMap')}}">Inserisci nuova mappa </a> <br>

@foreach ($maps as $map)
    {{$map -> name}} <a href="{{route('admin.deleteMap', compact('map'))}}"><button>Elimina mappa dal roster</button></a>  
    <a href="{{route('admin.editMap', $map)}}"><button>Modifica mappa</button></a> <br>
@endforeach

@endsection