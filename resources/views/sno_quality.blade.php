@extends('layouts.main')
@section('content')

<section id="about-part" class="pt-60" style="background-color:#DCEFFC;">
    <div class="container">

        <div class="row">

            <div class="col-lg-2"> </div>

            <div class="col-lg-8"> 

                <div class="about-content mt-30 text-center" style="padding-top:80px;">
                    <h3> წყლის წარმომავლობა</h3>
                    @if (app()->getLocale()=="ka")
                    <p>{!! $Snoxarisxi->sno_xarisxi_pirveli_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                    <p>{!! $Snoxarisxi->sno_xarisxi_pirveli_en !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <p>{!! $Snoxarisxi->sno_xarisxi_pirveli_ru !!}</p>
                    @endif
                </div>
            </div>

            <div class="col-lg-2"> </div>
        </div>
    </div>
</section>


<section id="products-part">
    <div class="row" style="
    background-color:#DCEFFC;
          background-image:url('{{Request::root()}}/assets/img/Subtraction 3.svg'); 
          background-size: 100%; 
          background-position: top;
          height:100px;
          width:100%;
          margin-left:0px;
          margin-right:0px;
          background-repeat: no-repeat;">
    </div>
</section>

<section id="about-part">

    <div class="row" style="background-color:#1592E6; margin-left:0px; margin-right:0px;">


        
        <div class="col-lg-2"></div>
        <div class="col-lg-4"><img src="{{Request::root()}}/images/{{ $Snoxarisxi->sno_xarisxi_image1 }}" alt="Video" style="margin-right: 7%;">
        <br><br>

        </div>
        <div class="col-lg-5" style="padding-top:80px;"><h3 style="color:#FFF;"><img src="{{Request::root()}}/images/Rectangle 3127.png"> სტანდარტები</h3>
            <br><br>
            @if (app()->getLocale()=="ka")
            <p style="color:#FFF;">{!! strip_tags($Snoxarisxi->sno_xarisxi_meore_ka) !!}</p>
            @endif
            @if (app()->getLocale()=="en")
            <p>{!! $Snoxarisxi->sno_xarisxi_meore_en !!}</p>
            @endif
            @if (app()->getLocale()=="ru")
            <p>{!! $Snoxarisxi->sno_xarisxi_meore_ru !!}</p>
            @endif </div>
        <div class="col-lg-1"></div>


    </div>

</section>
<section id="products-part">
    <div class="row" style="
          background-image:url('{{Request::root()}}/assets/img/Subtraction 2.svg'); 
          background-size: 100%; 
          background-position: top;
          height:160px;
          width:100%;
          margin-left:0px;
          margin-right:0px;
          background-repeat: no-repeat;">
    </div>
</section>


<section id="about-part">
    <div class="container">
        <div class="row mt-10">
            <div class="col-lg-6">
                <div class="about-content">
                    <h3> <img src="{{Request::root()}}/images/lurji_line.png"> სტანდარტები</h3>
                     <br>
                    @if (app()->getLocale()=="ka")
                    <p>{!! $Snoxarisxi->sno_xarisxi_mesame_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                    <p>{!! $Snoxarisxi->sno_xarisxi_mesame_en !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <p>{!! $Snoxarisxi->sno_xarisxi_mesame_ru !!}</p>
                    @endif

                </div>
            </div>



            <div class="col-lg-6" align="right">

                <img src="{{Request::root()}}/images/{{ $Snoxarisxi->sno_xarisxi_image2 }}" alt="Video">

            </div>



        </div>






    </div>
</section>


<section id="products-part">
    <div class="row" style="
    background-color:#fff;
          background-image:url('{{Request::root()}}/assets/img/Subtraction 5.svg'); 
          background-size: 100%; 
          background-position: top;
          height:100px;
          width:100%;
          margin-left:0px;
          margin-right:0px;
          background-repeat: no-repeat;">
    </div>
</section>






<section id="about-part">



    <div class="row justify-content-center" style="background-color:#E0EEF8; margin-left:0px; margin-right:0px;">
        <div class="col-lg-8">
            <div class="section-title text-center">
                <br>
                @if (app()->getLocale()=="ka")
                <p>{!! $Snoxarisxi->sno_xarisxi_meotxe_ka !!}</p>
                @endif
                @if (app()->getLocale()=="en")
                <p>{!! $Snoxarisxi->sno_xarisxi_meotxe_en !!}</p>
                @endif
                @if (app()->getLocale()=="ru")
                <p>{!! $Snoxarisxi->sno_xarisxi_meotxe_ru !!}</p>
                @endif
                <br><br>
            </div>
        </div>
    </div>


</section>



<section id="products-part">
    <div class="row" style="
          background-image:url('{{Request::root()}}/assets/img/Subtraction 4.svg'); 
          background-size: 100%; 
          background-position: top;
          height:140px;
          width:100%;
          margin-left:0px;
          margin-right:0px;
          background-repeat: no-repeat;">
    </div>
</section>






<section id="about-part">
    <div class="container">
        <div class="row">


            <div class="col-lg-6" align="left">

                <img src="{{Request::root()}}/images/{{ $Snoxarisxi->sno_xarisxi_image3 }}" alt="Video">

            </div>



            <div class="col-lg-6">
                <div class="about-content mt-10">
                    <h3> <img src="{{Request::root()}}/images/lurji_line.png"> საწარმო</h3>
                    @if (app()->getLocale()=="ka")
                    <p>{!! $Snoxarisxi->sno_xarisxi_mexute_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                    <p>{!! $Snoxarisxi->sno_xarisxi_mexute_en !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <p>{!! $Snoxarisxi->sno_xarisxi_mexute_ru !!}</p>
                    @endif
                    <a href="{{Request::root()}}/pdf/ISO 9001.pdf" target="blank" class="haccp_sno"></a> &nbsp;
                    <a href="{{Request::root()}}/pdf/ISO 22000.pdf" target="blank" class="iso_sno"></a>


                </div>
            </div>






        </div>






    </div>
</section>







<section id="about-part" class="pt-60">

</section>




@endsection
