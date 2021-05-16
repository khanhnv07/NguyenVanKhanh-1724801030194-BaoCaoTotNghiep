@extends('admin_layout')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Service</h1>
            <a href="{{route('service.show')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> List Service</a>
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

                    <form role="form" method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Service Name</label>
                                        <input type="text" name="service_name" class="form-control"
                                            placeholder="Enter Service Name" required>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Service Descript</label>
                                        <textarea name="service_desc" id="summary-ckeditor" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Service Detail</label>
                                        <textarea name="service_detail" class="form-control" id="detail_ckeditor" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Service Status</label>
                                        <select name="service_status" class="form-control" id="">
                                            <option selected value="1">Active</option>
                                            <option value="2">UnActive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Service Image</label>
                                        <input name="service_image" type="file" class="form-control" onchange="previewFile(this)">
                                        <img alt="Service Image" id="serviceImg" style="max-width: 130px;margin-top:20px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Service Icon</label>
                                        <input name="service_icon" type="text" class="form-control">
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
