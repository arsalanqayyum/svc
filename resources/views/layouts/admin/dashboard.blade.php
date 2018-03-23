<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
<!-- text fonts -->
    <link rel="stylesheet" href="{{asset('css/fonts.googleapis.com.css')}}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset('css/ace-part2.min.css')}}" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="{{asset('css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ace-rtl.min.css')}}" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{asset('css/ace-ie.min.css')}}" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{asset('js/ace-extra.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .my-widget{
            background-color: #efefef !important;
            padding-top: 10px;
            padding-left: 10px;
            padding-right: 10px;
            padding-bottom: 10px;
            margin-bottom: 20px !important;
            border:1px solid #00000045;
        }

        .my-widget h4{
            margin: auto;
            color: #545556;
            padding-top: 10px;
        }

        .collapsed{
        }

    </style>
</head>
<body class="no-skin">



<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Laravel
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@include('layouts.admin.side-panel')

@yield('admin-content')


</body>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery-ui.custom.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('js/jquery.sparkline.index.min.js')}}"></script>
{{--
    <script src="{{asset('js/jquery.flot.min.js'}}"></script>
--}}
<script src="{{asset('js/jquery.flot.pie.min.js')}}"></script>
<script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>

<!-- ace scripts -->
<script src="{{asset('js/ace-elements.min.js')}}"></script>
<script src="{{asset('js/ace.min.js')}}"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
{{--
<script>

    var dis1 = document.getElementById("newbrand");
    var dis2 = document.getElementById("brand");
    dis1.onchange = function () {
        if (this.value !== "" || this.value.length > 0) {
            document.getElementById("brand").disabled = true;
        }
        if (this.value === "") {
            document.getElementById("brand").disabled = false;
        }
    };
    dis2.onchange = function(){
        if (this.value !== "" || this.value.length > 0) {
            document.getElementById("newbrand").disabled = true;
        }
        if (this.value === "") {
            document.getElementById("newbrand").disabled = false;
        }
    };

    var dis3 = document.getElementById("cat_name");
    var dis4 = document.getElementById("newcat");
    dis3.onchange = function () {
        if (this.value !== "" || this.value.length > 0) {
            document.getElementById("newcat").disabled = true;
        }
        if (this.value === "") {
            document.getElementById("newcat").disabled = false;
        }
    };
    dis4.onchange = function(){
        if (this.value !== "" || this.value.length > 0) {
            document.getElementById("cat_name").disabled = true;
        }
        if (this.value === "") {
            document.getElementById("cat_name").disabled = false;
        }
    }

</script>
--}}

<script>
    /*$(document).ready(function(){
        $(document).on('change','#filter',function(){
           var value = $(this).val();
           $.ajax(
               {
                   url:",
                   type:'POST',
                   data:{value : value},
                   beforeSend:function(){

                    $("#filter-table").html('working on');
                   },
                   success:function(response){
                       $("#filter-table").html(response);
                   },
               }
           );
       });

    });*/



</script>


</html>