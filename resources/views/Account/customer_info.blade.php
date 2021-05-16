@extends('page.layout_page')


@section('content')
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="#">Khách Hàng</a> » <span class="breadcrumb_last" aria-current="page">{{Session::get('customer_name')}}</span>
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
                            <h6 style="padding-top: 25%; color: #f45d01;">{{Session::get('customer_name')}}</h6>
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
               
                <h3 class="text-left " style="color:#f45d01; font-size:23px;">Thông Tin Tài Khoản</h3>
                    
                    <div class="col-sm-10 offset-1">
                   
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                           
    
                            <input type="text" id="password" class="fadeIn third" name="customer_name" 
                                @if (!empty($customer))
                                   value="{{$customer->customer_name}}"
                                @else
                                    placeholder="name"
                                @endif
                            >
                            <input type="text" id="login" class="fadeIn second" name="customer_email" 
                                @if (!empty($customer))
                                    value="{{$customer->customer_email}}" readonly
                                @else
                                    placeholder="email"
                                @endif
                            >
                            
                            <input type="text" id="password" class="fadeIn third" name="customer_phone" 
                                @if (!empty($customer))
                                    value="{{$customer->customer_phone}}"
                                @else
                                    placeholder="phone"
                                @endif
        
                            >
        
                            <input type="text" id="password" class="fadeIn third" name="customer_address" 
                                @if (!empty($customer))
                                   value="{{$customer->customer_address}}"
                                @else
                                    placeholder="address"
                                @endif
        
                            >
                            
                        
                            
                            
                            <div class="text-center">
                                <button type="submit" class="btn" style="background: #F45D01;margin-left: -13%">Lưu Thông Tin</button>
                            </div>
                            
                        </form>
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