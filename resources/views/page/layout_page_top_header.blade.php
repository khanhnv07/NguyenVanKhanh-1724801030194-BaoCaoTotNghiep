<section class="w3l-top-header-content">
    <div class="hny-top-menu">
        <div class="container">
            <div class="row">
                <ul class="accounts col-sm-8">
                    <li class="top_li"><span class="fa fa-clock-o"></span> <a href="#">Monday - Friday: 10:00 -
                            18:00</a>
                    </li>
                    <li class="top_li mr-lg-0"><span class="far fa-envelope"></span> <a
                            href="mailto:mail@company.com" class="mail"> homeservice@gmail.com</a>

                    </li>
                    <li class="top_li"><span class="fa fa-phone"></span> <a href="tel:+142 5897555">+84 976 517 102</a>
                    </li>

                </ul>
                <ul class="social-top col-sm-4">
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram-square"></span></a> </li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    
                    
                      @if (Session::has('customer_name'))
                        <li>
                            <a href="{{URL::to('/home-service/info')}}"><p style="color: white">{{Session::get('customer_name')}}</p></a> 
                        </li>
                        <li>
                            <a href="{{route('customer_logout')}}">Đăng Xuất</a>
                        </li>
                      @else
                        <li>
                          <a data-toggle="modal" data-target="#exampleModal"><span class="far fa-user"></span></a> 
                        </li>
                          
                      @endif
                    
                      
                </ul>

            </div>
        </div>
    </div>

    
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: transparent">
        {{-- <div class="wrapper fadeInDown"> --}}
            <div id="formContent">
              <!-- Tabs Titles -->
          
              <!-- Icon -->
              <div class="fadeIn first">
                {{-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> --}}
                <h4><a class="navbar-brand" href="{{route('index')}}" style="color: #141414">Home<span style="color: #F45D01">Service</span></a></h4>
              </div>
          
              <!-- Login Form -->
              <form action="{{route('customer_login')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Đăng Nhập">
                <input type="button" data-dismiss="modal" data-toggle="modal" data-target="#exampleModal_Register" class="fadeIn fourth" value="Đăng Ký">
              </form>
          
              <!-- Remind Passowrd -->
              <div id="formFooter">
                <a class="underlineHover" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalForgotPassword" href="#">Quên Mật Khẩu?</a>
              </div>

            </div>
        {{-- </div> --}}
      </div>
    </div>
  </div>


  <div class="modal fade" id="exampleModalForgotPassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: transparent">
        {{-- <div class="wrapper fadeInDown"> --}}
            <div id="formContent">
              <!-- Tabs Titles -->
          
              <!-- Icon -->
              <div class="fadeIn first">
                {{-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> --}}
                <h4><a class="navbar-brand" href="index.html" style="color: #141414">Home<span style="color: #F45D01">Service</span></a></h4>
              </div>
          
              <!-- Login Form -->
              <form action="{{route('customer_forgot')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <p>Bạn Quên mật khẩu? Nhập email để đặt lại mật khẩu.</p>
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
                <input type="submit" class="fadeIn fourth" value="Đặt Lại Mật Khẩu">
                
              </form>
          
              <!-- Remind Passowrd -->
              <div id="formFooter">
                <a class="underlineHover" href="" data-dismiss="modal" data-toggle="modal" data-target="#exampleModal">Bạn có tài khoản/ Đăng Nhập?</a>
              </div>

            </div>
        {{-- </div> --}}
      </div>
    </div>
  </div>



  <div class="modal fade" id="exampleModal_Register" style="z-index: 9999" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: transparent">
        {{-- <div class="wrapper fadeInDown"> --}}
            <div id="formContent">
              <!-- Tabs Titles -->
          
              <!-- Icon -->
              <div class="fadeIn first">
                {{-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> --}}
                <h4><a class="navbar-brand" href="index.html" style="color: #141414">Home<span style="color: #F45D01">Service</span></a></h4>
              </div>
          
              <!-- Login Form -->
              <form action="{{route('customer_register')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="text" id="login" class="fadeIn second" name="name" placeholder="name">
                  <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
                  <input type="text" id="login" class="fadeIn second" name="phone" placeholder="phone">
                  <input type="text" id="login" class="fadeIn second" name="address" placeholder="address">
                  <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                  <input type="submit" class="fadeIn fourth" value="Register">

              </form>
          
              <!-- Remind Passowrd -->
              
          
            </div>
        {{-- </div> --}}
      </div>
    </div>
  </div>






{{-- <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
  
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
      </div>
  
      <!-- Login Form -->
      <form>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
        <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>
  
    </div>
</div> --}}
