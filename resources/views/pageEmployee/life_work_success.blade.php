@extends('pageEmployee.layout_employee')
@section('content')
    <div class="container-fluid">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h3>Việc Đã Làm</h3>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Nhân Viên</a></li>
                      <li class="breadcrumb-item active">Danh Sách Việc Đã Làm</li>
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
                        
                        <a href="{{route('admin.excel')}}" class="btn btn-secondary">Xuất File Excel</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example1" class="table table-bordered table-striped">
                        
                        <thead>
                            
                        <tr>
                          <th>#</th>
                          
                          <th>Dịch Vụ</th>
                          <th>Bắt Đầu</th>
                          <th>Kết Thúc</th>
                          <th>Địa Chỉ</th>
                          <th>Trạng Thái</th>
                         
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($work_list as $key => $item)
                            <tr>
                                <td>{{$key +1}}</td>
                                <td>
                                    @foreach ($services as $service)
                                        <?php
                                            $a = explode(',',$item->service_id);
                                            for($i=0; $i<count($a); $i++)
                                            {
                                                if($a[$i] == $service->id){
                                            ?>
                                                <h6>{{$service->service_name}}</h6> <br>
                                            <?php
                                            }
                                        }
                                        ?>
                                    @endforeach
                                </td>
                                
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                <td>
                                    {{$item->address}}
                                </td>
                                <td>
                                    Success
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
