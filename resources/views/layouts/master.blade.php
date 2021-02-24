<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard {{ Auth::user()->name }} - Sistem Informasi Yayasan Nurul Huda Kertawangunan</title>
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
    <div class="app" id="app">

        <!-- ############ LAYOUT START-->

        <!-- aside -->
        @include('layouts.partials.sidebar')
        <!-- / aside -->

        <!-- content -->
        <div id="content" class="app-content box-shadow-z0" role="main">
            @include('layouts.partials.navbar')
            @include('layouts.partials.footer')
            <div ui-view class="app-body" id="view">

                <!-- ############ PAGE START-->
                @yield('content')
                <!-- ############ PAGE END-->

            </div>
        </div>
        <!-- / -->
        <!-- ############ LAYOUT END-->

    </div>
    <!-- build:js scripts/app.html.js -->
    @include('layouts.partials.script')
    <!-- endbuild -->
</body>

</html>
