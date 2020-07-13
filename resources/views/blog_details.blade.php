@extends('layouts.main')

@section('title', $Blog->blog_title_ka)

@section('content')

<section id="blog-details-part" class="pt-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details">
                    
                     
                    @foreach($cBlog as $cBlog_row)
                    <div class="blog-details-image pb-20">
                        <br><br>
                        <img src="{{Request::root()}}/images/{{ $cBlog_row->blog_detail_pic }}" alt="{!! $cBlog_row->$blog_title !!}">
                    </div>
                    <div class="blog-details-content">
                        <div class="row">
                            <div class="col-lg-12">
                                @if (app()->getLocale()=="ka")
                                <h4>{!! $cBlog_row->blog_title_ka !!}</h4>
                                @endif
                                @if (app()->getLocale()=="en")
                                <h4>{!! $cBlog_row->blog_title_en !!}</h4>
                                @endif
                                @if (app()->getLocale()=="ru")
                                <h4>{!! $cBlog_row->blog_title_ru !!}</h4>
                                @endif

                            </div>
                        </div>
                     
                        

                        @if (app()->getLocale()=="ka")
                        <p>{!! $cBlog_row->blog_text_ka !!}</p>
                        @endif
                        @if (app()->getLocale()=="en")
                        <p>{!! $cBlog_row->blog_text_en !!}</p>
                        @endif
                        @if (app()->getLocale()=="ru")
                        <p>{!! $cBlog_row->blog_text_ru !!}</p>
                        @endif

                        
                    </div>
                    @endforeach
               



                    


                   



                    <div class="share pt-15">
                        <ul>
                            <li class="head">Share :</li>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
