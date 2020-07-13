@extends('layouts.main')
@section('content')

<section id="about-part" class="pt-80" style="background-color:#DCEFFC;">
    <div class="container">

        <div class="row">




            <div class="col-lg-6">
                <div class="about-content mt-30" style="padding-top:140px;">
                    <h3> 
                        

                    @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("9", "header_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("9", "header_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("9", "header_rus") }}
                    @endif


                    </h3>
                    <br>

                    @if (app()->getLocale()=="ka")
                  
                    {!! \App\Helpers\AppHelper::instance()->get_content_text("9", "text_geo") !!}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("9", "text_eng") !!}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("9", "text_rus") !!}
                    @endif
    

                </div>
            </div>



            <div class="col-lg-6" align="right">
                <div class="mt-30">
                    <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("9", "image1") }}" alt="Video">
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
        
        <div class="col-lg-1">
        </div>
        
        <div class="col-lg-5" align="right" style="padding-right:8%;">
            <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("10", "image1") }}" alt="Video">
        </div>

        <div class="col-lg-5" style="padding-top:110px; padding-left:120px; color:#fff;">
            <h3 style="color: #FFF;"><img src="{{Request::root()}}/images/Rectangle 3127.png">
            
            
                @if (app()->getLocale()=="ka")
                  
                {{ \App\Helpers\AppHelper::instance()->get_content_text("10", "header_geo") }}
                 
                @endif
                @if (app()->getLocale()=="en")

                {{ \App\Helpers\AppHelper::instance()->get_content_text("10", "header_eng") }}
                   
                @endif
                @if (app()->getLocale()=="ru")

                {{ \App\Helpers\AppHelper::instance()->get_content_text("10", "header_rus") }}
                @endif  
            
            
            </h3><br>



            @if (app()->getLocale()=="ka")
            <p style="color: #FFF;">{!! strip_tags($Snolikage->sno_likage_text_meore_ka) !!}</p>
            @endif
            @if (app()->getLocale()=="en")
            <p style="color: #FFF;">{!! strip_tags($Snolikage->sno_likage_text_meore_en) !!}</p>
            @endif
            @if (app()->getLocale()=="ru")
            <p style="color: #FFF;">{!! strip_tags($Snolikage->sno_likage_text_meore_ru) !!}</p>
            @endif
        </div>

        <div class="col-lg-1">
        </div>



    </div>

</section>
<section id="products-part">
    <div class="row" style="
          background-image:url('{{Request::root()}}/assets/img/Subtraction 2.svg'); 
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

            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <div class="about-content mt-30 text-center">
                    <h3>
                        
                        @if (app()->getLocale()=="ka")
                  
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("11", "header_geo") }}
                         
                        @endif
                        @if (app()->getLocale()=="en")
        
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("11", "header_eng") }}
                           
                        @endif
                        @if (app()->getLocale()=="ru")
        
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("11", "header_rus") }}
                        @endif  


                    </h3>
                    @if (app()->getLocale()=="ka")
                    <p>
                        
                    
                        @if (app()->getLocale()=="ka")
                  
                        {!! \App\Helpers\AppHelper::instance()->get_content_text("11", "text_geo") !!}
                         
                        @endif
                        @if (app()->getLocale()=="en")
    
                        {!! \App\Helpers\AppHelper::instance()->get_content_text("11", "text_eng") !!}
                           
                        @endif
                        @if (app()->getLocale()=="ru")
    
                        {!! \App\Helpers\AppHelper::instance()->get_content_text("11", "text_rus") !!}
                        @endif
                    
                    
                    
                    </p>
                    @endif
        

                </div>
            </div>

            <div class="col-lg-2">
            </div>

        </div>
    </div>
</section>


<section id="about-part" class="pt-60">

</section>




@endsection
