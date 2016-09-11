<doctype html>
<html>
<head>
<title>@yield('title')</title>
<link href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
     <div class="container">
         @yield('content')
     </div>
     <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
     <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>