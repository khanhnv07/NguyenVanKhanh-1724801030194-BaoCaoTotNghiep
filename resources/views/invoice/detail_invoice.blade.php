@extends('admin_layout')
@section('content')
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">    
                    <h1>Detail Invoice</h1>
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
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>INVOICE</h2>
                                <p>homeservice@gmail.com</p>
                                <p>+84 976 517 102</p>
                            </div>
                            <div class="col-sm-6">
                                <h1 class="h1-logo">
                                    <a class="the-logo" href="">Home<span style="color: #F45D01;">Service</span></a>
                                </h1>
                            </div>
                        </div> <br> <br>
                        <div class="row">
                            <div class="col-sm-4">
                                <h3>Bill Create</h3>
                                <p>{{$data->name}}</p>
                                <p>{{$data->email}}</p>
                            </div>
                            <div class="col-sm-4">
                                <h3>Customer</h3>
                                <p>{{$data->customer_name}}</p>
                                <p>{{$data->customer_email}}</p>
                                <p>{{$data->customer_phone}}</p>
                            </div>
                            <div class="col-sm-4">
                                <h3>Info Invoice</h3>
                                <p>InvoiceCode : {{$data->invoice_id}}</p>
                                <p>Invoice Date : {{$data->created_at}}</p>
                                <p>Invoice DueDate :</p>
                            </div>
                        </div><br> <br>
                        <div class="row">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Service</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Thanh Tien</th>
                                </tr>
                              </thead>
                              <tbody>
                                
                                    @foreach ($services as $key => $service)
                                        <?php
                                            $a = explode(',',$data->select_service_name);
                                            $price = explode(',',$data->service_price);
                                            for($i=0; $i<count($a); $i++)
                                            {
                                                if($a[$i] == $service->id){
                                            ?>
                                                <tr>
                                                  <th scope="row">{{$i + 1}}</th>
                                                  <td>
                                                    <h6>{{$service->service_name}}</h6>
                                                  </td>
                                                  <td>{{$price[$i]}}</td>
                                                  <td>{{$price[$i]}}</td>
                                                </tr>
                                            <?php
                                                }
                                            }
                                        ?>
                                    @endforeach
                                    
                              </tbody>
                            </table>
                            <div class="row col-sm-12">
                              <div class="container">
                                <div class="col-m-4 total">
                                  <h6>Total : <span style="padding-left: 8%">{{$total}}</span></h6>
                                  <h6>Type : <span style="padding-left: 8.5%">
                                      @if ($data->payment_type == 1)
                                          Online Payment 
                                      @endif
                                      @if ($data->payment_type == 2)
                                          Direct Payment
                                      @endif
                                  </span></h6>
                                  <h6>Status : <span style="padding-left: 5.5%">
                                        @if ($data->paid_status == 1)
                                            Paid 
                                        @endif
                                        @if ($data->paid_status == 2)
                                            Unpaid 
                                        @endif
                                  </span></h6>
                                </div>
                              </div>
                              
                              
                            </div>
                        </div>
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
<style>
    .the-logo{
        color: #141414;
        font-weight: 700;
        font-size: 30px;
        padding: 0;
        display: inline-block;
    }
    .h1-logo {
        text-align: right;
        padding-top: 9%;
        padding-right: 9%;
    }
    .total {
      padding-left: 67%;
    }
</style>
