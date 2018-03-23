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
        <div class="col-sm-12">
            <a href="#" data-toggle="modal" data-target="#addModal" class="btn btn-info" style="margin-top: 15px; margin-bottom: 15px; float: right">Add New</a>
        </div>

        <table class="table table-bordered">
            <th>ID</th>
            <th>Product Category</th>
            <th>Action</th>
            @foreach($allprodcat as $prodcat)
            <tr>
                <td>{{$prodcat->id}}</td>
                <td>{{$prodcat->prod_cat}}</td>
                <td>
                    <a href="#" data-toggle="modal" data-target="#editModal_{{$prodcat->id}}" class="btn btn-success"><i class="fa fa-edit"></i> </a>
                    <a href="#" data-toggle="modal" data-target="#deleteModal_{{$prodcat->id}}" class="btn btn-danger"><i class="fa fa-close"></i> </a>
                </td>
            </tr>


                <!-- Delete Modal -->
                <form method="GET" action="{{route('deleteprodcat',$prodcat->id)}}">
                    {{csrf_field()}}
                    <div id="deleteModal_{{$prodcat->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Delete Prodcat</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this Prodcat?</p>



                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Yes" class="btn btn-success">
                                    <input type="button" value="No" class="close btn btn-danger" data-dismiss="modal">
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <!-- Delete Modal End -->


                <!-- Edit Modal -->
                <form method="POST" action="{{route('editallprodcat',$prodcat->id)}}">
                    {{csrf_field()}}
                    <div id="editModal_{{$prodcat->id}}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Edit Prodcat</h4>
                                </div>
                                <div class="modal-body">
                                    <input type="text" class="form-control" name="prodcat" value="{{$prodcat->prod_cat}}">
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" value="Yes" class="btn btn-success">
                                    <input type="button" value="No" class="close btn btn-danger" data-dismiss="modal">
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
                <!-- Edit Modal End -->


            @endforeach
        </table>
    </div>
        <!-- Add Modal -->
        <form method="POST" action="{{route('addprodcat')}}">
            {{csrf_field()}}
            <div id="addModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Prodcat</h4>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" name="newprodcat">

                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Yes" class="btn btn-success">
                            <input type="button" value="No" class="close btn btn-danger" data-dismiss="modal">
                        </div>
                    </div>

                </div>
            </div>
        </form>
        <!-- Add Modal End -->


    </div>
    @endsection
