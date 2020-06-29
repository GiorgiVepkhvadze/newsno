@extends('layouts.main')
@section('content')


<section id="video-part" class="pt-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                <div class="video pt-45">
                    <img src="{{Request::root()}}/images/{{ $header_area->sno_product_area_header_image }}" alt="Video">
                    <div class="icon">
                        <a class="videi-popup" href="{{ $header_area->sno_product_area_header_video }}"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    

<section id="products-part" class="pt-0 white-bg">
    <div class="container" style="background: rgb(220,236,247);
    background: linear-gradient(180deg, rgba(220,236,247,1) 0%, rgba(255,255,255,1) 100%);">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-15">
                    <br><br>
                    <p>სნო</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="products-slied owl-carousel">


                @foreach ($product_list as $product_list_item)


                <div class="col-lg-12" align="center">
                    <div class="singel-products mt-30">
                        <div class="products-image">
                            <img src="{{Request::root()}}/images/{{  $product_list_item->sno_products_image  }}" alt="Products">
                        </div>
                        <div class="products-contant">
                            

                            @if (app()->getLocale()=="ka")
                            <p class="text">{!! $product_list_item->sno_products_desc_ka !!}</p>
                            @endif
                            @if (app()->getLocale()=="en")
                            <p class="text">{!! $product_list_item->sno_products_desc_en !!}</p>
                            @endif
                            @if (app()->getLocale()=="ru")
                            <p class="text">{!! $product_list_item->sno_products_desc_ru !!}</p>
                            @endif


                            
                           
                        </div>
                    </div>
                </div>


                    
                @endforeach



                




            </div>
        </div>
    </div>
</section>

<!--====== PRODUCTS PART ENDS ======-->





<section id="about-part" class="pt-80">
    <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-15">
                        <br><br>
                        <p>არომატიზირებული წყალი</p>
                        <br><br>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-15">
                        <img src="{{Request::root()}}/assets/img/products/snolimoni.png" alt="Products">
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center pb-1">
                        <br><br>
                        <p>სნო ლიმონით 0.5 
                            პეტ ბოთლი</p>
                    </div>
                </div>
            </div>

            

           
            
    </div>
</section>



<section id="video-part" class="pt-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                <div class="video pt-45">
                    <img src="{{Request::root()}}/images/{{ $header_area->sno_product_area_limon_image }}" alt="Video">
                    <div class="icon">
                        <a class="videi-popup" href="{{ $header_area->sno_product_area_limon_video }}"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
