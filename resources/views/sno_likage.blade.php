@extends('layouts.main')
@section('content')

<section id="about-part" class="pt-80" style="background-color:#DCEFFC;">
    <div class="container">

        <div class="row">




            <div class="col-lg-6">
                <div class="about-content mt-30" style="padding-top:140px;">
                    <h3> წყლის წარმომავლობა</h3>

                    @if (app()->getLocale()=="ka")
                    <p>{!! $Snolikage->sno_likage_text_pirveli_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                    <p>{!! $Snolikage->sno_likage_text_pirveli_en !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <p>{!! $Snolikage->sno_likage_text_pirveli_ru !!}</p>
                    @endif
    

                </div>
            </div>



            <div class="col-lg-6" align="right">
                <div class="mt-30">
                    <img src="{{Request::root()}}/images/{{ $Snolikage->sno_likage_image1 }}" alt="Video">
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
            <img src="{{Request::root()}}/images/{{ $Snolikage->sno_likage_image2 }}" alt="Video">
        </div>



        <div class="col" style="padding-top:110px; padding-left:120px;">

            <h3>წყლის მდებარეობა</h3>
            @if (app()->getLocale()=="ka")
            <p>{!! $Snolikage->sno_likage_text_meore_ka !!}</p>
            @endif
            @if (app()->getLocale()=="en")
            <p>{!! $Snolikage->sno_likage_text_meore_en !!}</p>
            @endif
            @if (app()->getLocale()=="ru")
            <p>{!! $Snolikage->sno_likage_text_meore_ru !!}</p>
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

        <div class="row">


            <div class="col-lg-12">
                <div class="about-content mt-30 text-center">
                    <h3>დაცული დაბინძურებისგან</h3>
                    @if (app()->getLocale()=="ka")
                    <p>{!! $Snolikage->sno_likage_text_mesame_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                    <p>{!! $Snolikage->sno_likage_text_mesame_ru !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <p>{!! $Snolikage->sno_likage_text_mesame_en !!}</p>
                    @endif
        

                </div>
            </div>

        </div>
    </div>
</section>


<section id="about-part" class="pt-60">

</section>




@endsection
