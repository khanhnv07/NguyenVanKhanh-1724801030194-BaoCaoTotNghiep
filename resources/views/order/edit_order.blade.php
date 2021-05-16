@extends('admin_layout')
@section('content')
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Edit Order</h1>
                    
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Order</a></li>
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
                  {{-- @if (Session::has('order_success'))
                      <div class="alert alert-success" role="alert">
                        {{Session::get('order_success')}}
                      </div>
                  @endif
         --}}
                  <div class="card">
                    <div class="card-header">
                        <a href="{{route('show')}}" class="btn btn-primary">List Order</a>
                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{route('edit.order')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Customer Name</label>
                                        <input type="text" name="customer_name" class="form-control" value="{{$data->customer_name}}" >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Customer Email</label>
                                        <input type="email" name="customer_email" class="form-control" value="{{$data->customer_email}}" >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Customer Phone</label>
                                        <input type="number" name="customer_phone" class="form-control" value="{{$data->customer_phone}}" >
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Customer Address</label>
                                        <input type="text" name="customer_address" class="form-control" value="{{$data->customer_address}}" >
                                      </div>
                                      
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        
                                        <label for="exampleFormControlSelect2">Select Service</label>
                                        <select multiple class="form-control" name="service[]">
                                            @foreach ($services as $item)
                                                <option value="{{$item->id}}">{{$item->service_name}}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary float-right fr-10">Create Order</button>
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
