<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" type="text/css" rel="stylesheet">
    <script src="{{asset('js/modernizr.custom.63321.js')}}" type="text/javascript"></script>


</head>

<body>
@include('topnav')

@yield('content')

@include('footer')
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="{{asset('js/jquery.catslider.js')}}" type="text/javascript"></script>
<script>
    $(function() {

        $( '#mi-slider' ).catslider();

    });
</script>
<script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>
</html>