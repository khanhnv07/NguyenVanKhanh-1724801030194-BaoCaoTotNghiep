@extends('admin_layout')
@section('content')
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Service List</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Service</a></li>
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
                        <a href="{{route('service.add')}}" class="btn btn-primary">Add New</a>
                        <a href="{{route('admin.excel')}}" class="btn btn-secondary">Export Excel</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <form action="{{route('service.delete')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      
                      <table id="example1" class="table table-bordered table-striped">
                        
                        <thead>
                            
                        <tr>
                          <th>Select</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Descript</th>
                          <th>Status</th>
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
                                    id="checkboxNoLabel"
                                    value="{{$item->id}}" name="service_id[]"
                                    
                                  />
                                </th>
                                <td>{{$item->service_name}}</td>
                                <td>
                                    <img src="{{asset('img/service_images/'.$item->service_image)}}" width="150px" alt="">
                                </td>
                                <td>{{$item->service_desc}}</td>
                                <td>
                                    @if ($item->service_status == 1)
                                        <a href="">Active</a>
                                    @else
                                        <a href="">Unactive</a>
                                    @endif
                                </td>
                                <td>{{$item->created_at}}</td>
                                <td>
                                  <a href="{{('././edit/'.$item->id)}}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th><input type="submit" class="btn btn-danger" value="delete"></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
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
