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

        {{--<div class="container">
            <div class="col-sm-12">
                <a href="" class="btn btn-info" style="margin-top: 15px; margin-bottom: 15px; float: right">Add New</a>
            </div>

            <table class="table table-bordered">
                <th>ID</th>
                <th>Title</th>
                <th>Head</th>
                <th>Content</th>
                <th>Action</th>
                @foreach($allwidget as $widget)
                    <tr>
                        <td>{{$widget->id}}</td>
                        <td>{{$widget->title}}</td>
                        <td>{{$widget->head}}</td>
                        <td width="600px">{{$widget->content}}</td>
                        <td>
                            <a href="" class="btn btn-success"><i class="fa fa-edit"></i> </a>
                            <a href="" class="btn btn-danger"><i class="fa fa-close"></i> </a>
                        </td>
                    </tr>
                    @endforeach
            </table>

        </div>--}}

        <div class="container">
            <div class="col-sm-4">
                <form method="POST" action="{{route('updatewidget1',$allwidget->pluck('id')[0])}}">
                    {{csrf_field()}}
                <button data-toggle="collapse" data-target="#widget1" class="btn btn-default">Widget 1</button>

                <div id="widget1" class="collapsed">
                    <div class="my-widget">
                        <h4>Title</h4>
                        <input type="text" class="form-control" placeholder="Enter Title" name="widget1" value="{{$allwidget->pluck('title')[0]}}" >
                        <button type="submit" class="btn btn-success">submit</button>
                    </div>
                </div>
                </form>
            </div>

            <div class="col-sm-4">
                <form method="POST" action="{{route('updatewidget2',$allwidget->pluck('id')[1])}}">
                    {{csrf_field()}}
                <button data-toggle="collapse" data-target="#widget2" class="btn btn-default">Widget 2</button>

                <div id="widget2" class="collapsed">
                    <div class="my-widget">
                        <h4>Title</h4>
                        <input type="text" class="form-control" placeholder="Enter Title" name="widget2" value="{{$allwidget->pluck('title')[1]}}" >
                        <button type="button" class="btn btn-success">submit</button>
                    </div>
                </div>
                </form>
            </div>

            <div class="col-sm-4">
                <form method="POST" action="{{route('updatewidget3',$allwidget->pluck('id')[6])}}">
                    {{csrf_field()}}
                <button data-toggle="collapse" data-target="#widget3" class="btn btn-default">Widget 3</button>

                <div id="widget3" class="collapsed">
                    <div class="my-widget">
                        <h4>Title</h4>
                        <input type="text" class="form-control" placeholder="Enter Title" name="widget3" value="{{$allwidget->pluck('title')[6]}}" >
                        <button type="submit" class="btn btn-success">submit</button>
                    </div>
                </div>
                </form>
            </div>

            <div class="col-sm-4">
                <form method="POST" action="{{route('updatewidget4')}}">
                    {{csrf_field()}}
                <button data-toggle="collapse" data-target="#widget4" class="btn btn-default">Widget 4</button>

                <div id="widget4" class="collapsed">
                    <div class="my-widget">
                        <h4>Title</h4>
                        <input type="text" placeholder="Enter Title" name="widget4" value="{{$allwidget->pluck('title')[2]}}" >
                        <h4>Head</h4>
                        <input type="text" name="head1" value="{{$allwidget->pluck('head')[3]}}">
                        <h4>Content</h4>
                        <textarea class="form-control" name="content1">{{$allwidget->pluck('content')[3]}}</textarea>
                        <h4>Head</h4>
                        <input type="text" name="head2" value="{{$allwidget->pluck('head')[4]}}">
                        <h4>Content</h4>
                        <textarea class="form-control" name="content2"> {{$allwidget->pluck('content')[4]}}</textarea>
                        <h4>Head</h4>
                        <input type="text" name="head3" value="{{$allwidget->pluck('head')[5]}}">
                        <h4>Content</h4>
                        <textarea class="form-control" name="content3">{{$allwidget->pluck('content')[5]}}</textarea>
                        <button type="submit" class="btn btn-success">submit</button>
                    </div>
                </div>
                </form>
            </div>


            <div class="col-sm-4">
                <form method="POST" action="{{route('updatewidget5')}}">
                    {{csrf_field()}}
                <button data-toggle="collapse" data-target="#widget5" class="btn btn-default">Widget 5</button>

                <div id="widget5" class="collapsed">
                    <div class="my-widget">
                        <h4>Title</h4>
                        <input type="text" class="form-control" placeholder="Enter Title" name="widget5" value="{{$allwidget->pluck('title')[9]}}" >
                        <button type="submit" class="btn btn-success">submit</button>
                    </div>
                </div>
                </form>
            </div>


            <div class="col-sm-4">
                <button data-toggle="collapse" data-target="#widget6" class="btn btn-default">Widget 6</button>
                <form method="POST" action="{{route('updatewidget6')}}" enctype="application/json">
                    {{csrf_field()}}
                <div id="widget6" class="collapsed">
                    <div class="my-widget">
                        <h4>Title</h4>
                        <input type="text" placeholder="Enter Title" name="widget6" value="{{$allwidget->pluck('title')[7]}}" >
                        <h4>Email </h4>
                        @foreach(json_decode($allwidget->pluck('links')[7]) as $key => $value )
                            <?php
                                $value = str_replace("\r\n","",$value);
                                echo "<input type='text' name='email[]' value=$value>";
                            ?>

                        @endforeach
                        <button type="submit" class="btn btn-success">submit</button>
                    </div>
                </div>
                </form>
            </div>


            <div class="col-sm-4">
                <form method="POST" action="{{route('updatewidget7')}}">
                    {{csrf_field()}}
                <button data-toggle="collapse" data-target="#widget7" class="btn btn-default">Widget 7</button>
                <div id="widget7" class="collapsed">
                    <div class="my-widget">
                        <h4>Title</h4>
                        <input type="text" name="widget7" placeholder="Enter Title" value="{{$allwidget->pluck('title')[8]}}" >
                        <h4>Cell</h4>
                        @foreach(json_decode($allwidget->pluck('links')[8],true) as $key => $value)
                            <?php
                                $value = str_replace("\r\n","", $value);
                                echo "<input type='text' name='cell[]' value= $value>";
                            ?>
                        @endforeach
                        <button type="submit" class="btn btn-success">submit</button>
                    </div>
                </div>
                </form>
            </div>


            <div class="col-sm-4">
                <form method="POST" action="{{route('updatewidget8')}}">
                    {{csrf_field()}}
                <button data-toggle="collapse" data-target="#widget8" class="btn btn-default">Widget 8</button>
                <div id="widget8" class="collapsed">
                    <div class="my-widget">
                        <h4>Title</h4>
                        <input type="text" name="widget8" placeholder="Enter Title" value="{{$allwidget->pluck('title')[11]}}" >
                        <h4>Content</h4>
                        <input type="text" name="address" class="form-control" value="{{$allwidget->pluck('content')[11]}}">
                        <button type="submit" class="btn btn-success">submit</button>
                    </div>
                </div>
                </form>
            </div>

        </div>

    </div>
    @endsection