
<!--Logout-->
<a class="" href="/logout" onclick="event.preventDefault();getElementById('form-logout').submit()">Logout</a>

<form id="form-logout" action="{{ route('logout')}}" method="POST" class="d-none">
    @csrf
</form>