@extends('page.layout_page')


@section('content')
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="#">Trang Chủ</a> » <span class="breadcrumb_last" aria-current="page">Dịch Vụ Đã Đặt</span>
    </div>
</nav>
<section class="w3l-content-with-photo-4">
    <br>
    <div class="container">
        <div class="row">
            
            <div class="col-sm-3">
                <br>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-4"><img src="https://lh3.googleusercontent.com/ogw/ADGmqu8uDvDT85An3IR2d7wAmjNabQgEKMV3pbQ78X7F=s64-c-mo" alt=""></div>
                        <div class="col-sm-8">
                            <h6 style="padding-top: 25%; color: #f45d01;">Khanh</h6>
                        </div>
                        
                    </div>
                    
                </div>
                <br>    
                <ul style="list-style-type:none;margin-left: 15%; ">
                  <li><a style="color: #f45d01" href="{{URL::to('/home-service/info')}}">Thong tin tai khoan</a> </li> <br>
                  <li><a style="color: #f45d01" href="{{URL::to('/home-service/my-order')}}">Dich vu da dat</a> </li> <br>
              </ul>
            </div>
            <div class="col-sm-9">
               
                <h3 class="text-left " style="color:#f45d01">Dịch Vụ Đã Đặt</h3>
                    
                    <div class="col-sm-10 offset-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col"></th>
                            <th scope="col">Dich Vu</th>
                            <th scope="col">Ngay Dat</th>
                            <th scope="col"></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($order as $key => $item)
                            <tr>
                              <th scope="row">1</th>
                              <td>
                                @foreach ($services as $service)
                                        <?php
                                            $a = explode(',',$item->service);
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
                              <td>
                                 <button class="btn btn-success" style="background-color:#f45d01" data-toggle="modal" data-target="#exampleModalDanhGia">Đánh Giá</button>
                              </td>
                            </tr>
                            <div class="modal fade" id="exampleModalDanhGia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" style="color:#f45d01" id="exampleModalLabel">Đánh Giá Dịch Vụ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action="{{route('customer.comment')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                      <div class="modal-body">
                                        <textarea name="comment" id="" cols="40" rows="4"></textarea>
                                        <input type="hidden" value="{{Session::get('customer_id')}}" name="customer_id">
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                          <button type="submit" style="background-color:#f45d01 " class="btn btn-primary">Lưu Đánh Giá</button>
                                      </div>
                                  </form>
                                  
                                </div>
                              </div>
                            </div>
                          @endforeach
                         
                          
                        </tbody>
                      </table>
                        
                    </div>
            </div>
        </div>
    </div>
    
</section>
@endsection




    
<style>
    .img-account{
        margin-top: -8px;
        width: 53px;
        border-radius: 50%;
    }
    .list_ac{
        padding-left: 11%;
    }
    .col-sm-9.customer-form {
    background-color: rgb(255, 255, 255);
    }
    .form-info{
        padding-top: 4%;
    }
    #inputEmail {
        background-color: rgb(227,227,227);
    }
    input.radio-input{
        width: 24px;
        height: 24px;
        margin: 10px 12px 10px 15px;
    }
    .radio-lable{
        margin: 10px 12px 10px 0px;
    }
    .form-check.change-password {
        margin-left: 17.5%;
    }
    input#gridRadios2 {
        width: 24px;
        height: 24px;
    }
    label.form-check-label {
    margin-left: 2%;
    margin-top: 1%;
    }

    .form-check.form-change-password {
    padding-top: 2%;
    }

    
    div#change-password {
    margin-left: -2%;
    }
    button.btn.btn-change {
    background-color: #ea1d5d;
    width: 20%;
}

    
}
</style>