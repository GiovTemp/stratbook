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
        <img src="{{url('storage/'.Auth::user()->avatar)}}">
    </nav>
    @yield('content')
    @livewireScripts
</body>
</html>