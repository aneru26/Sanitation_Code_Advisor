<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page</title>
  <link rel="icon" href="assets/img/butuan-city-health-logo.png" type="image/x-icon/jpg">
  <!-- Google Font: Old Standard TT -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old+Standard+TT:300,400,400i,700&display=fallback">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset ('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('dist/css/adminlte.css')}}">
</head>
<body class="hold-transition login-page">

<div class="login-box mw-100">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-12">
      <div class="card card-outline card-primary" style="box-shadow: 0 0 30px #00287bff;">
        <div class="card-header text-left">
          <a href="" class="h1" style="font-family: 'Old Standard TT', serif;"><b>Sign In</b></a>
          <p style="font-family: 'Old Standard TT', serif;">Please insert your username and password to proceed</p>
        </div>
        <div class="card-body">
          @include(' _message')
          <form action="{{ url('login') }}" method="post">
            {{ csrf_field() }}
            <div class="input-group mb-3">
              <input type="text" class="form-control" required name="email" placeholder="Username">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember" name="remember">
                  <label for="remember" style="font-family: 'Old Standard TT', serif;">
                    Keep Me Logged In
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12" style="margin-top: 30px,">
                <button type="submit" class="btn btn-primary btn-block" style="font-family: 'Old Standard TT', serif;">Sign In</button>
              </div>
              <div class="col-12" style="margin-top: 30px; text-align: center;">
                <a href="{{ url('forgot-password')}}" class="text-center" style="font-family: 'Old Standard TT', serif;">Forgot Password?</a>
              </div>
              <div class="col-12" style="margin-top: 30px; text-align: center;">
                <p style="font-family: 'Old Standard TT', serif;">New user?<span><a href="{{ url('register')}}" class="text-center" style="font-family: 'Old Standard TT', serif;">Register</a></span></p>
              </div>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
  
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('dist/js/particles.js') }}"></script>
<script src="{{ asset('dist/js/app.js') }}"></script>

</body>
</html>
