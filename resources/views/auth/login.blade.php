<form action="{{route('login')}}" method="POST">
    @csrf


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="remember" name="remember">
    <label class="form-check-label" for="exampleCheck1">Remember</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>

</form>

    <a href="{{ url('auth/google') }}">Login with google</a>

    <div class="flex items-center justify-end mt-4">
      <a class="btn" href="{{ url('auth/facebook') }}"
          style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
          Login with Facebook
      </a>
  </div>
    