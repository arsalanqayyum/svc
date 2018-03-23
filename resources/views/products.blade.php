@extends('main')
@section('content')
    <div class="prodcrumb"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-group">
                    <li class="breadcrumb list-group-item"><h4>by category</h4></li>
                    @foreach($sidecats as $cats)
                        <li class="list-group-item">
                            <a  href="{{url('products',[$cats->cats])}}"> {{$cats->cats}}</a><span class="badge">{{$cats->counter}}</span>
                        </li>
                    @endforeach
                    <li class="breadcrumb list-group-item"><h4>by products</h4></li>
                    @foreach($prodcat as $cats)
                        <li class="list-group-item">
                            <a href="{{url('prodcat',[$cats->prod_cat])}}">{{$cats->prod_cat}}</a><span class="badge">{{$cats->counter}}</span>
                        </li>
                        @endforeach
                </ul>
            </div>
            <div class="col-sm-9">
                <div class="breadcrumb">
                    <h4>{{$cat}}</h4>
                </div>
            @foreach($getcat as $posts)
                <div class="col-sm-4">
                    <div class="new-items bottom">
                        <img src="{{asset('uploads/images').'/'.$posts->image}}" class="img-responsive" width="100%"/>
                        <div class="overlay">
                            <div class="text">{{$posts->sub_title}}</div>
                            <a href="{{url('',[$posts->id])}}">view details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection