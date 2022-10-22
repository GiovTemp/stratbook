<h1>Insert Map</h1>

<form action="{{route('admin.addMap')}}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="es: ClubHouse">
    <button type="submit">Invia</button>
</form>
