<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <form action="{{route('register')}}" method="POST">
                @csrf
            
                <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="username">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            
              <div class="form-group">
                <label for="password_confirmation">Conferma Password</label>
                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Conferma Password">
              </div>
            
              <button type="submit" class="btn btn-primary">Registrati</button>
            </form>

            <a href="{{ url('auth/google') }}">Register with google</a>

            <div class="flex items-center justify-end mt-4">
              <a class="btn" href="{{ url('auth/facebook') }}"
                  style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                  Login with Facebook
              </a>
          </div>
        </div>
    </div>
</div>