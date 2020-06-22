@extends('layouts.main')
@section('content')

<section id="about-part" class="pt-60" style="background-color:#DCEFFC;">
    <div class="container">

        <div class="row">


            <div class="col-lg-12">
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

        <div class="col" align="right">
            <img src="{{Request::root()}}/images/{{ $Snoxarisxi->sno_xarisxi_image1 }}" alt="Video">
        </div>



        <div class="col pwite" style="padding-top:110px; padding-left:120px;">

            <h3 style="color:#FFF;">სტანდარტები</h3>
            @if (app()->getLocale()=="ka")
            <p>{!! $Snoxarisxi->sno_xarisxi_meore_ka !!}</p>
            @endif
            @if (app()->getLocale()=="en")
            <p>{!! $Snoxarisxi->sno_xarisxi_meore_en !!}</p>
            @endif
            @if (app()->getLocale()=="ru")
            <p>{!! $Snoxarisxi->sno_xarisxi_meore_ru !!}</p>
            @endif

        </div>


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


<section id="about-part" class="pt-60">
    <div class="container">
        <div class="row mt-60">
            <div class="col-lg-6">
                <div class="about-content mt-40">
                    <h3> - სტანდარტები</h3>
                    <br><br>
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
                <h3 style="color:#000;">სტანდარტები</h3>
                @if (app()->getLocale()=="ka")
                <p>{!! $Snoxarisxi->sno_xarisxi_meotxe_ka !!}</p>
                @endif
                @if (app()->getLocale()=="en")
                <p>{!! $Snoxarisxi->sno_xarisxi_meotxe_en !!}</p>
                @endif
                @if (app()->getLocale()=="ru")
                <p>{!! $Snoxarisxi->sno_xarisxi_meotxe_ru !!}</p>
                @endif
            </div>
        </div>
    </div>


</section>



<section id="products-part">
    <div class="row" style="
          background-image:url('{{Request::root()}}/assets/img/Subtraction 4.svg'); 
          background-size: 100%; 
          background-position: top;
          height:160px;
          width:100%;
          margin-left:0px;
          margin-right:0px;
          background-repeat: no-repeat;">
    </div>
</section>






<section id="about-part" class="pt-60">
    <div class="container">
        <div class="row mt-60">


            <div class="col-lg-6" align="left">

                <img src="{{Request::root()}}/images/{{ $Snoxarisxi->sno_xarisxi_image3 }}" alt="Video">

            </div>



            <div class="col-lg-6">
                <div class="about-content mt-40">
                    <h3> - საწარმო</h3>
                    <br><br>
                    @if (app()->getLocale()=="ka")
                    <p>{!! $Snoxarisxi->sno_xarisxi_mexute_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                    <p>{!! $Snoxarisxi->sno_xarisxi_mexute_en !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <p>{!! $Snoxarisxi->sno_xarisxi_mexute_ru !!}</p>
                    @endif

                </div>
            </div>






        </div>






    </div>
</section>







<section id="about-part" class="pt-60">

</section>




@endsection
