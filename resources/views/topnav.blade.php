<div id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <ul class="list-inline uc">
                    @foreach($gettopnav as $post)
                        <li><a href="{{$post->slug}}"> {{$post->navs}}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <ul class="list-inline float">
                    <li><i class="fa fa-phone"></i> {{$gettopnav->pluck('contact')[0]}}</li>
                    <li><i class="fa fa-envelope"></i> {{$gettopnav->pluck('contact')[1]}}</li>

                </ul>
            </div>

        </div>
    </div>
</div>


<div data-spy="affix" data-offset-top="350">
    <nav class="navbar navbar-default show ">
        <div class="play">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{asset('images').'/'.'logo2.png'}}" class="logo2"/></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav nav-left push-left col-xs-10">
                    <li><a href="#">men's wear</a></li>
                    <li class="separator"><span></span></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">women
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li class="separator"><span></span></li>
                    <li><a href="#">kids</a></li>
                    <li class="separator"><span></span></li>
                    <li><a href="#">handicrafts</a></li>
                    <li class="separator"><span></span></li>
                    <li><a href="#">scarfs</a></li>
                    <li class="separator"><span></span></li>
                    <li><a href="#">others</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>




<div class="up">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12" style="z-index: 1">
                <div class="logo"></div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                <p class="tagline">get you western style now...</p>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9">
                <nav class="navbar navbar-default">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#newNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand visible-xs brand_visible tagline" href="#">get you western style now...</a>
                    </div>
                    <div class="collapse navbar-collapse" id="newNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#">men's wear</a></li>
                            <li class="separator"><span></span></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">women
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Page 1-1</a></li>
                                    <li><a href="#">Page 1-2</a></li>
                                    <li><a href="#">Page 1-3</a></li>
                                </ul>
                            </li>
                            <li class="separator"><span></span></li>
                            <li><a href="#">kids</a></li>
                            <li class="separator"><span></span></li>
                            <li><a href="#">handicrafts</a></li>
                            <li class="separator"><span></span></li>
                            <li><a href="#">scarfs</a></li>
                            <li class="separator"><span></span></li>
                            <li><a href="#">others</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>

    </div>
</div>
