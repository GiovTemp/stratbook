@extends('layout.appAdmin')
@section('content')
<h1>Dashboard ADMIN</h1>

<a href="{{route('admin.showMaps')}}"> Lista Mappe <br> </a>
<a href="{{route('admin.showOperators')}}">Lista Operatori</a>
<a href="{{route('admin.showAbilities')}}">Lista Abilità</a>
<a href="{{route('admin.showPrimaries')}}">Lista Primarie</a>
<a href="{{route('admin.showSecondaries')}}">Lista Secondarie</a>
<a href="{{route('admin.showGadget')}}">Lista Gadget</a>

@endsection