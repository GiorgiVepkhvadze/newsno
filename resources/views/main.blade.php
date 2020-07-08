@extends('layouts.main')
@section('content')


<section id="about-part" class="pt-80" style="background-color:#DCEFFC;">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-6">
                <div class="about-content mt-30" style="padding-top:140px;">
                    <h3> წყალი არის სნო</h3>
                    <p>წყლის მოპოვება 150 მეტრის სიღმიდან ხდება. წყლის რესურსი მიწის ზედაპირიდან  4 წყალგაუმტარი შრით არის იზოლირებული და ამის გამო  ის ნატურალურად არის დაცული ნებისმიერი სახის დაბინძურებისგან</p>
                   
                </div>
            </div>
              <div class="col-lg-6" align="right" style="padding-top:70px;">
                <div class="mt-30">
                    <img src="{{Request::root()}}/assets/img/main_photo.PNG" class="responsive" alt="About">
                </div>
             </div>
            
            
        </div>
    </div>
</section>


<section id="products-part">

    <div class="row" style="
    background-color:#DCEFFC;
          background-image:url('{{Request::root()}}/assets/img/main_page.svg'); 
          background-size: 100%; 
          background-position: top;
          height:100px;
          width:100%;
          margin-left:0px;
          margin-right:0px;
          background-repeat: no-repeat;"> 
    </div>


   
</section>



<section id="products-part" style="background: rgb(234,244,251);
background: linear-gradient(180deg, rgba(234,244,251,0.9724264705882353) 15%, rgba(255,255,255,1) 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center pb-15 pt-80">
                    <h2>ჩვენი პროდუქცია</h2>
                    <p>ჩვენ ვქმნით პროდუქტს, რომელიც ყოველ ნაბიჯზე ცვლის შენი 
                        ცხოვრების სტილსა და ხარისხს </p>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6"  align="center">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <a href="{{Request::root()}}/sno_product" style="color:#000;"><img src="{{Request::root()}}/assets/img/products/main_one.PNG" alt="Products"></a>
                        
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="{{Request::root()}}/sno_product" style="color:#000;">სნო</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-6"  align="center">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <a href="{{Request::root()}}/sno_limoni" style="color:#000;"><img src="{{Request::root()}}/assets/img/products/main_two.png" alt="Products"></a>
                        
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="{{Request::root()}}/sno_limoni" style="color:#000;">სნო ლიმონის</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-6"  align="center">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <a href="{{Request::root()}}/kobi_product" style="color:#000;"><img src="{{Request::root()}}/assets/img/products/main_three.png" alt="Products"></a>
                        
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="{{Request::root()}}/kobi_product" style="color:#000;">კობი</a></h6>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>



<section id="about-part" class="pt-60">
    <div class="container">
      
        <div class="row">
        
            <div class="col-lg-6" style="padding-left:0px; padding-right:0px;">
                <div class="about-image">
                    <img src="{{Request::root()}}/assets/img/main_areal.png" alt="About">
                </div>
            </div>
            
            
            <div class="col-lg-6" style="background-color:#e9f9ff; margin-left:0px; margin-right:0px;" align="center">
                <div class="about-content mt-30">
                    <br><br><br><br>
                    <h3>ჩვენ ვქმნით სნოს</h3>
                    <p>კომპანიაში ყოველი თანამშრომელი თავისი <br>
                         კომპეტენციისა და პიროვნული თვისებების <br>
                          მიხედვით შეირჩა. საწარმოს პერსონალმა გაიარა <br>
                           სასწავლო კურსი ფრანგი და იტალიელი <br>
                            სპეციალისტების ხელმძღვანელობით.
                    </p>

                    <a href="" style="color:#00B0F2;"><u>გაიგე მეტი</u></a>
                   
                </div>
            </div>
            
        </div>
    </div>
</section>



<section id="blog-part" class="pt-70 pb-60">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-7">
                <div class="section-title text-left pb-15">
                    <h3>მიიღე მეტი ინფორმაცია ბლოგზე</h3>
                    
                    
                   
                </div>
                
            </div>

            <div class="col-lg-5">
                <div class="section-title text-right pb-15">
                    <a href='{{ route('blog') }}' style="color:#00B0F2;">ყველას ნახვა <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    
                    
                   
                </div>
                
            </div>


        </div>
        <div class="row">
            <div class="blog-slied owl-carousel">

                @foreach ($BlogData as $item)
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{Request::root()}}/images/{{ $item->blog_main_pic }}" alt="Blog">
                        </div>
                        <div class="blog-cont pt-25 text-center">
                            <a href="open_blog/{{ $item->blog_id }}/"><h5 style="color:#000;">{{ $item->$blog_title }}</h5></a>
                            <br>
                            <a href="open_blog/{{ $item->blog_id }}/" style="color:#00B0F2;"><u>{{ __('main.READ_MORE') }}</u></a>
                        </div>
                    </div>
                </div>
                @endforeach


           
            </div>
        </div>
    </div>
</section>





@endsection
