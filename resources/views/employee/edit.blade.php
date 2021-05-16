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
                    
                    @foreach ($data as $item)
                        
                        
                    <form role="form" method="post" action="{{URL::to('admin/employee/edit/'.$item->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{$item->name}}" required>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label><br>
                                        <img src="{{asset('img/employee_images/'.$item->image)}}" width="150px" alt="">
                                        <input type="file" name="image" class="form-control" >
                                        <input type="hidden" name="image_old" value="{{$item->image}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{$item->email}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">idcard</label>
                                        <input type="text" name="idcard" class="form-control"
                                            value="{{$item->idcard}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Birth</label>
                                        <input type="date" value="{{$item->birth}}" name="birth" class="form-control" equired>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" name="address" class="form-control"
                                            value="{{$item->address}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input name="phone" type="text" value="{{$item->phone}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Salary</label>
                                        <input name="salary" type="text" value="{{$item->salary}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        
                                        <label for="exampleInputEmail1">Chuyên Ngành</label>
                                        <ul class="list-group">
                                            @foreach ($majob as $key => $mj)
                                                
                                                    <input type="checkbox" 
                                                    <?php
                                                    $a = explode(',',$item->majobId);
                                                    for($i=0; $i<count($a); $i++)
                                                    {
                                                        if($a[$i] == $mj->id){
                                                    ?>
                                                        checked
                                                    <?php
                                                        }
                                                    }
                                                ?>
                                                         name="majobId[]" id="majob" value="{{$mj->id}}">
                                                    <label for="">{{$mj->name}} </label>
                                             @endforeach
                                        </ul>
                                     
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select name="status" class="form-control" id="">
                                            <?php 
                                                if($item->status == 1){ ?>
                                                <option value="0">Unactive</option>
                                                <option selected value="1">Active</option>
                                                <option value="2">Free</option>
                                            <?php }else if($item->status == 2){?>
                                                <option value="0">Unactive</option>
                                                <option value="1">Active</option>
                                                <option selected value="2">Free</option>
                                            <?php }else{?>
                                                <option selected value="0">Unactive</option>
                                                <option value="1">Active</option>
                                                <option value="2">Free</option>
                                            <?php }?>
                                            
                                            
                                        </select>
                                    </div>
                                   <input type="hidden" name="worklist" value="{{$item->worklist}}" id="">
                                </div>
                            </div>
                        </div>


                        
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                        </form>


                    @endforeach

                    
            </div>
        </div>

    </div>
@endsection
