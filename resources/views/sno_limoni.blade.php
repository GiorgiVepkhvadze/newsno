@extends('layouts.main')
@section('content')


<section id="about-part" class="pt-60" style="background-color:#EED02C; margin-left:0px; margin-right:0px;">
    <div class="container">
        <div class="row mt-60" >
            <div class="col-lg-6">
                <div class="about-content mt-80">
                   
                    <h3 style="color:#000;">
                        
                        
                        
                        @if (app()->getLocale()=="ka")
                  
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("31", "header_geo") }}
                         
                        @endif
                        @if (app()->getLocale()=="en")
    
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("31", "header_eng") }}
                           
                        @endif
                        @if (app()->getLocale()=="ru")
    
                        {{ \App\Helpers\AppHelper::instance()->get_content_text("31", "header_rus") }}
                        @endif
    
                        
                        
                        
                        
                         </h3>
                    <p> 
                       
                        @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("31", "text_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("31", "text_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("31", "text_rus") }}
                    @endif



                    
                    </p>
                </div>
            </div>
        
            <div class="col-lg-6" align="right">
                
                <img src="{{Request::root()}}/assets/img/sno_limoni/sno_limoni.PNG" class="img-fluid" alt="About">
               
            </div>
        </div>
    </div>
</section>


<section id="products-part">
    <div class="row" style="
          background-image:url('{{Request::root()}}/assets/img/limoni_sno_bottom.svg'); 
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
        <div class="row mt-10">



            <div class="col-lg-6" align="left">
                
                <img src="{{Request::root()}}/assets/img/sno_limoni/sno_limoni2.PNG" class="img-fluid" alt="About">
           
            </div>


            <div class="col-lg-6">
                <div class="about-content mt-40">
                    <h3 style="color:#FDB344;"> სნო ლიმონის არომატით

                        რომელიც არ შეიცავს:
                    </h3>
                    <br><br>
                    <p>
                    
                sdf sdf sdf sdf

                    
                    </p>
                   
                </div>
            </div>
        
        
        
            
            
            
        </div>
        
        
        
        
        
        
    </div>
</section>





<section id="about-part" class="pt-60">

</section>




@endsection
