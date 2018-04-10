<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plant-it</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
    
    {{-- bootstrap --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

    {{-- CSS libraries --}}
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

    {{-- main --}}
    <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


    {{-- java script/jquery --}}
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>

    {{--  js template --}}
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset('lib/easing/js/easing.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{ asset('lib/superfish/superfish.min.js')}}"></script>
    <script src="{{ asset('lib/magnific-popup/magnific-popup.min.js')}}"></script>

    {{-- contact from js file --}}
    <script src="{{ asset('js/contactform.js')}}"></script>
    

    {{-- template main --}}
    <script src="{{ asset('js/custom.js')}}"></script>
    
    
    @yield('js_per_page')
    @yield('css_per_page')

</head>
    <body>

        @yield('content')


    </body>
</html>