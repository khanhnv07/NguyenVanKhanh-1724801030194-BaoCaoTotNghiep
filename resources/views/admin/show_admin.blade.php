@extends('admin_layout')
@section('content')
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Admin List</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>
        
            <!-- Main content -->
            <section class="content">
              <div class="row">
                <div class="col-12">
                 
                  <!-- /.card -->
        
                  <div class="card">
                    <div class="card-header">
                        <a href="{{route('admin.add')}}" class="btn btn-primary">Add New</a>
                        <a href="{{route('admin.excel')}}" class="btn btn-secondary">Export Excel</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form action="{{route('admin.delete')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <table id="example1" class="table table-bordered table-striped">
                       
                        <thead>
                            
                        <tr>
                          <th>Select</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Email</th>
                          <th>Created At</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          
                            
                            @foreach ($data as $item)
                            <tr>
                                <th>
                                  <input
                                      type="checkbox"
                                        id="checkboxNoLabel" value="{{$item->id}}" name="id[]" 
                                    />
                                    
                                </th>
                                <td>{{$item->name}}</td>
                                <td>
                                  <img src="{{asset('/img/admin_images/'.$item->image)}}" width="150px" alt="">
                                </td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->created_at}}</td>
                                <td><a href="" class="btn btn-warning">Edit</a></td>
                            </tr>
                            @endforeach

                          
                            
                        </tbody>
                        <tfoot>
                          <tr>
                            <th><input type="submit" class="btn btn-danger" value="delete"></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th> </th>
                            <th></th>
                        </tr>
                        </tfoot>
                      
                      </table>
                    </form>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->
          </div>
    </div>
@endsection
