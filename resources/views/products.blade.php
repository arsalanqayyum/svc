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
            <div class="col-sm-3">
                <ul class="list-group">
                    <li class="listgroup-bg list-group-item"><h4>by category</h4></li>
                    @foreach($sidecats as $cats)
                        <li class="list-group-item">
                            <a  href="{{url('products',[$cats->cats])}}"> {{$cats->cats}}</a><span class="badge">{{$cats->counter}}</span>
                        </li>
                    @endforeach
                    <li class="listgroup-bg list-group-item"><h4>by products</h4></li>
                    @foreach($prodcat as $cats)
                        <li class="list-group-item">
                            <a href="{{url('prodcat',[$cats->prod_cat])}}">{{$cats->prod_cat}}</a><span class="badge">{{$cats->counter}}</span>
                        </li>
                        @endforeach
                    <li class="listgroup-bg list-group-item"><h4>Top sale</h4></li>
                    <div class="side-panel-span-height">
                    @foreach($topsale as $post)
                        <li class="list-group-item">
                        <a href="{{url('',[$post->id])}}">
                            <img src="{{asset('uploads/images').'/'.$post->image}}" class="img-thumbnail" width="75px" style="margin-top: -30px">
                        </a>
                        <span class="side-panel-span">
                            <h5>{{$post->post_title}}</h5>
                            <p>Rs {{$post->new_price}}</p>
                            <p class="discount">Discount {{$post->discount}}</p>
                        </span>
                    </li>
                    @endforeach
                    </div>
                </ul>
            </div>
            <div class="col-sm-9">

                @foreach($getcat as $post)
                    <div class="col-sm-4">
                        <div>
                            <div class="prod-background">
                                @if($post->discount == null)
                                <div class="tag-hide">
                                    <span>{{$post->discount}}</span>
                                    <img src="{{asset('uploads/images').'/'.$post->image}}" class="prod-img-size"/>
                                </div>
                                @endif
                                @if($post->discount != null)
                                        <div class="tag">
                                            <span>{{$post->discount}}</span>
                                            <img src="{{asset('uploads/images').'/'.$post->image}}" class="prod-img-size"/>
                                        </div>
                                    @endif
                                <h4>{{$post->post_title}}</h4>
                                <p class="price">Price {{$post->new_price}} </p>

                            </div>
                            <div class="btn-align">
                                <a href="{{url('',[$post->id])}}"> click view </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection