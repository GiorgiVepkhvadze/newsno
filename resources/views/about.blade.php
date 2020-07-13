@extends('layouts.main')
@section('content')


<section id="video-part" class="pt-170" style="background: rgb(220,236,247);
background: linear-gradient(180deg, rgba(220,236,247,1) 0%, rgba(255,255,255,1) 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>
                        

                        @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("4", "header_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("4", "header_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("4", "header_rus") }}
                    @endif



                    </h2>


                    <p>

                    @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("4", "text_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("4", "text_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("4", "text_rus") }}
                    @endif

                    </p>



                </div>
            </div>
            <div class="col-lg-2">
            </div>
        
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="video pt-45">
                    <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("4", "image1") }}" alt="Video">
                </div>
            </div>
        </div>
    </div>
</section>



<section id="about-part" class="pt-80" style="">
    <div class="container">

        <div class="row">

            <div class="col-lg-6">
                <p>

                    @if (app()->getLocale()=="ka")
                  
                    {!! \App\Helpers\AppHelper::instance()->get_content_text("5", "sveti_erti_geo") !!}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("5", "sveti_erti_eng") !!}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("5", "sveti_erti_rus") !!}
                    @endif

                </p>
            </div>


            <div class="col-lg-6">
                <p>

                    @if (app()->getLocale()=="ka")
                  
                    {!! \App\Helpers\AppHelper::instance()->get_content_text("5", "sveti_ori_geo") !!}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("5", "sveti_ori_eng") !!}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("5", "sveti_ori_rus") !!}
                    @endif
                </p>
            </div>


        </div>
    </div>
</section>



<section id="about-part" class="pt-60">
    <div class="container">

        <div class="row">


            <div class="col-lg-12" style="background-color:#e9f9ff;">
               
                <div class="row">
                <div class="col-lg-1">
                </div>

                <div class="col-lg-10">

                    <div class="about-content mt-30 text-center">
                        <h3> 
                            

                    @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("6", "header_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("6", "header_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("6", "header_rus") }}
                    @endif



                        </h3>

    
                           <p>


                    @if (app()->getLocale()=="ka")
                  
                    {!! \App\Helpers\AppHelper::instance()->get_content_text("6", "text_geo") !!}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("6", "text_eng") !!}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("6", "text_rus") !!}
                    @endif



                           </p>
    
    
    
    
    
    
    
                    </div>

                </div>


                <div class="col-lg-1">
                </div>
            </div>
                
            </div>

        </div>
    </div>
</section>



<section id="about-part" class="pt-60">
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <div class="about-content mt-30 text-center">
                    <h3> 
                        

                    @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("7", "header_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("7", "header_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("7", "header_rus") }}
                    @endif


                    </h3>


                </div>
            </div>

        </div>


        <div class="row">

            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("7", "image1") }}" alt="About">
                </div>
            </div>


            <div class="col-lg-6">
                <div class="about-content mt-10">
                       
                  

                    @if (app()->getLocale()=="ka")
                  
                    {!! \App\Helpers\AppHelper::instance()->get_content_text("7", "text_geo") !!}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("7", "text_eng") !!}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("7", "text_rus") !!}
                    @endif



                   

                </div>
            </div>

        </div>



        <div class="row mt-60">




            <div class="col-lg-6">
                <div class="about-content mt-40">

                    <p>




                        @if (app()->getLocale()=="ka")
                  
                        {!! \App\Helpers\AppHelper::instance()->get_content_text("8", "text_geo") !!}
                         
                        @endif
                        @if (app()->getLocale()=="en")
    
                        {!! \App\Helpers\AppHelper::instance()->get_content_text("8", "text_eng") !!}
                           
                        @endif
                        @if (app()->getLocale()=="ru")
    
                        {!! \App\Helpers\AppHelper::instance()->get_content_text("8", "text_rus") !!}
                        @endif








                    </p>

                </div>
            </div>



            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("8", "image1") }}" alt="About">
                </div>
            </div>



        </div>






    </div>
</section>


<section id="about-part" class="pt-60">

</section>



@endsection
