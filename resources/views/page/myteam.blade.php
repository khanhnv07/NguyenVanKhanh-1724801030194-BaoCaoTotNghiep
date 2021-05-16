@extends('page.layout_page')
@section('content')

<section class="w3l-main-slider" id="home">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="#">Trang Chủ</a> » <span class="breadcrumb_last" aria-current="page">Đội Của Tôi</span>
		</div>
	</nav>

    <div class="container w3-animate-opacity">
        <div class="tab">

          @foreach ($majobs as $item)
            <button class="tablinks" onclick="openCity(event, '{{$item->name}}')">{{$item->name}}</button>
          @endforeach
            
            {{-- <button class="tablinks" onclick="openCity(event, 'Fruits')">Don Nha</button>
            <button class="tablinks" onclick="openCity(event, 'Workers')">Sua May Lanh</button>
            <button class="tablinks" onclick="openCity(event, 'chamsoccay')">Cham Soc Cay</button>
            <button class="tablinks" onclick="openCity(event, 'dietco')">Diet Co</button> --}}
        </div>
        @foreach ($majobs as $key => $item)
            <div id="{{$item->name}}" class="tabcontent" style="display: block">
              <div class="row">

                  @foreach ($employees as $employee)
                      <?php
                              $a = explode(',',$employee->majobId);
                              for($i=0; $i<count($a); $i++)
                              {
                                  if($a[$i] == $item->id){
                              ?>
                                  <div class="col-sm-4">
                                      <div class="card" style="width: 18rem;">
                                          <img src="{{asset('img/employee_images/'.$employee->image)}}" id="img_employee" class="card-img-top" alt="...">
                                          <div class="card-body">
                                            <h5 class="card-title">{{$employee->name}}</h5>
                                            <p class="card-text">Phone :{{$employee->phone}} | Id Card : {{$employee->idcard}} </p>
                                            <a href="#" class="btn btn-primary" id="datdv" data-toggle="modal" data-target="#{{$item->slug}}_{{$employee->id}}">Chọn Nhân Viên</a>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="modal fade" id="{{$item->slug}}_{{$employee->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{$employee->name}} | {{$item->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <form action="{{route('order')}}" method="POST" enctype="multipart/form-data">
                                              @csrf
                                              <div class="modal-body">
                                                <input type="text" id="name" class="fadeIn second moldai_form" name="customer_name" 
                                                    @if (!empty($customer))
                                                      value="{{$customer->customer_name}}"
                                                    @else
                                                      placeholder="name"
                                                    @endif
                                                >
                                                <input type="text" id="login" class="fadeIn second moldai_form" name="customer_email" 
                                                    @if (!empty($customer))
                                                      value="{{$customer->customer_email}}"
                                                    @else
                                                      placeholder="email"
                                                    @endif
                                                >
                                                <input type="text" id="phone" class="fadeIn third moldai_form" name="customer_phone" 
                                                      @if (!empty($customer))
                                                        value="{{$customer->customer_phone}}"
                                                      @else
                                                        placeholder="phone"
                                                      @endif
                                                >
                                                <input type="text" id="address" class="fadeIn third moldai_form" name="customer_address" 
                                                      @if (!empty($customer))
                                                        value="{{$customer->customer_address}}"
                                                      @else
                                                        placeholder="address"
                                                      @endif
                                                >

                                                <input type="hidden" id="service" value="{{$item->id}}" name="service[]">
                                                <input type="hidden" id="service" name="emp_id" value="{{$employee->id}}">
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Đặt Dịch Vụ</button>
                                              </div>
                                          </form>
                                          
                                        </div>
                                      </div>
                                    </div>
                              <?php
                                  }
                              }
                          ?>
                  @endforeach
                  
              </div>

          </div>
        @endforeach
        

    </div>
    <br><br><br><br><br><br>
</section>
@endsection	

<style>

.moldai_form {
    width: 100% !important;
}
#datdv {
    background-color: #F45D01;
}
#datdv:hover {
    color: white;
}
    .tab {overflow: hidden; border: 1px solid #ccc; 
background-color: #f1f1f1;}

.tabcontent {display: none; padding: 6px 12px; border: 1px solid #ccc;
    border-top: none;}
    
.tab button {background-color: inherit; float: left; border: none;
    outline: none; cursor: pointer; padding: 14px 16px; 
    transition: 0.3s;}
    
.tab button:hover {background-color: #ddd;}

.tab .active {background-color: #ccc;}

.tabcontent {display: none; padding: 6px 12px;

border: 1px solid #ccc; border-top: none;}

table {font-family: arial, sans-serif; border-collapse: collapse;
    width: 100%;}

td, th {border: 1px solid #dddddd; padding: 8px; 
    text-align: center;}

/*Change color to gray*/
tr:nth-child(even) {
    background-color: #dddddd;}

.actived a{color:green}
.actived a:hover{ font-weight: bold}

.deactivated a{color:red}
.deactivated a:hover{ font-weight: bold}

.available {color:green; }
.disable{ color: red; font-weight: bold}
.intraining{color: blue; font-weight: bold}
.vacation{ font-weight: bold}

</style>

<script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";}
        
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");}

document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";}
</script>