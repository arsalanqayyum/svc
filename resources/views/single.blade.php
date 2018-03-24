@extends('main')
@section('content')

    <div class="breadcrumb">
        @if($cat_detail->images != null)
        <img src="{{asset('uploads/images').'/'.$cat_detail->images}}">
        @else
            <img src="{{asset('uploads/images/e-commerce-banner.jpg')}}">
        @endif
            <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4>{{$cat_detail->cats}}</h4>
                </div>
            </div>
        </div>

    </div>



    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="single-img">
                    <img src="{{asset('uploads/images').'/'.$getpost->image}}" class="img-responsive" />
                </div>
            </div>
            <div class="col-sm-6">
                <h1 class="single-main-heading">{{$getpost->post_title}}</h1>
                <h3>{{$getpost->sub_title}}</h3>
                <ul class="list-inline text-center">
                    @if($getpost->old_price != null)
                    <li class="old-price">{{$getpost->old_price}} &euro;</li>
                    @endif
                    <li class="new-price">{{$getpost->new_price}} &euro; <i class="fa fa-tag"></i></li>
                </ul>
                <hr />
                @if(json_decode($getpost->size))
                <h4>pick your size <i class="fa fa-check"></i></h4>
                <ul class="list-inline circle-align">
                    @foreach(json_decode($getpost->size,true) as $key => $value)

                        <?php
                        $value = str_replace("\r\n","<li class='circle'><span> ", $value);
                        echo "<li class='circle'><span> " . $value. "</span></li>";
                        ?>


                    @endforeach
                </ul>
                @endif

                <h4>Description <i class="fa fa-info-circle"></i></h4>
                <p class="desc">{{$getpost->post_content}}</p>

                <ul class="list-inline text-center top">
                    <li class="border-right"><i class="fa fa-2x fa-truck"></i> <span>Free Shipping from 7 &euro;</span></li>
                    <li class="border-right"><i class="fa fa-2x fa-credit-card"></i> <span>cash on delievery</span></li>
                    <li><i class="fa fa-2x fa-gift"></i> <span>goods return policy</span></li>
                </ul>

                <ul class="list-inline text-center media-icons">
                    <li><a href="#"><i class="fa fa-2x fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-google-plus"></i></a></li>
                </ul>

            </div>
        </div>
    </div>
@if(!empty($related_products))
    <div class="single-pg-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1><span>You Might also like! <i class="fa fa-heart-o"></i></span></h1>
                </div>
            </div>
            <div class="row">
                @foreach($related_products as $posts)
                <div class="col-sm-3">
                    <div class="new-items">
                        <a href="{{url('',[$posts->id])}}">
                        <img src="{{asset('uploads/images').'/'.$posts->image}}" class="img-responsive"/>
                        </a>
                        <h4>{{$posts->post_title}}</h4>
                        <p class="price">Rs. {{$posts->new_price}} </p>
                        <div class="btn-align">
                            <a href="{{url('',[$posts->id])}}">view details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
    @endsection