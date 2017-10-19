<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css') }}">

    </head>
    <body id="login">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container">

          <div class="row pt-5">

            <form class="form-signin mx-auto border rounded mt-5 pt-0 pb-5 px-4" method="POST"  action="{{ route('login') }}">
              {{ csrf_field() }}
              <img src="{{ asset('img/logo.png') }}" class="rounded mx-auto d-block py-5" alt="...">
              <!-- <h2 class="form-signin-heading">Please sign in</h2> -->
              <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <input type="text" class="form-control"  name="username" placeholder="Enter Username" required>
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Password"  required>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                </label>
                <p class="forgot-password"><a href="{{ route('password.request') }}">Forgot Password</a></p>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                @if (count($errors) > 0)
                <div class="form-group alert alert-danger" style="margin-top: 10px">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Whoops!</strong> There were some problems with your input<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </form>
          </div>
        </div> <!-- /container -->

        <div id="bottom" class="text-center">
          <ul>
          <li class="first"><a href="#">Privacy Policy</a></li>
          <li><a href="#">Contact</a></li>
          <li class="last"><a href="#">CoopPay™</a></li>
        </ul>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

        <!-- bootstrap -->
        <script src="{{ asset('js/bootstrap.js') }}"></script>

        <script src="{{ asset('js/plugins.js') }}"></script>
    </body>
</html>
