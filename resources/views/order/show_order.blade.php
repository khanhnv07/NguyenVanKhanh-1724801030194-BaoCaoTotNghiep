@extends('admin_layout')
@section('content')
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Order List</h1>
                    
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
                        <a href="{{route('create.order')}}" class="btn btn-primary">Add New</a>
                        <a href="{{route('admin.excel')}}" class="btn btn-secondary">Export Excel</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        
                        <thead>
                            
                        <tr>
                          {{-- <th>Select</th> --}}
                          <th>Customer</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Service</th>
                          <th>Order Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                {{-- <th>
                                  <input
                                      type="checkbox"
                                      id="checkboxNoLabel"
                                      value=""
                                      aria-label="..."
                                    />
                                </th> --}}
                                <td>{{$item->customer_name}}</td>
                                <td>{{$item->customer_email}}</td>
                                <td>{{$item->customer_phone}}</td>
                                <td>
                                    {{$item->customer_address}}
                                </td>
                                <td>
                                    @foreach ($services as $service)
                                      <?php
                                          $a = explode(',',$item->service);
                                          for($i=0; $i<count($a); $i++)
                                          {
                                              if($a[$i] == $service->id){
                                          ?>
                                              <h6>{{$service->service_name}}</h6>
                                          <?php
                                              }
                                          }
                                      ?>
                                    @endforeach
                                </td>
                                <td>
                                    @if ($item->order_status == 0)
                                      <span style="color: orange" >Pending</span>
                                    @endif
                                    @if ($item->order_status == 1)
                                      <span style="color: red">Processing</span>
                                    @endif
                                    @if ($item->order_status == 2)
                                      <span style="color: green">Success</span>
                                    @endif
                                    
                                    
                                </td>
                                <td>
                                  
                                  @if ($item->order_status == 2)
                                      
                                  @else
                                    <a href="{{URL::to('admin/invoice/create/'.$item->order_id)}}">
                                        <i class="fas fa-file-invoice-dollar"></i>
                                    </a>
                                    <a href="{{URL::to('admin/invoice/edit/'.$item->order_id)}}" >
                                      <i class="fas fa-edit"></i>
                                    </a>
                                  @endif
                                  
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                      </table>
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
