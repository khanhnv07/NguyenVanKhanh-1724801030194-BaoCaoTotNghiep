@extends('admin_layout')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Update Admin</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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

                    <form role="form" method="post" action="{{ route('admin.detail') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ Auth::guard('admin')->user()->name }}"
                                            placeholder="Enter Admin Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ Auth::guard('admin')->user()->email }}" placeholder="Enter email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                        <input name="image" type="file" class="form-control">
                                        @if (!empty(Auth::guard('admin')->user()->image))
                                            
                                            <input type="hidden" name="current_image" 
                                                value="{{Auth::guard('admin')->user()->image}}">
                                        @endif
                                        <br>
                                        <img src="{{asset('/img/admin_images/admin_photos/'.Auth::guard('admin')->user()->image)}}" width="200px" height="200px" alt="here is show image">
                                    </div>
                                </div>
                            </div>
                        </div>


                        @if (Session::has('confirm_password_message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session::get('confirm_password_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
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
