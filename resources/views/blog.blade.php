@extends('layouts.main')
@section('content')

<section id="blog-part" class="pt-65">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-15">
                    
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($BlogData as $Blogdata_row)

            
                <div class="col-lg-4 col-md-6">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            

                            <img src="{{Request::root()}}/images/{{ $Blogdata_row->blog_main_pic }}" alt="AQVAGEO">
                            <div class="date text-center">
                                
                                <span>{{ $Blogdata_row->blog_time }}</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25">
                            <a href="open_blog/{{ $Blogdata_row->blog_id }}/"><h5>{!! $Blogdata_row->$blog_title !!}</h5></a>
                            <p> {!! str_limit( $Blogdata_row->blog_text, 120) !!} </p>
                            <a href="open_blog/{{ $Blogdata_row->blog_id }}/">{{ __('main.READ_MORE') }}</a>
                        </div>
                    </div>
                </div>

            @endforeach



           



            

       
            
        </div>
    </div>
</section>


@endsection
