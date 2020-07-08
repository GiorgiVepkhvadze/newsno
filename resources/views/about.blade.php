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
                    <h2>კომპანიის ისტორია</h2>

                    @if (app()->getLocale()=="ka")
                    <p>{!! $Company->company_header_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                    <p>{!! $Company->company_header_en !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                    <p>{!! $Company->company_header_ru !!}</p>
                    @endif


                </div>
            </div>
            <div class="col-lg-2">
            </div>
        
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="video pt-45">
                    <img src="{{Request::root()}}/images/{{ $Company->company_header_image }}" alt="Video">
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
                        <p>{!! $Company->company_sveti_pirveli_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                        <p>{!! $Company->company_sveti_pirveli_en !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                        <p>{!! $Company->company_sveti_pirveli_ru !!}</p>
                    @endif

                </p>
            </div>


            <div class="col-lg-6">
                <p>

                    @if (app()->getLocale()=="ka")
                        <p>{!! $Company->company_sveti_meore_ka !!}</p>
                    @endif
                    @if (app()->getLocale()=="en")
                        <p>{!! $Company->company_sveti_meore_en !!}</p>
                    @endif
                    @if (app()->getLocale()=="ru")
                        <p>{!! $Company->company_sveti_meore_ru !!}</p>
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
                <div class="col-lg-3">
                </div>

                <div class="col-lg-6">

                    <div class="about-content mt-30 text-center">
                        <h3> მიზანი</h3>

    
                            @if (app()->getLocale()=="ka")
                                <p>{!! $Company->company_mizani_ka !!}</p>
                            @endif
                            @if (app()->getLocale()=="en")
                                <p>{!! $Company->company_mizani_en !!}</p>
                            @endif
                            @if (app()->getLocale()=="ru")
                                <p>{!! $Company->company_mizani_ru !!}</p>
                            @endif
    
    
    
    
    
    
    
                    </div>

                </div>


                <div class="col-lg-3">
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
                    <h3> ჩვენი საწარმო</h3>


                </div>
            </div>

        </div>


        <div class="row">

            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{Request::root()}}/assets/img/history/qarxana.png" alt="About">
                </div>
            </div>


            <div class="col-lg-6">
                <div class="about-content mt-30">

                    <p>


                        @if (app()->getLocale()=="ka")
                            <p>{!! $Company->company_sawarmo_piveli_ka !!}</p>
                        @endif
                        @if (app()->getLocale()=="en")
                            <p>{!! $Company->company_sawarmo_piveli_en !!}</p>
                        @endif
                        @if (app()->getLocale()=="ru")
                            <p>{!! $Company->company_sawarmo_piveli_ru !!}</p>
                        @endif





                    </p>

                </div>
            </div>

        </div>



        <div class="row mt-60">




            <div class="col-lg-6">
                <div class="about-content mt-40">

                    <p>




                        @if (app()->getLocale()=="ka")
                            <p>{!! $Company->company_sawarmo_meore_ka !!}</p>
                        @endif
                        @if (app()->getLocale()=="en")
                            <p>{!! $Company->company_sawarmo_meore_ru !!}</p>
                        @endif
                        @if (app()->getLocale()=="ru")
                            <p>{!! $Company->company_sawarmo_meore_en !!}</p>
                        @endif








                    </p>

                </div>
            </div>



            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{Request::root()}}/assets/img/history/botlebi.PNG" alt="About">
                </div>
            </div>



        </div>






    </div>
</section>


<section id="about-part" class="pt-60">

</section>



@endsection
