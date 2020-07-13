@extends('layouts.main')
@section('content')



<section id="about-part" class="pt-60" style="background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(120,170,102,0.26934523809523814) 100%);">
    <div class="container">

        <div class="row">


            <div class="col-lg-1"> </div>
            <div class="col-lg-10 text-center" style="padding-top:80px; padding-bottom:40px;"> 

                <h3 style="color:#78AA66;"> 

                    @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("24", "header_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("24", "header_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("24", "header_rus") }}
                    @endif
                
                
                
                </h3><br><br>
                <p>

                    @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("24", "text_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("24", "text_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("24", "text_rus") }}
                    @endif

                    





                   </p>

               

            </div>
            <div class="col-lg-1"> </div>  





        </div>
    </div>
</section>







<section id="about-part" class="pt-10">
    <div class="container">
        <div class="row mt-10">
            <div class="col-lg-6">
                <div class="about-content mt-70">
                    <h3 style="color:#000;"> 
                        
                        
                    @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("25", "header_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("25", "header_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("25", "header_rus") }}
                    @endif
                        
                        
                </h3>
                    <br>
                    <p>



                        @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("25", "text_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("25", "text_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("25", "text_rus") }}
                    @endif


                    </p>

                </div>
            </div>



            <div class="col-lg-6" align="right">

                <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("25", "image1") }}" alt="Video">

            </div>



        </div>






    </div>
</section>


<section id="products-part">
    <div class="row" style="
    background-color:#fff;
          background-image:url('{{Request::root()}}/assets/img/kobi_mineral_footer.svg'); 
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
    <div class="row" style="background-color:#363B35; margin-left:0px; margin-right:0px;">

        <div class="col" align="right">
            <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("26", "image1") }}" alt="Video" style="margin-right: 18%;">
        </div>

        <div class="col align-middle" align="left"><br><br><br>
            <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("26", "image2") }}" alt="Video">
        </div>


  


    </div>

    <div class="row" style="background-color:#363B35; margin-left:0px; margin-right:0px;">
        <br><br><br>
    </div>

</section>




@endsection
