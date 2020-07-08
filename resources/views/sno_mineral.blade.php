@extends('layouts.main')
@section('content')



<section id="about-part" class="pt-60" style="background-color:#DCEFFC;">
    <div class="container">

        <div class="row">


            <div class="col-lg-12">
                <div class="about-content mt-30 text-center" style="padding-top:80px; padding-bottom:40px;">
                    <h3> მინერალიზაცია და შემადგენლობა</h3>

                <div class="row">
                        <div class="col-lg-3"> </div>
                        <div class="col-lg-6"> 


                            @if (app()->getLocale()=="ka")
                    <p>{!! $Snomineral->sno_mineral_pirveli_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                    <p>{!! $Snomineral->sno_mineral_pirveli_en !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <p>{!! $Snomineral->sno_mineral_pirveli_ru !!}</p>
                    @endif

                        </div>
                        <div class="col-lg-3"> </div>  


                                  

                    

                </div>



            </div>





        </div>
    </div>
</section>


<section id="products-part">
    <div class="row" style="
    background-color:#DCEFFC;
          background-image:url('{{Request::root()}}/assets/img/mineralizacia_top.svg'); 
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

    <div class="row" style="background-color:#CAEAF2; margin-left:0px; margin-right:0px;">

       


        <div class="col" align="right">
            <img src="{{Request::root()}}/images/{{ $Snomineral->sno_mineral_image1 }}" alt="Video" style="margin-right: 7%;">
            <br><br><br>
        </div>



        <div class="col" style="padding-top:20px; padding-left:120px;">

            <h3><img src="{{Request::root()}}/images/lurji_line.png"> სტანდარტები</h3>
            <br><br>
            @if (app()->getLocale()=="ka")
            <p>{!! $Snomineral->sno_mineral_meore_ka !!}</p>
            @endif
            @if (app()->getLocale()=="en")
            <p>{!! $Snomineral->sno_mineral_meore_en !!}</p>
            @endif
            @if (app()->getLocale()=="ru")
            <p>{!! $Snomineral->sno_mineral_meore_ru !!}</p>
            @endif

        </div>


    </div>

</section>
<section id="products-part">
    <div class="row" style="
          background-image:url('{{Request::root()}}/assets/img/mineralizacia_bottom.svg'); 
          background-size: 100%; 
          background-position: top;
          height:140px;
          width:100%;
          margin-left:0px;
          margin-right:0px;
          background-repeat: no-repeat;">
    </div>
</section>






<section id="about-part" class="pt-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-content mt-40">
                    <h3><img src="{{Request::root()}}/images/lurji_line.png"> სტანდარტები</h3>
                        @if (app()->getLocale()=="ka")
                        <p>{!! $Snomineral->sno_mineral_mesame_ka !!}</p>
                        @endif
                        @if (app()->getLocale()=="en")
                        <p>{!! $Snomineral->sno_mineral_mesame_ru !!}</p>
                        @endif
                        @if (app()->getLocale()=="ru")
                        <p>{!! $Snomineral->sno_mineral_mesame_en !!}</p>
                        @endif
 <br><br>
                   
                </div>
            </div>



            <div class="col-lg-6" align="right">

                <img src="{{Request::root()}}/images/{{ $Snomineral->sno_mineral_image2 }}" alt="Video">

            </div>



        </div>






    </div>
</section>


<section id="products-part">
    <div class="row" style="
    background-color:#fff;
          background-image:url('{{Request::root()}}/assets/img/mineralizacia_footer.svg'); 
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

    <div class="row" style="background-color:#2d3e50; margin-left:0px; margin-right:0px;">
        <div class="col-lg-12">
            <div class="about-content mt-30 text-center pwite" style="padding-bottom:10px;">

                    @if (app()->getLocale()=="ka")
                    <p style="color:#fff;">{!! $Snomineral->sno_mineral_meotxe_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                    <p style="color:#fff;">{!! $Snomineral->sno_mineral_meotxe_en !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <p style="color:#fff;">{!! $Snomineral->sno_mineral_meotxe_ru !!}</p>
                    @endif

            </div>
        </div>

    </div>

    <div class="row" style="background-color:#2d3e50; margin-left:0px; margin-right:0px; padding-bottom: 60px;">
        <div class="col" align="right">
            <img src="{{Request::root()}}/images/{{ $Snomineral->sno_mineral_image3 }}" alt="Video" style="margin-right: 18%;">
        </div>
        <div class="col align-middle" align="left"><br><br><br>
            <img src="{{Request::root()}}/images/cxrili.PNG" alt="Video">
        </div>
       
    </div>
   

</section>






@endsection
