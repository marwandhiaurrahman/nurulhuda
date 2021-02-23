{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="username" class="col-md-4 col-form-label text-md-right">Username Or Email</label>

            <div class="col-md-6">
                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror"
                    name="username" value="{{ old('username') }}" required autofocus>
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sign In - Sistem Informasi Yayasan Nurul Huda Kertawangunan</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{!! asset('assets/assets/images/logo.png') !!}">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <!-- icon -->
    <link rel="shortcut icon" href="{!! asset('assets/images/yayasannurulhuda.ico') !!}">

    @include('layouts.partials.css')

</head>

<body>
    <div class="app" id="app" style="min-height: 100%;
  background: url('../assets/images/background_gedung_black.jpg');
  overflow: hidden;
  width: 100%;
  padding: 0px 15px 110px 15px;">

        <!-- ############ LAYOUT START-->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-8 mt-xl-5 pt-xl-5 text-center">
                    <img src="{{url('assets/images/logo_all_lembaga.png')}}" class="apps" style="width: 380px;">
                    <h3 style="font-weight: bold; font-size:28pt; padding:10px; color: #fff;">
                        Ahlan Wa Sahlan Peserta Didik<br>
                        <font style="color: #169b48"> Yayasan Nurul Huda Kertawangunan</font>
                    </h3>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="center-block w-xxl w-auto-xs p-y-md">
                        <div class="navbar">
                            <div class="pull-center">
                            </div>
                        </div>
                        <div class="p-a-md box-color r box-shadow-z1 text-color shadow-side">
                            <div class="text-center">
                                <img src="{{url('assets/images/logo_ponpesnurulhuda.png')}}" class="apps">
                            </div>
                            <div class="m-b text-sm m-t">
                                Login Peserta Didik
                            </div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="md-form-group float-label">
                                    <input type="text" name='username' class="md-input has-value" ng-model="user.username" required="">
                                    <label>Username</label>
                                </div>
                                <div class="md-form-group float-label">
                                    <input type="password" name='password' class="md-input has-value" ng-model="user.password"
                                        required="">
                                    <label>Password</label>
                                </div>
                                <button type="submit" class="btn primary btn-block p-x-md">Sign in</button>
                            </form>


                            <div class="p-v-lg" style="margin-top: 10px">
                                <div class="m-b"><a ui-sref="access.forgot-password"
                                        href="{{ url('/forgot-password') }}" class="text-primary _600">Lupa
                                        Password/PIN?</a></div>
                                <div>Belum mendaftar? silahkan <a ui-sref="access.signup" href="{{ url('/register')}}"
                                        class="text-primary _600 text-center">Registrasi</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ############ LAYOUT END-->
        <div class="app-footer">
            <div class="p-2 text-xs">
                <div class="text-center py-1" style="color: #fff;">
                    &copy;
                    <script>
                        var d = new Date();
        var n = d.getFullYear();
        document.write(n);
                    </script>
                    Copyright <strong>IT Nurul Huda Kertawangunan</strong> <span class="hidden-xs-down"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- build:js scripts/app.html.js -->
    @include('layouts.partials.script')
    <!-- endbuild -->
</body>

</html>
