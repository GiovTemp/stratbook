@extends('layout.appAdmin')
@section('content')
<h1>Dashboard Gadget</h1>

<a href="{{route('admin.showAddGadget')}}">Inserisci nuovo gadget</a> <br>

@foreach ($gadgets as $gadget)
    {{$gadget -> name}} associata a  {{$gadget->operator->name ?? 'operatore non assegnato'}}<br>
    <a href="{{route('admin.showEditGadget', $gadget)}}"><button>Modifica gadget</button></a> <br>
@endforeach

@endsection