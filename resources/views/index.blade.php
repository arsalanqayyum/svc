@extends('main')
@section('content')

    <div id="myCarousel" class="carousel slider slide" data-ride="carousel">
        <!-- Indicators -->
        {{--<ol class="carousel-indicators">
            @foreach ($sliders as $key => $slide)
                <li data-target="#myCarousel" data-slide-to="{{$slide->index}}" class="{{ $key == 0 ? ' active' : '' }}"></li>
            @endforeach
        </ol>--}}

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach ($sliders as $key => $slide)
                <div class="item{{ $key == 0 ? ' active' : '' }}">
                    <img src="{{asset('uploads/slider').'/'.$slide->images }}" width="100%">
                </div>
            @endforeach
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

<div class="big-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="main-heading">{{$widget->pluck('title')[0]}} <i class="fa fa-tags"></i></h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach($newitems as $posts)
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="new-items">
                    <img src="{{asset('uploads/images').'/'.$posts->image}}" class="img-responsive"/>
                    <div class="overlay">
                        <div class="text">{{$posts->sub_title}}</div>
                        <a href="{{url('',[$posts->id])}}">view details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="viewall">
                <a href="{{url('products',[$posts->cats])}}">view all</a>
                </div>
            </div>
        </div>
    </div>

    <hr/>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="main-heading">{{$widget->pluck('title')[1]}}<i class="fa fa-lightbulb-o"></i></h1>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            @foreach($scndsec as $post)
            <div class="col-sm-3">
                <div class="new-items">
                    <div class="background">
                        <div class="tag">
                            <span>10% off</span>
                            <img src="{{asset('uploads/images').'/'.$post->image}}" class="img-size"/>
                        </div>
                            <h4>{{$post->post_title}}</h4>
                            <p class="price"> {{$post->new_price}} </p>

                    </div>
                    <div class="btn-align">
                        <a href="{{url('',[$post->id])}}"> click view </a>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="viewall">
                    <a href="{{url('products',[$post->cats])}}">view all</a>
                </div>
            </div>
        </div>
    </div>

    <hr/>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="main-heading">Top sales<i class="fa fa-lightbulb-o"></i></h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="discount-panel">
                    <h2>Discounts</h2>
                    <span>50%</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci id iusto maiores! Beatae deleniti dolore</p>
                </div>
            </div>
            <div class="col-sm-8">
                <div id="mi-slider" class="mi-slider">
                    <ul>
                        <li><a href="#"><img src="{{asset('uploads/images/1.jpg')}}" alt="img01"><h4>Boots</h4></a></li>
                        <li><a href="#"><img src="{{asset('uploads/images/2.jpg')}}" alt="img02"><h4>Oxfords</h4></a></li>
                        <li><a href="#"><img src="{{asset('uploads/images/3.jpg')}}" alt="img03"><h4>Loafers</h4></a></li>
                        <li><a href="#"><img src="{{asset('uploads/images/4.jpg')}}" alt="img04"><h4>Sneakers</h4></a></li>
                    </ul>
                    <ul>
                        <li><a href="#"><img src="images/5.jpg" alt="img05"><h4>Belts</h4></a></li>
                        <li><a href="#"><img src="images/6.jpg" alt="img06"><h4>Hats & Caps</h4></a></li>
                        <li><a href="#"><img src="images/7.jpg" alt="img07"><h4>Sunglasses</h4></a></li>
                        <li><a href="#"><img src="images/8.jpg" alt="img08"><h4>Scarves</h4></a></li>
                    </ul>
                    <ul>
                        <li><a href="#"><img src="images/9.jpg" alt="img09"><h4>Casual</h4></a></li>
                        <li><a href="#"><img src="images/10.jpg" alt="img10"><h4>Luxury</h4></a></li>
                        <li><a href="#"><img src="images/11.jpg" alt="img11"><h4>Sport</h4></a></li>
                    </ul>
                    <ul>
                        <li><a href="#"><img src="images/12.jpg" alt="img12"><h4>Carry-Ons</h4></a></li>
                        <li><a href="#"><img src="images/13.jpg" alt="img13"><h4>Duffel Bags</h4></a></li>
                        <li><a href="#"><img src="images/14.jpg" alt="img14"><h4>Laptop Bags</h4></a></li>
                        <li><a href="#"><img src="images/15.jpg" alt="img15"><h4>Briefcases</h4></a></li>
                    </ul>
                    <nav>
                        <a href="#">Shoes</a>
                        <a href="#">Accessories</a>
                        <a href="#">Watches</a>
                        <a href="#">Bags</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <hr/>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="main-heading">Gift Ideas<i class="fa fa-lightbulb-o"></i></h1>
            </div>
        </div>
        <div class="row">
            @foreach($third_sec as $post)
            <div class="col-sm-4">
                <div>
                    <img src="{{asset('uploads/images').'/'.$post->image}}" width="100%" height="300px">
                    <h4>{{$post->post_title}}</h4>
                    <div class="topsale-btn-align">
                        <a href="{{url('products',[$post->prod_cat])}}">Click View</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>

<div class="bg-img">
    <div class="pattern">
    </div>
    <h1 class="bg-head">{{$widget->pluck('title')[2]}}</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="bg-layer">
                    <i class="fa fa-3x fa-thumbs-o-up"></i>
                </div>
                <div>
                    <h3 class="head">{{$widget->pluck('head')[3]}}</h3>
                    <p class="paragragh">{{$widget->pluck('content')[3]}}</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="bg-layer">
                    <i class="fa fa-3x fa-star"></i>
                </div>
                <div>
                    <h3 class="head">{{$widget->pluck('head')[4]}}</h3>
                    <p class="paragragh">{{$widget->pluck('content')[4]}}</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="bg-layer">
                    <i class="fa fa-3x fa-shopping-bag"></i>
                </div>
                <div>
                    <h3 class="head">{{$widget->pluck('head')[5]}}</h3>
                    <p class="paragragh">{{$widget->pluck('content')[5]}}</p>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="main-heading">{{$widget->pluck('title')[6]}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="list-inline brands">
                @foreach($brands as $brand)
                <li><img src="{{asset('uploads/brands').'/'.$brand->images}}" class="img-responsive"/></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

    @endsection