@extends('layouts.main')
@section('content')

<section id="about-part" class="pt-60" style="background-color:#DCEFFC;">
    <div class="container">

        <div class="row">

            <div class="col-lg-2"> </div>

            <div class="col-lg-8"> 

                <div class="about-content mt-30 text-center" style="padding-top:80px;">
                    <h3>
                        
                        @if (app()->getLocale()=="ka")
                  
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("16", "header_geo") }}
                         
                        @endif
                        @if (app()->getLocale()=="en")
    
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("16", "header_eng") }}
                           
                        @endif
                        @if (app()->getLocale()=="ru")
    
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("16", "header_rus") }}
                        @endif



                    </h3>




                    <p>

                        @if (app()->getLocale()=="ka")
                      
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("16", "text_geo") }}
                         
                        @endif
                        @if (app()->getLocale()=="en")
    
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("16", "text_eng") }}
                           
                        @endif
                        @if (app()->getLocale()=="ru")
    
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("16", "text_rus") }}
                        @endif
    
                        </p>
                    
                    



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
        <div class="col-lg-4"><img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("17", "image1") }}" alt="Video" style="margin-right: 7%;">
        <br><br>

        </div>
        <div class="col-lg-5" style="padding-top:80px;"><h3 style="color:#FFF;"><img src="{{Request::root()}}/images/Rectangle 3127.png"> 
        
            @if (app()->getLocale()=="ka")
                  
            {{ \App\Helpers\AppHelper::instance()->get_content_text("17", "header_geo") }}
             
            @endif
            @if (app()->getLocale()=="en")

            {{ \App\Helpers\AppHelper::instance()->get_content_text("17", "header_eng") }}
               
            @endif
            @if (app()->getLocale()=="ru")

            {{ \App\Helpers\AppHelper::instance()->get_content_text("17", "header_rus") }}
            @endif

        
        </h3>
            <br><br>
            <p style="color:#FFF;">

                @if (app()->getLocale()=="ka")
              
                {{ \App\Helpers\AppHelper::instance()->get_content_text("17", "text_geo") }}
                 
                @endif
                @if (app()->getLocale()=="en")

                {{ \App\Helpers\AppHelper::instance()->get_content_text("17", "text_eng") }}
                   
                @endif
                @if (app()->getLocale()=="ru")

                {{ \App\Helpers\AppHelper::instance()->get_content_text("17", "text_rus") }}
                @endif

                </p>
        
        
        
        </div>
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
                    <h3> <img src="{{Request::root()}}/images/lurji_line.png"> 
                    
                        @if (app()->getLocale()=="ka")
                  
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("18", "header_geo") }}
                         
                        @endif
                        @if (app()->getLocale()=="en")
            
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("18", "header_eng") }}
                           
                        @endif
                        @if (app()->getLocale()=="ru")
            
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("18", "header_rus") }}
                        @endif
                    
                    
                    
                    </h3>
                     <br>
                   <p>
                    @if (app()->getLocale()=="ka")
              
                    {!! \App\Helpers\AppHelper::instance()->get_content_text("18", "text_geo") !!}
                     
                    @endif
                    @if (app()->getLocale()=="en")
    
                    {!! \App\Helpers\AppHelper::instance()->get_content_text("18", "text_eng") !!}
                       
                    @endif
                    @if (app()->getLocale()=="ru")
    
                    {!! \App\Helpers\AppHelper::instance()->get_content_text("18", "text_rus") !!}
                    @endif

                   </p>
                     



                </div>
            </div>



            <div class="col-lg-6" align="right">

                <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("18", "image1") }}" alt="Video">

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
               
                


                <p>
                    @if (app()->getLocale()=="ka")
              
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("19", "text_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")
    
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("19", "text_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")
    
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("19", "text_rus") }}
                    @endif

                   </p>





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

                <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("20", "image1") }}" alt="Video">

            </div>



            <div class="col-lg-6">
                <div class="about-content mt-10">
                    <h3> <img src="{{Request::root()}}/images/lurji_line.png"> 
                    
                        @if (app()->getLocale()=="ka")
                  
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("20", "header_geo") }}
                         
                        @endif
                        @if (app()->getLocale()=="en")
            
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("20", "header_eng") }}
                           
                        @endif
                        @if (app()->getLocale()=="ru")
            
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("20", "header_rus") }}
                        @endif
                    
                    
                    
                    </h3>
                    
                    


                        <p>
                            @if (app()->getLocale()=="ka")
                      
                            {!! \App\Helpers\AppHelper::instance()->get_content_text("20", "text_geo") !!}
                             
                            @endif
                            @if (app()->getLocale()=="en")
            
                            {!! \App\Helpers\AppHelper::instance()->get_content_text("20", "text_eng") !!}
                               
                            @endif
                            @if (app()->getLocale()=="ru")
            
                            {!! \App\Helpers\AppHelper::instance()->get_content_text("20", "text_rus") !!}
                            @endif
        
                           </p>







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
