@extends('page.layout_page')



@section('content')
<nav id="breadcrumbs" class="breadcrumbs">
    <div class="container page-wrapper">
        <a href="#">Trang Chủ</a> » <span class="breadcrumb_last" aria-current="page">Dịch Vụ</span>
    </div>
</nav>
<section class="w3l-content-with-photo-4">

    <div class="content-photo-info py-5">
        <div class="container py-lg-5">
            <!-- /row-->
            @foreach ($services as $key => $item)
                
                @if ($key % 2 == 0)
                <div class="content-photo-grids row mt-0">
                    <div class="photo-6-inf-left col-lg-6 pr-lg-4">
                        <a href="#"><img src="{{asset('img/service_images/'.$item->service_image)}}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="photo-6-inf-right col-lg-6 text-left pl-lg-5 mt-lg-0 mt-4">
                        <h6 class="sub-title">Dịch Vụ Dành Cho Bạn</h6>
                        <h3 class="hny-title">{{$item->service_name}}
                        </h3>
                        <div class="servehny-1 mt-3">
                            <a href="#link" class="ser1"><span class="fa fa-check"></span> {{$item->service_desc}}.</a>
                            {{-- <a href="#link" class="ser1"><span class="fa fa-check"></span> A hassle free Service</a>
                            <a href="#link" class="ser1"><span class="fa fa-check"></span> Using Best Quality tools.</a>
                            <a href="#link" class="ser1"><span class="fa fa-check"></span> Money is on safe Hand</a> --}}
    
                        </div>
                    </div>
                </div>
                @else
                <div class="content-photo-grids row">

                    <div class="photo-6-inf-right col-lg-6 text-left pr-lg-5 mb-lg-0 mb-4">
                        <h6 class="sub-title"> Dịch Vụ Dành Cho Bạn</h6>
                        <h3 class="hny-title">{{$item->service_name}}
                        </h3>
                        <div class="servehny-1 mt-3">
                            <a href="#link" class="ser1"><span class="fa fa-check"></span> {{$item->service_desc}}.</a>
                            {{-- <a href="#link" class="ser1"><span class="fa fa-check"></span> A hassle free Service</a>
                            <a href="#link" class="ser1"><span class="fa fa-check"></span> Using Best Quality tools.</a>
                            <a href="#link" class="ser1"><span class="fa fa-check"></span> Money is on safe Hand</a> --}}
    
                        </div>
                    </div>
                    <div class="photo-6-inf-left col-lg-6 pr-lg-4">
                        <a href="#"><img src="{{asset('img/service_images/'.$item->service_image)}}" class="img-fluid" alt=""></a>
                    </div>
                </div>
                @endif
            @endforeach
            
            
            
            
            <!-- //row-->
           

        </div>
    </div>
</section>

@endsection