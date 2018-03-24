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
        <div class="container">
            <form method="POST" action="{{route('updatepost',$post->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <h2>Post Title</h2>
                <input type="text" value="{{$post->post_title}}" placeholder="Enter title" name="post_title" class="form-control">
                <h2>Sub Title</h2>
                <input type="text" value="{{$post->sub_title}}" placeholder="Enter sub title" name="sub_title" class="form-control">
                <h2>Description</h2>
                <textarea placeholder="Enter Description" name="description" class="form-control">{{$post->post_content}}</textarea>

                <table class="table-responsive">
                    <tr>
                        <td><h2>Old Price</h2></td>
                        <td><h2>New Price</h2></td>
                    </tr>
                    <tr>
                        <td><input type="text" value="{{$post->old_price}}" placeholder="Old Price" name="old_price" class="form-control"> </td>
                        <td><input type="text" value="{{$post->new_price}}" placeholder="New Price" name="new_price" class="form-control"> </td>
                    </tr>
                    <tr>
                        <td><h2>Category</h2></td>
                        <td><h2>Prod Category</h2></td>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-control" name="category">
                                @foreach($catfilter as $cats)
                                    <option value="{{$cats->id}}" @if($post->cats_id == $cats->id)selected @endif>{{$cats->cats}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="prod_cat">
                                @foreach($prodcat as $cats)
                                    <option value="{{$cats->id}}" @if($post->prod_id == $cats->id)selected @endif>{{$cats->prod_cat}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </table>
                @if(json_decode($post->size) != null){
                <h2>Select sizes</h2>
                <input type="checkbox" value="s" name="size[]" @php if (in_array('s',json_decode($post->size))){echo 'checked';} @endphp>Small<br>
                <input type="checkbox" value="m" name="size[]" @php if (in_array('m',json_decode($post->size))){echo 'checked';} @endphp>medium<br>
                <input type="checkbox" value="l" name="size[]" @php if (in_array('l',json_decode($post->size))){echo 'checked';} @endphp>large<br>
                }
            @endif

                <h2>Set Featured Image</h2>
                <img src="{{asset('uploads/images').'/'.$post->image}}" width="320px">
                <input type="file" name="image">


                <h2>Click to upload</h2>


                <input type="submit" value="Upadate" class="btn btn-info">


            </form>
        </div>
    </div>
@endsection