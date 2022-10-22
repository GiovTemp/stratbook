<h1>Dashboard Mappe</h1>

<a href="{{route('admin.showAddMap')}}">Inserisci nuova mappa </a> <br>

@foreach ($maps as $map)
    {{$map -> name}}<br>
@endforeach