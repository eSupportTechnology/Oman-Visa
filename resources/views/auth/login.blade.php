<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('frontend/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.png')}}" type="image/x-icon">
    <title>Cuba - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('frontend/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/responsive.css')}}">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card login-dark">
            <div>
              <div><a class="logo" href="index.html"><img class="img-fluid for-light" src="{{asset('logo.png')}}" alt="looginpage"><img class="img-fluid for-dark" src="{{asset('logo.png')}}" alt="looginpage"></a></div>
              <div class="login-main"> 
                <form class="theme-form" method="POST" action="{{ route('login') }}">
                    @csrf <!-- CSRF Protection -->
                    
                    <h4>Sign in to your account</h4>
                    <p>Enter your email & password to login</p>
                
                    <!-- Email Address -->
                    <div class="form-group">
                        <label class="col-form-label" for="email">Email Address</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required placeholder="your@email.com">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <!-- Password -->
                    <div class="form-group">
                        <label class="col-form-label" for="password">Password</label>
                        <div class="form-input position-relative">
                            <input id="password" class="form-control" type="password" name="password" required placeholder="********">
                            <div class="show-hide"><span class="show"></span></div>
                        </div>
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                
                    <!-- Remember Me & Forgot Password -->
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="text-sm" href="{{ route('password.request') }}">Forgot your password?</a>
                        @endif
                    </div>
                
                    <!-- Sign In Button -->
                    <div class="form-group mb-0">
                        <div class="text-end mt-3">
                            <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                        </div>
                    </div>
                
                    <!-- Sign Up Link -->
                    <p class="mt-4 mb-0 text-center">
                        Don't have an account? 
                        <a class="ms-2" href="{{ route('register') }}">Create Account</a>
                    </p>
                </form>
             </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
      <!-- Bootstrap js-->
      <script src="{{asset('frontend/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
      <!-- feather icon js-->
      <script src="{{asset('frontend/assets/js/icons/feather-icon/feather.min.js')}}"></script>
      <script src="{{asset('frontend/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="{{asset('frontend/assets/js/config.js')}}"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="{{asset('frontend/assets/js/script.js')}}"></script>
    </div>
  </body>
</html>