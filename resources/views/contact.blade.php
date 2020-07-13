@extends('layouts.main')
@section('content')

<section id="about-part" class="pt-60" style="background-color:#ddedf7; margin-left:0px; margin-right:0px;">
    <div class="container">
      
        <div class="row">
        
            
            <div class="col-lg-12">
                <div class="about-content mt-30 text-center" style="padding-top:80px;">
                    <h3> {{ __('main.CONTACT') }}</h3>

                   
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
                                    <input name="name" type="text" placeholder="{{ __('main.CONTACT_NAME') }}" required="required">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="singel-form form-group">
                                    <input type="email" name="email" placeholder="{{ __('main.CONTACT_EMAIL') }}" required="required">
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="singel-form form-group">
                                    <label>&nbsp; {{ __('main.CONTACT_SHT') }} :</label>
                                    <textarea name="message" placeholder="| {{ __('main.CONTACT_MSG') }}" required="required"></textarea>
                                   
                                </div>
                            </div>
                            <p class="form-message"></p>
                            <div class="col-md-12">
                                <div class="singel-form">
                                    <span type="submit" onclick="alert('a');">{{ __('main.CONTACT_SND') }}</span>
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
                <p style="font-size:25px;">შპს აქვა გეო</p>
            </div>

            <div class="col-md-3" align="right">
                {{ \App\Helpers\AppHelper::instance()->get_contact_info("contact_email") }}
            </div>

        </div>


        <div class="row" style="background-color:#edf4f7; padding-bottom:30px;">

            <div class="col-md-5">
                    <p style="font-size:14px;">
                    
                    
                    
                        @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_contact_info("contact_address_ka") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_contact_info("contact_address_en") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_contact_info("contact_address_ru") }}
                    @endif
                    
                    </p>
            </div>

            <div class="col-md-2">
                {{ \App\Helpers\AppHelper::instance()->get_contact_info("contact_phone") }}
            </div>

            <div class="col-md-2">
                {{ \App\Helpers\AppHelper::instance()->get_contact_info("contact_phone2") }}
            </div>

            <div class="col-md-3" align="right">

                Fax: {{ \App\Helpers\AppHelper::instance()->get_contact_info("contact_fax") }}
                 
            </div>


        
           
        </div>

    </div>




    </div>
</section>










<section id="about-part" class="pt-60">

</section>




@endsection
