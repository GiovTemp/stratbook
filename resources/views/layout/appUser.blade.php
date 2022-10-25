<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stratbook</title>
    @livewireStyles
</head>
<body>
    <nav>
        <img src="{{url('storage/'.Auth::user()->avatar)}}" style="width: 30px;">     

        <!--Logout-->
        <a class="" href="/logout" onclick="event.preventDefault();getElementById('form-logout').submit()">Logout</a>

        <form id="form-logout" action="{{ route('logout')}}" method="POST" class="d-none">
            @csrf
        </form>
    </nav>
    @yield('content')
    @livewireScripts
</body>
</html>