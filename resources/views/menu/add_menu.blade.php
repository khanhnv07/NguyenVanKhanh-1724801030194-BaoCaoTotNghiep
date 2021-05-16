@extends('admin_layout')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Menu</h1>
            
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">

                    <!-- /.card-header -->
                    <!-- form start -->

                    @if (Session::has('error_message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{ Session::get('error_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if (Session::has('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('success_message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form role="form" method="post" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header">
                                        
                                        <a href="" class="btn btn-secondary">Export Excel</a>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                      <table id="example1" class="table table-bordered table-striped">
                                        
                                        <thead>
                                            
                                        <tr>
                                         
                                          <th>Name</th>
                                          <th>Link</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($menu as $item)
                                            <tr>
                                                
                                                <td>{{$item->menu_name}}</td>
                                                <td>{{$item->menu_link}}</td>
                                                <td>{{$item->menu_status}}</td>
                                                <td>
                                                    <a href="" class="btn btn-warning">Edit</a>
                                                    <a href="" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                   
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>Link</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                      </table>
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                                  <!-- /.card -->
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Menu Name</label>
                                        <input type="text" name="menu_name" class="form-control"
                                            placeholder="Enter Menu Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Menu Link</label>
                                        <input type="text" name="menu_link" class="form-control"
                                            placeholder="Enter Menu Link" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Menu Description</label>
                                        <textarea name="menu_desc" class="form-control" id="menu_desc" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Menu Status</label>
                                        <select name="menu_status" class="form-control" id="">
                                            <option selected value="1">Active</option>
                                            <option value="0">Unactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
