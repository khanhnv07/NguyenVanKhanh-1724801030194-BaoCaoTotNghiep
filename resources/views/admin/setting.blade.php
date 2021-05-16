@extends('admin_layout')
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Setting</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update Password</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                @if (Session::has('error_message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      {{ Session::get('error_message')}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>  
                  @endif

                  @if (Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ Session::get('success_message')}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>  
                  @endif

                <form role="form" method="post" action="{{route('admin.settings')}}" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    {{-- <div class="form-group">
                        <label for="exampleInputEmail1">Admin Name</label>
                        <input type="text" name="name" class="form-control" value="{{Auth::guard('admin')->user()->name}}" placeholder="Enter Admin Name">
                      </div> --}}
                    <div class="form-group">
                      <label for="exampleInputEmail1">Admin Email</label>
                      <input type="email" name="email" class="form-control" value="{{Auth::guard('admin')->user()->email}}" placeholder="Enter email" readonly>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Current Password</label>
                      <input type="password" name="current_password" id="current_password" 
                        class="form-control" placeholder="Enter Current Password" required>
                      <span id="checkCurrentPwd"></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="password" name="new_password" id="new_password" 
                          class="form-control" placeholder="Enter New Password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" 
                          class="form-control" placeholder="Confirm New Password" required>
                    </div>
                    @if (Session::has('confirm_password_message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      {{ Session::get('confirm_password_message')}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>  
                    @endif  
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
        </div>
    </div>

</div>
@endsection