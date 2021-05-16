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
                      
                        <a href="{{route('admin.excel')}}" class="btn btn-secondary">Export Excel</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        
                        <thead>
                            
                        <tr>
                          <th>Customer</th>
                          <th>Service</th>
                          <th>Total</th>
                          <th>Payment type</th>
                          <th>Paid Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->customer_name}}</td>
                                <td>
                                    @foreach ($services as $service)
                                        <?php
                                            $a = explode(',',$item->select_service_name);
                                            $price = explode(',',$item->service_price);
                                            for($i=0; $i<count($a); $i++)
                                            {
                                                if($a[$i] == $service->id){
                                            ?>
                                                <h6>{{$service->service_name}} - {{$price[$i]}}</h6> <br>
                                            <?php
                                                }
                                            }
                                        ?>
                                    @endforeach
                                </td>
                                <td>
                                  <?php
                                      
                                      $price = explode(',',$item->service_price);
                                      $total = 0;
                                      for($i=0; $i<count($price); $i++)
                                      {
                                          $total = $total + $price[$i];
                                      ?>
                                          
                                      <?php
                                          }
                                      
                                  ?>
                                  <h6>{{$total}}</h6> <br>
                                </td>
                                <td>
                                    @if ($item->payment_type == 1)
                                      Online Payment 
                                    @endif
                                    @if ($item->payment_type == 2)
                                      Direct Payment 
                                    @endif
                                </td>
                                <td>
                                    @if ($item->paid_status == 1)
                                      Paid 
                                    @endif
                                    @if ($item->paid_status == 2)
                                      Unpaid
                                    @endif
                                </td>
                                <td>
                                  <a href="{{URL::to('admin/invoice/detail/'.$item->invoice_id)}}" class="btn btn-warning">Detail</a>
                                  <a href="{{URL::to('admin/employee/delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
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
