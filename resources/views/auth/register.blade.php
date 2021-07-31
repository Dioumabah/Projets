<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ page_title($title ?? 'Création de compte') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link href="{{ asset('assets/hcms-guinea/logo.pnge') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminassets/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet"
        href="{{ asset('adminassets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('adminassets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('adminassets/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition register-page">

    <body class="hold-transition register-page">
        <div class="register-box">
            <div class="register-logo">
                <a href="#"><b><?= ucfirst(strtolower(config('app.name'))) ?></b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Création de compte</p>

      <form  method="POST" action="{{ route('register') }}">
         @csrf
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Nom d'utilisateur">
          <div class="input-group-append input-group-text">
              <span class="fas fa-user"></span>
          </div>
        
        </div>
        @error('name')
            <span class="text-danger text-sm ">{{ $message }}</span>
        @enderror
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
          <div class="input-group-append input-group-text">
              <span class="fas fa-envelope"></span>
          </div>
         
        </div>
         @error('email')
             <span class="text-danger text-sm ">{{ $message }}</span>
        @enderror
        <div class="input-group mb-3">
          <input type="password" name="password"  class="form-control" placeholder="Mot de passe">
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
        @error('password')
        <span class="text-danger text-sm ">{{ $message }}</span>
        @enderror
        <div class="row">
         
          <!-- /.col -->
            <button type="submit" class="btn btn-primary btn-block btn-flat">Créer mon compte</button>
          
          <!-- /.col -->
        </div>
      </form>

     

      <a href="{{ route('login') }}" class="text-center">Si vous étes membre</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
    <!-- jQuery -->
    <script src="{{ asset('adminassets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminassets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
</body>

</html>
