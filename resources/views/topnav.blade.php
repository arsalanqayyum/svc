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
                <a class="navbar-brand" href="#"><img src="{{asset('uploads/images').'/'.'logo2.png'}}" class="logo2"/></a>
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


<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="logo"></div>
        </div>
        <div class="col-sm-9">
            <div class="input-group">
                    <button class="btn filter-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">select categories <span class="caret"></span></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                    <input type="submit" class="btn filter-search" value="search">
                <div class="input-group">
                    <button class="btn filter-search dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">select categories <span class="caret"></span></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                    <input type="text" class="btn form-control2" placeholder="Search for Products">
                    <input type="submit" class="btn filter-btn" value="go">
                </div>
            </div>

        </div>
    </div>
</div>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#newNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand visible-xs brand_visible tagline" href="#"></a>
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
    </div>
</nav>
