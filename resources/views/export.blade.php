@extends('layouts.main')
@section('content')

<section id="video-part" class="pt-40" style="background: rgb(220,236,247);
background: linear-gradient(0deg, rgba(220,236,247,1) 0%, rgba(255,255,255,1) 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="video pt-45">
                    <img src="{{Request::root()}}/images/{{ $Eksporti->eksporti_header_image }}" alt="Video">
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
                <p>{!! $Eksporti->eksporti_pirveli_ka !!}</p>
                @endif
                @if (app()->getLocale()=="en")
                <p>{!! $Eksporti->eksporti_pirveli_en !!}</p>
                @endif
                @if (app()->getLocale()=="ru")
                <p>{!! $Eksporti->eksporti_pirveli_ru !!}</p>
                @endif


            </div>


            <div class="col-lg-6">


                @if (app()->getLocale()=="ka")
                <p>{!! $Eksporti->eksporti_meore_ka !!}</p>
                @endif
                @if (app()->getLocale()=="en")
                <p>{!! $Eksporti->eksporti_meore_en !!}</p>
                @endif
                @if (app()->getLocale()=="ru")
                <p>{!! $Eksporti->eksporti_meore_ru !!}</p>
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
