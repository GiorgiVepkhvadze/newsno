@extends('layouts.main')
@section('content')

<section id="about-part" class="pt-80" style="background-color:#DCEFFC;">
    <div class="container">
      
        <div class="row">
        
          
            
            
            <div class="col-lg-6">
                <div class="about-content mt-30" style="padding-top:140px;">
                    <h3> წყალი არის სნო</h3>
                    <p>წყლის მოპოვება 150 მეტრის სიღმიდან ხდება. წყლის რესურსი მიწის ზედაპირიდან  4 წყალგაუმტარი შრით არის იზოლირებული და ამის გამო  ის ნატურალურად არის დაცული ნებისმიერი სახის დაბინძურებისგან

</p>
                   
                </div>
            </div>
            
            
            
              <div class="col-lg-6" align="right">
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
                        <img src="{{Request::root()}}/assets/img/products/main_one.PNG" alt="Products">
                        
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">სნო</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-6"  align="center">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{Request::root()}}/assets/img/products/main_two.png" alt="Products">
                        
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="{{Request::root()}}/sno_limoni">სნო ლიმონის</a></h6>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-6"  align="center">
                <div class="singel-products mt-30">
                    <div class="products-image">
                        <img src="{{Request::root()}}/assets/img/products/main_three.png" alt="Products">
                        
                    </div>
                    <div class="products-contant">
                        <h6 class="products-title"><a href="#">კობი</a></h6>
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
            
            
            <div class="col-lg-6" style="background-color:#e9f9ff; margin-left:0px; margin-right:0px;">
                <div class="about-content mt-30">
                    <h3>ჩვენ ვქმნით სნოს.</h3>
                    <p>Proin fringilla vulputate lorem quis congue. Mauris lacinia gravida ultr
                    ices. Phasellus consectetur pellentesque. Vestibulum eu ligula cursus nisi ul
                    trices laoreet iaculis sed lum non dolor fermentum, consequat risus non, auc
                    tor nisi. Nunc sodales blandit lum auctor nibh varius metus volutpat, et s
                    ollicitudin massa ornare. .</p>
                   
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
                    <a href=''>ყველა სიახლის ნახვა <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    
                    
                   
                </div>
                
            </div>


        </div>
        <div class="row">
            <div class="blog-slied owl-carousel">
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{Request::root()}}/assets/images/blog/b-1.jpg" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25 text-center">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{Request::root()}}/assets/images/blog/b-2.jpg" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25 text-center">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-12">
                    <div class="singel-blog mt-30">
                        <div class="blog-thum">
                            <img src="{{Request::root()}}/assets/images/blog/b-1.jpg" alt="Blog">
                            <div class="date text-center">
                                <h3>22</h3>
                                <span>Sep 2020</span>
                            </div>
                        </div>
                        <div class="blog-cont pt-25 text-center">
                            <a href="#"><h5>Etiam sit amet justo tincidunt.</h5></a>
                            <p>Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor. Phasellus.</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
</section>





@endsection
