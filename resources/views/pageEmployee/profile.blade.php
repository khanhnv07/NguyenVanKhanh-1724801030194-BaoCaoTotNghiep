@extends('pageEmployee.layout_employee')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    

    <!-- Content Row -->
    <div class="row">

       <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{asset('img/employee_images/'.$employee->image)}}" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Sửa Hình Ảnh
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{$employee->name}}
                                    </h5>
                                    <h6>
                                        Nhân Viên
                                    </h6>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông Tin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Thống Kê</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Lưu"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            
                            <p>Chuyên Ngành</p>
                            @foreach ($majobs as $majob)
                                        <?php
                                            $a = explode(',',$employee->majobId);
                                            for($i=0; $i<count($a); $i++)
                                            {
                                                if($a[$i] == $majob->id){
                                            ?>
                                                
                                                <a href="">{{$majob->name}}</a><br/>
                                            <?php
                                                }
                                            }
                                        ?>
                            @endforeach
                            
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mã nhân viên</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employee->id}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Họ tên</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employee->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employee->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Điện Thoại</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employee->phone}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>CMND</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employee->idcard}}</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                       
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Việc đã làm</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Lương</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$employee->salary}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mã hợp đồng</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>#1232</p>
                                            </div>
                                        </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    </div>


    

</div>
@endsection