@extends('layouts.main')
@section('content')

<section id="blog-details-part" class="pt-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-details">
                    
                     
                    @foreach($cBlog as $cBlog_row)
                    <div class="blog-details-image pb-20">
                        <br><br>
                        <img src="{{ $cBlog_row->blog_main_pic }}" alt="{!! $cBlog_row->$blog_title !!}">
                    </div>
                    <div class="blog-details-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>{!! $cBlog_row->$blog_title !!}</h4>
                            </div>
                        </div>
                     
                        <p>{!! $cBlog_row->$blog_text !!}</p>
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
