@extends('layouts.main')
@section('content')

<section id="video-part" class="pt-40" style="background: rgb(220,236,247);
background: linear-gradient(0deg, rgba(220,236,247,1) 0%, rgba(255,255,255,1) 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="video pt-45">
                    <img src="{{Request::root()}}/{{ \App\Helpers\AppHelper::instance()->get_content_img("27", "image1") }}" alt="Video">
                </div>
            </div>
        </div>
    </div>
</section>



<section id="about-part" class="pt-80" style="background: rgb(220,236,247);
background: linear-gradient(180deg, rgba(220,236,247,1) 0%, rgba(255,255,255,1) 100%);">
    <div class="container">

        <div class="row">


            

            <div class="col-lg-6">

                @if (app()->getLocale()=="ka")
                  
                {!! \App\Helpers\AppHelper::instance()->get_content_text("28", "sveti_erti_geo") !!}
                 
                @endif
                @if (app()->getLocale()=="en")

                {!! \App\Helpers\AppHelper::instance()->get_content_text("28", "sveti_erti_eng") !!}
                   
                @endif
                @if (app()->getLocale()=="ru")

                {!! \App\Helpers\AppHelper::instance()->get_content_text("28", "sveti_erti_rus") !!}
                @endif


            </div>


            <div class="col-lg-6">


               
                @if (app()->getLocale()=="ka")
                  
                {!! \App\Helpers\AppHelper::instance()->get_content_text("28", "sveti_ori_geo") !!}
                 
                @endif
                @if (app()->getLocale()=="en")

                {!! \App\Helpers\AppHelper::instance()->get_content_text("28", "sveti_ori_eng") !!}
                   
                @endif
                @if (app()->getLocale()=="ru")

                {!! \App\Helpers\AppHelper::instance()->get_content_text("28", "sveti_ori_rus") !!}
                @endif


            </div>


        </div>
    </div>
</section>


<section id="about-part" class="pt-60">
    <div class="container">

        <div class="row">


            <div class="col-lg-12">
                <div class="about-content mt-30 text-center">
                    <h3> საექსპორტო ქვეყნები</h3>
                    აქ მიდის რუკა

                </div>
            </div>

        </div>
    </div>
</section>







@endsection
