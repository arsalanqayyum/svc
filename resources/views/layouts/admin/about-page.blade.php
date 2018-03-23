@extends('layouts.admin.dashboard')
@section('admin-content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#">Add Post</a>
                    </li>

                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>
        </div>
        <form method="POST" action="{{route('updateaboutpage')}}">
            {{csrf_field()}}
        <div class="col-sm-12">
            <h1>Title</h1>
            <input type="text" value="{{$getcontent->pluck('title')[12]}}" size="100px" name="title">
        </div>
        <div class="col-sm-6">
            <h1>Head</h1>
            <input type="text" name="head1" class="form-control" value="{{$getcontent->pluck('head')[13]}}">
            <h1>content</h1>
            <textarea class="form-control" name="cntnt1">{{$getcontent->pluck('content')[13]}}</textarea>
        </div>
        <div class="col-sm-6">
            <h1>Head</h1>
            <input type="text" name="head2" class="form-control" value="{{$getcontent->pluck('head')[14]}}">
            <h1>content</h1>
            <textarea class="form-control" name="content2">{{$getcontent->pluck('content')[14]}}</textarea>
        </div>
        <div class="col-sm-12">
            <h1>Title</h1>
            <input type="text" name="head6" class="form-control" value="{{$getcontent->pluck('head')[18]}}">
        </div>
        <div class="col-sm-4">
            <h1>Head</h1>
            <input type="text" name="head3" class="form-control" value="{{$getcontent->pluck('head')[15]}}">
            <h1>Content</h1>
            <textarea class="form-control" name="content3">{{$getcontent->pluck('content')[15]}}</textarea>
        </div>
        <div class="col-sm-4">
            <h1>Head</h1>
            <input type="text" name="head4" class="form-control" value="{{$getcontent->pluck('head')[16]}}">
            <h1>Content</h1>
            <textarea class="form-control" name="content4">{{$getcontent->pluck('content')[16]}}</textarea>
        </div>
        <div class="col-sm-4">
            <h1>Head</h1>
            <input type="text" name="head5" class="form-control" value="{{$getcontent->pluck('head')[17]}}">
            <h1>Content</h1>
            <textarea class="form-control" name="content5">{{$getcontent->pluck('content')[17]}}</textarea>
        </div>
            <input type="submit" value="update" class="btn btn-info">
        </form>


    </div>

    @endsection