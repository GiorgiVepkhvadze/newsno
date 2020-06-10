@extends('layouts.main')
@section('content')

<section id="about-part" class="pt-60" style="background-color:#ddedf7; margin-left:0px; margin-right:0px;">
    <div class="container">
      
        <div class="row">
        
            
            <div class="col-lg-12">
                <div class="about-content mt-30 text-center" style="padding-top:80px;">
                    <h3> წყლის წარმომავლობა</h3>
<p>საქართველო ერთ-ერთი მდიდარი ქვეყანაა თავისი ჰიდროგეოლოგიური რესურსებით, როგორც რაოდენობრივი, ასევე ხარისხობრივი მაჩვენებლების მიხედვით და წარმოადგენს დროში განახლებად რესურს. ჰიდროგეოლოგიურ რესურსებში მოიაზრება მტკნარი მინერალური და თერმული წყლები. 

</p>
                   
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
                    <h6>Leave Reply</h6>
                    <form id="contact-form" action="" data-toggle="validator">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="singel-form form-group">
                                    <label>Nick name :</label>
                                    <input name="name" type="text" data-error="Name is required." required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="singel-form form-group">
                                    <label>Email Address :</label>
                                    <input type="email" name="email" data-error="Valid email is required." required="required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="singel-form form-group">
                                    <label>Write a message :</label>
                                    <textarea name="message" data-error="Please,leave us a message." required="required"></textarea>
                                    <div class="help-block with-errors"></div>
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














<section id="about-part" class="pt-60">

</section>




@endsection
