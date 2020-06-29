@extends('layouts.main')
@section('content')


<section id="video-part" class="pt-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12" style="padding-right: 0px; padding-left: 0px;">
                <div class="video pt-45">
                    <img src="{{Request::root()}}/images/1592735683history.png" alt="Video">
                    <div class="icon">
                        <a class="videi-popup" href="https://youtu.be/IBr798ZSOx4"><i class="fa fa-play"></i></a>
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
                <div class="col-lg-12" align="center">
                    <div class="singel-products mt-30">
                        <div class="products-image">
                            <img src="{{Request::root()}}/assets/img/products/1.png" alt="Products">
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
                    <img src="{{Request::root()}}/assets/img/products/limonicover.png" alt="Video">
                    <div class="icon">
                        <a class="videi-popup" href="https://youtu.be/IBr798ZSOx4"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
