<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Kankocho Webview')</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common/main_event.css') }}">
    @stack('links')
</head>
<body>
    <div id="app" class="d-flex flex-column @yield('class_app')">
        @include('stamp.partials.header')
        <div class="content-app @yield('class__content')">
            @yield('content')
        </div>
        @include('stamp.partials.footer')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- jquery -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/common/main_event.js') }}"></script>
    @stack('scripts')
</body>
</html>
