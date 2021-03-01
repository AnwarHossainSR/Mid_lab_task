
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>User | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('source/back/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('source/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('source/back/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>User</b>Registration</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>
      @include('include.alert')

      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">@error('full_name'){{ $message }}@enderror</span>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" placeholder="User name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">@error('user_name'){{ $message }}@enderror</span>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" autocomplete="new-password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
        <div class="input-group mb-3">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
          
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="company_name"  placeholder="Company Name" value="{{ old('company_name') }}" autocomplete="company_name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <span class="text-danger">@error('company_name'){{ $message }}@enderror</span>

          <div class="input-group mb-3">
            <input type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="city" autocomplete="new-password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <span class="text-danger">@error('city'){{ $message }}@enderror</span>

          <div class="input-group mb-3">
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone number" autocomplete="new-password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>
          <span class="text-danger">@error('phone'){{ $message }}@enderror</span>


          <div class="input-group mb-3">
            <input type="text" class="form-control" name="country" value="{{ old('company_name') }}" placeholder="Country" autocomplete="new-country">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <span class="text-danger">@error('country'){{ $message }}@enderror</span>

          <div class="form-group">
            <select name="type" class="form-control" id="exampleFormControlSelect1">
              <option value="admin">Admin</option>
              <option value="customer">Customer</option>
              <option value="accountant">Accountant</option>
              <option value="salesman">seles & merketing person</option>
              <option value="businesspartner">Buisness Partner</option>
              <option value="vendor">Vendor</option>
            </select>
          </div>

          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{-- {{ route('login.custom') }} --}}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('source/back/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('source/back/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('source/back/dist/js/adminlte.min.js') }}"></script>
</body>
</html>

