@extends('layouts.main')
@section('content')

<section id="about-part" class="pt-80" style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(120,170,102,0.26934523809523814) 100%);">
    <div class="container">

        <div class="row">




            <div class="col-lg-6">
                <div class="about-content mt-30" style="padding-top:140px;">
                    <h3 style="color:#78AA66;"> წყლის წარმომავლობა
                        და ხარისხი</h3>

                        @if (app()->getLocale()=="ka")
                        <p style="color:#fff;">{!! $Kobilikage->kobi_likage_text_pirveli_ka !!}</p>
                        @endif
                        @if (app()->getLocale()=="en")
                        <p style="color:#fff;">{!! $Kobilikage->kobi_likage_text_pirveli_en !!}</p>
                        @endif
                        @if (app()->getLocale()=="ru")
                        <p style="color:#fff;">{!! $Kobilikage->kobi_likage_text_pirveli_ru !!}</p>
                        @endif

                </div>
            </div>



            <div class="col-lg-6" align="right">
                <div class="mt-30">
                    <img src="{{Request::root()}}/images/{{ $Kobilikage->kobi_likage_image1 }}" alt="Video">

                </div>
            </div>


        </div>
    </div>
</section>


<section id="products-part">
    <div class="row" style="
    background-color:#FFF;
          background-image:url('{{Request::root()}}/assets/img/kobi_likage_header.svg'); 
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

    <div class="row" style="background-color:#7E9177; margin-left:0px; margin-right:0px;">

        <div class="col" align="right">
            <img src="{{Request::root()}}/images/{{ $Kobilikage->kobi_likage_image2 }}" alt="Video">
        </div>



        <div class="col pwite" style="padding-top:110px; padding-left:120px;">

            <h3 style="color:#FFF;">წყლის მდებარეობა</h3>

            @if (app()->getLocale()=="ka")
            <p style="color:#fff;">{!! $Kobilikage->kobi_likage_text_meore_ka !!}</p>
            @endif
            @if (app()->getLocale()=="en")
            <p style="color:#fff;">{!! $Kobilikage->kobi_likage_text_meore_en !!}</p>
            @endif
            @if (app()->getLocale()=="ru")
            <p style="color:#fff;">{!! $Kobilikage->kobi_likage_text_meore_ru !!}</p>
            @endif

        </div>


    </div>

</section>
<section id="products-part">
    <div class="row" style="
          background-image:url('{{Request::root()}}/assets/img/kobi_likage_footer.svg'); 
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
                    <h3 style="color:#78AA66;">წყლის ტექნოლოგია</h3>

                    @if (app()->getLocale()=="ka")
                    <p style="color:#fff;">{!! $Kobilikage->kobi_likage_text_mesame_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                    <p style="color:#fff;">{!! $Kobilikage->kobi_likage_text_mesame_ru !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <p style="color:#fff;">{!! $Kobilikage->kobi_likage_text_mesame_en !!}</p>
                    @endif

</section>




@endsection
