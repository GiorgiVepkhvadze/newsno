@extends('layouts.main')
@section('content')

<section id="about-part" class="pt-80" style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(120,170,102,0.26934523809523814) 100%);">
    <div class="container">

        <div class="row">




            <div class="col-lg-6">
                <div class="about-content mt-30" style="padding-top:100px;">
                    <h3 style="color:#78AA66;"><br>
                        
                    
                        @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("21", "header_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("21", "header_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("21", "header_rus") }}
                    @endif
                    
                    
                    
                    </h3><br>

                    @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("21", "text_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("21", "text_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("21", "text_rus") }}
                    @endif

                </div>
            </div>



            <div class="col-lg-6" align="right">
                <div class="mt-60">
                    <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("21", "image1") }}" alt="Video">

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

        <div class="col-lg-2"></div>
        <div class="col-lg-4"><img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("22", "image1") }}" alt="Video">
        <br><br>

        </div>
        <div class="col-lg-5" style="padding-top:80px;">
            
            <h3 style="color:#FFF;"><img src="{{Request::root()}}/images/Rectangle 3127.png">
            
            
                  
                @if (app()->getLocale()=="ka")
                  
                {{ \App\Helpers\AppHelper::instance()->get_content_text("22", "header_geo") }}
                 
                @endif
                @if (app()->getLocale()=="en")

                {{ \App\Helpers\AppHelper::instance()->get_content_text("22", "header_eng") }}
                   
                @endif
                @if (app()->getLocale()=="ru")

                {{ \App\Helpers\AppHelper::instance()->get_content_text("22", "header_rus") }}
                @endif
                
            
            
            
            </h3> <br><br>
            
            

            @if (app()->getLocale()=="ka")
                  
            {{ \App\Helpers\AppHelper::instance()->get_content_text("22", "text_geo") }}
             
            @endif
            @if (app()->getLocale()=="en")

            {{ \App\Helpers\AppHelper::instance()->get_content_text("22", "text_eng") }}
               
            @endif
            @if (app()->getLocale()=="ru")

            {{ \App\Helpers\AppHelper::instance()->get_content_text("22", "text_rus") }}
            @endif




        <div class="col-lg-1"></div>



    </div>

</section>
<section id="products-part">
    <div class="row" style="
          background-image:url('{{Request::root()}}/assets/img/kobi_likage_footer.svg'); 
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


            <div class="col-lg-12">
                <div class="about-content mt-10 text-center" style="padding-bottom: 30px;">
                    <h3 style="color:#78AA66;">
                    
                        @if (app()->getLocale()=="ka")
                  
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("23", "header_geo") }}
                         
                        @endif
                        @if (app()->getLocale()=="en")
        
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("23", "header_eng") }}
                           
                        @endif
                        @if (app()->getLocale()=="ru")
        
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("23", "header_rus") }}
                        @endif
                    
                    
                    
                    
                    </h3>
                   <br><br>
                    

                    @if (app()->getLocale()=="ka")
                  
            {{ \App\Helpers\AppHelper::instance()->get_content_text("23", "text_geo") }}
             
            @endif
            @if (app()->getLocale()=="en")

            {{ \App\Helpers\AppHelper::instance()->get_content_text("23", "text_eng") }}
               
            @endif
            @if (app()->getLocale()=="ru")

            {{ \App\Helpers\AppHelper::instance()->get_content_text("23", "text_rus") }}
            @endif




საწარმოს გააჩნია საერთაშორისო სერთიფიკატები <br><br>




                    <a href="{{Request::root()}}/pdf/ISO 22000.pdf" target="blank" class="haccp_kobi"></a> &nbsp;
                    <a href="{{Request::root()}}/pdf/ISO 9001.pdf" target="blank" class="iso_kobi"></a>
                    <br><br>

                </div>   
            </div> 
            
        </div> 

    </div> 

</section>




@endsection
