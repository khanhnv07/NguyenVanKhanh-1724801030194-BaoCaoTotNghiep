@extends('admin_layout')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Service</h1>
            <a href="{{route('employee.show')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> List Employee</a>
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

                    <form role="form" method="post" action="{{route('employee.create')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            placeholder="Name Employee" required>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                        <input type="file" name="image" class="form-control" onchange="previewFile(this)" >
                                        <img id="previewImg" alt="employee image" style="max-width: 130px; margin-top:20px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="email Employee" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">idcard</label>
                                        <input type="text" name="idcard" class="form-control"
                                            placeholder="IdCard Employee" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Birth</label>
                                        <input type="date" name="birth" class="form-control" equired>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" name="address" class="form-control"
                                            placeholder="Address Employee" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input name="phone" type="text" placeholder="Phone Employee" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Salary</label>
                                        <input name="salary" type="text" placeholder="Salary Employee" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        
                                        <label for="exampleInputEmail1">Majob </label>
                                            <ul class="list-group">
                                                @foreach ($majob as $item)
                                                <li class="list-group-item">
                                                    <input type="checkbox" name="majobId[]" id="majob" value="{{$item->id}}">
                                                    <label for=""> {{$item->name}} </label>
                                                </li>
                                                {{-- <li> {{$item->majob_name}} <input type="checkbox" name="majobId[]" id="majob" value="{{$item->id}}"></li> --}}
                                                @endforeach    
                                            </ul>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select name="status" class="form-control" id="">
                                            <option value="2">Free</option>
                                            <option value="1">Active</option>
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
