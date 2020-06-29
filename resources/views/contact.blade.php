@extends('layouts.main')
@section('content')

<section id="about-part" class="pt-60" style="background-color:#ddedf7; margin-left:0px; margin-right:0px;">
    <div class="container">
      
        <div class="row">
        
            
            <div class="col-lg-12">
                <div class="about-content mt-30 text-center" style="padding-top:80px;">
                    <h3> კონტაქტი</h3>

                   
                </div>
            </div>
            
            
            
            
            
        </div>
    </div>
</section>







   
<section id="contact-part" class="pt-30" style="background: rgb(220,236,247);
background: linear-gradient(180deg, rgba(220,236,247,1) 0%, rgba(255,255,255,1) 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-form pt-45">
                    <form id="contact-form" action="" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="singel-form form-group">
                                    <input name="name" type="text" placeholder="სახელი" required="required">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="singel-form form-group">
                                    <input type="email" name="email" placeholder="ელ ფოსტა" required="required">
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="singel-form form-group">
                                    <label>შეტყობინება :</label>
                                    <textarea name="message" placeholder="| მიუთითეთ შეტყობინება" required="required"></textarea>
                                   
                                </div>
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="singel-form">
                                    <button type="submit">გაგზავნა</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
</section>



<section id="contact-part" class="pt-30">
    <div class="container">

        <div class="col-lg-12">

        <div class="row" style="background-color:#edf4f7; padding-top:30px;">

            <div class="col-md-9">
                <p style="font-size:25px;">შპს აქუა გეო</p>
            </div>

            <div class="col-md-3" align="right">
                info@aquageo.ge
            </div>

        </div>


        <div class="row" style="background-color:#edf4f7; padding-bottom:30px;">

            <div class="col-md-5">
                    <p style="font-size:14px;">საქართველო, მცხეთის რაიონი, სოფ. მისაქციელი 3308</p>
            </div>

            <div class="col-md-2">
                +995 592 003 937
            </div>

            <div class="col-md-2">
                +995 322 470 410
            </div>

            <div class="col-md-3" align="right">
                Fax: +995 322 470 411
            </div>


        
           
        </div>

    </div>




    </div>
</section>










<section id="about-part" class="pt-60">

</section>




@endsection
