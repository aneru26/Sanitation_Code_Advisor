<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>
  <link rel="icon" href="assets/img/butuan-city-health-logo.png" type="image/x-icon/jpg">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old+Standard+TT:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
  <link rel="stylesheet" href="{{ asset ('dist/css/adminlte.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box mw-100">
  <div class="row justify-content-center align-items-center" style="width: 100%;">
    <div class="col-lg-12">
      <div class="card card-outline card-primary" style="box-shadow: 0 0 30px #00287bff;">
        <div class="card-header text-left">
          <a href="" class="h1"style="font-family: 'Old Standard TT', serif;"><b>Register</b></a>
          <p style="font-family: 'Old Standard TT', serif;">Register a new membership</p>
        </div>
        <div class="card-body">
          @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
          <form action="{{ route('post.register') }}" method="post">
            @include(' _message')
            @csrf
            <div class="input-group mb-3">
              <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name="email" id="email" value="{{ old('email') }}" required class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" id="password" required class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block" style="font-family: 'Old Standard TT', serif;">Register</button>
              </div>
              <div class="col-12" style="margin-top: 30px; text-align: center;">
                <p style="font-family: 'Old Standard TT', serif;">Already Have Account?<span><a href="{{ url('loginfront') }}" class="text-center" style="font-family: 'Old Standard TT', serif;">Login</a></span></p>
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
<!-- /.register-box -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
</body>
</html>
