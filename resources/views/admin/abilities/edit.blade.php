@extends('layout.appAdmin')
@section('content')
<h1>Modifica Abilità</h1>

<livewire:edit-ability :ability="$ability" />

@endsection