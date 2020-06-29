@extends('layouts.main')
@section('content')


<section id="video-part" class="pt-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                <div class="video pt-45">
                    <img src="{{Request::root()}}/assets/img/products/kobi_cover.png" alt="Video">
                    <div class="icon">
                        <a class="videi-popup" href="https://youtu.be/IBr798ZSOx4"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    

<section id="products-part" class="pt-0 white-bg">
    <div class="container" style="background: rgb(255,255,255);
    background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(120,170,102,0.26934523809523814) 100%);">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-15">
                    <br><br>
                    <p>კობის პროდუქცია</p>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="products-slied owl-carousel">
                <div class="col-lg-12" align="center">
                    <div class="singel-products mt-30">
                        <div class="products-image">
                            <img src="{{Request::root()}}/assets/img/products/kobi1.png" alt="Products">
                        </div>
                        <div class="products-contant">
                            
                            <p class="text">სნო 0,5 ლ <br>
                                მინის ბოთლი

                            </p>
                           
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-12" align="center">
                    <div class="singel-products mt-30">
                        <div class="products-image">
                            <img src="{{Request::root()}}/assets/img/products/kobi2.png" alt="Products">
                        </div>
                        <div class="products-contant">
                            
                            <p class="text">სნო 0,5 ლ <br>
                                მინის ბოთლი

                            </p>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


        
      
    </div>
</section>

<!--====== PRODUCTS PART ENDS ======-->




<section id="about-part" class="pt-60">
    <div class="container">




    </div>      

</section>








@endsection
