<header class="w3l-header-nav">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <h1><a class="navbar-brand" href="{{route('index')}}">Home<span>Service</span></a></h1>
            <!-- if logo is image enable this   
                    <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <span class="fa icon-expand fa-bars"></span>
                <span class="fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('myteam')}}">Đội Của Tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('all.service')}}">Dịch Vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên Hệ</a>
                    </li>
                </ul>
      
            </div>
        </div>
    </nav>
    <!--//nav-->
</header>