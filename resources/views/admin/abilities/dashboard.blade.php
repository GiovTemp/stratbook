@extends('layout.appAdmin')
@section('content')
<h1>Dashboard Abilità</h1>

@if (session()->has('status'))
<div class="flex flex-row justify-center my-2 alert alert-success">
  {{session('status')}}
</div>
@endif

<a href="{{route('admin.showAddAbilities')}}">Inserisci nuova abilità</a> <br>

@foreach ($abilities as $ability)
    {{$ability -> name}} associata a  {{$ability->operator->name ?? 'operatore non assegnato'}}<br>
    <a href="{{route('admin.editAbility', $ability)}}"><button>Modifica abilità</button></a> <br>
@endforeach

@endsection