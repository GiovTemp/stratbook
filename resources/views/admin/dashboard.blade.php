@extends('layout.appAdmin')
@section('content')
<h1>Dashboard ADMIN</h1>

<a href="{{route('admin.showMaps')}}"> Lista Mappe <br> </a>
<a href="{{route('admin.showOperators')}}">Lista Operatori <br> </a>
<a href="{{route('admin.showAbilities')}}">Lista Abilità <br> </a>
<a href="{{route('admin.showPrimaries')}}">Lista Primarie <br> </a>
<a href="{{route('admin.showSecondaries')}}">Lista Secondarie <br> </a>
<a href="{{route('admin.showGadget')}}">Lista Gadget <br> </a>

@endsection