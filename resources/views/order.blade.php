@extends('layouts.main')
@section('content')




<section id="about-part" class="pt-60" style="background: rgb(206,234,246);
background: linear-gradient(180deg, rgba(206,234,246,1) 0%, rgba(255,255,255,1) 100%); margin-left:0px; margin-right:0px;">
    <div class="container">
      
        <div class="row">
        
            
            <div class="col-lg-6">
                <div class="about-content mt-30 text-left" style="padding-top:80px;">
                    <h3> 
                        

                    @if (app()->getLocale()=="ka")
                  
                    {{ \App\Helpers\AppHelper::instance()->get_content_text("30", "header_geo") }}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("30", "header_eng") }}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {{ \App\Helpers\AppHelper::instance()->get_content_text("30", "header_rus") }}
                    @endif




                    </h3>

                    <p>
                    @if (app()->getLocale()=="ka")
                  
                    {!! \App\Helpers\AppHelper::instance()->get_content_text("30", "text_geo") !!}
                     
                    @endif
                    @if (app()->getLocale()=="en")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("30", "text_eng") !!}
                       
                    @endif
                    @if (app()->getLocale()=="ru")

                    {!! \App\Helpers\AppHelper::instance()->get_content_text("30", "text_rus") !!}
                    @endif


                </p>





                   
                </div>
            </div>



<style type="text/css"> 
 .btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
}

.btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}



</style> 


    

            <div class="col-lg-6">
                <div class="about-content mt-30 text-left" style="padding-top:80px;">
                    <div class="contact-form" style="">
                        <form id="contact-form" action="" data-toggle="validator" style="background-color:#FFF; padding-left: 10px;">
                            
                            
                            <div class="row" style="padding:20px;">
                                <div class="col-md-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customRadio1" name="example1">
                                        <label class="custom-control-label" for="customRadio1">დისპენსერების რაოდენობა</label>
                                      
                                    </div>
                                 </div> 
                                 <div class="col-md-4">
                                       <span style="padding-left:20px;">
                                        <button type="button" class="btn btn-default btn-circle" onclick="minus_dispanser_number();"><i class="fa fa-minus"></i></button>
                                        <span id="dispanser_number" style="padding-left:10px; padding-right:10px;">5</span>
                                        <button type="button" class="btn btn-default btn-circle" onclick="plus_dispanser_number();"><i class="fa fa-plus"></i></button>
                                        <span>
                                 </div> 

                            </div>    


                            <div class="row" style="padding:20px;">

                                <div class="col-md-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customRadio2" name="example1">
                                        <label class="custom-control-label" for="customRadio2">ბოცების რაოდენობა ერთ დისპანსერზე</label>
                                      
                                    </div>
                                 </div> 
                                 <div class="col-md-4">
                                    
                                       <span style="padding-left:20px;">
                                        <button type="button" class="btn btn-default btn-circle" onclick="minus_boca_number();"><i class="fa fa-minus"></i></button>
                                        <span id="boca_number" style="padding-left:10px; padding-right:10px;"> 5 </span>
                                        <button type="button" class="btn btn-default btn-circle" onclick="plus_boca_number();"><i class="fa fa-plus"></i></button>
                                        <span>
                                 </div> 

                            </div>    


                            <div class="row" style="padding:20px;">

                                <div class="col-md-8">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="customRadio13" name="example1">
                                        <label class="custom-control-label" for="customRadio13"></label>
                                        
                                        <select class="form-control" width="250">
                                            <option>სხვა პროდუქცია &nbsp; &nbsp;</option>
                                        </select>
                                    </div>
    
                                 </div> 

                                 
                                 <div class="col-md-4">
                                    
                                       <span style="padding-left:20px;">
                                        <button type="button" class="btn btn-default btn-circle"><i class="fa fa-plus"></i></button>
                                        <span style="padding-left:10px; padding-right:10px;">4</span>
                                        <button type="button" class="btn btn-default btn-circle"><i class="fa fa-minus"></i></button>
                                        <span>
                                 </div> 

                            </div>    
                            







                            <div class="row" style="padding:20px;">
                                <div class="col-md-6">
                                   <p>ერთეულის ფასი</p>
                                   <h3><span id="bocis_fasi" style="color: #1592e6;">119</span> ₾</h3>
                                </div> 


                                

                                <div class="col-md-6">

                                    <p>სულ ჯამური ღირებულება</p>
                                    <h3><span id="sul_fasi" style="color: #1592e6;">0</span> ₾</h3>
                                </div>
                            </div>

                            <div class="row" style="padding:20px;">
                                <div class="col-md-12">
                                    მიუთითეთ რეკვიზიტები 
                                </div> 

                                 
                                <div class="col-md-12">
                                    <select class="form-control">
                                        <br>
                                        <option>დისპანსერის მესაკუთრე</option>
                                        <option>აქვა გეო</option>
                                        <option>შემკვეთი</option>
                                      </select>
                                </div>

                               
                            </div>


                            <div class="row" style="padding:20px;">
                                <div class="col-md-6">
                                    
                                    <input name="name" class="form-control" type="text"  placeholder="კომპანია" required="required">



                                </div> 

                                 
                                <div class="col-md-6">
                                    
                                    <input name="name" class="form-control" type="text"  placeholder="საკონტაქტო პირი" required="required">

                                </div>

                               
                            </div>


                            <div class="row" style="padding:20px;">
                                <div class="col-md-6">
                                    
                                    <input name="name" class="form-control" type="text"  placeholder="ფაქტიური მისამართი" required="required">



                                </div> 

                                 
                                <div class="col-md-6">
                                    
                                    <input name="name" class="form-control" type="text"  placeholder="ტელეფონი" required="required">

                                </div>

                               
                            </div>



                            <div class="row" style="padding:20px;">
                            <div class="col-md-2">

                                <div class="singel-form">
                                    <span type="submit" onclick="alert('a');">შეკვეთა</span>
                                </div>
                              

                            </div>
                            </div>




                        </form>
                    </div>   
                    



                </div>
            </div>
            
            
            
            
            
        </div>
    </div>
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>



function plus_dispanser_number(){

    var arsebuli_raodenoba = $('#dispanser_number').text();
    var arebuli_raodenoba_clear = parseInt(arsebuli_raodenoba);
    var new_text = arebuli_raodenoba_clear+1;
    document.getElementById("dispanser_number").textContent=new_text;
    vvv();
}

function minus_dispanser_number(){
var arsebuli_raodenoba = $('#dispanser_number').text();
var arebuli_raodenoba_clear = parseInt(arsebuli_raodenoba);
if(arebuli_raodenoba_clear <1 ){
alert('არასწორი ნიშნული');
} else {
var new_text = arebuli_raodenoba_clear-1;
document.getElementById("dispanser_number").textContent=new_text;
}
vvv();
}




function plus_boca_number(){

var arsebuli_raodenoba = $('#boca_number').text();
var arebuli_raodenoba_clear = parseInt(arsebuli_raodenoba);
var new_text = arebuli_raodenoba_clear+1;
document.getElementById("boca_number").textContent=new_text;
vvv();

}

function minus_boca_number(){
var arsebuli_raodenoba = $('#boca_number').text();
var arebuli_raodenoba_clear = parseInt(arsebuli_raodenoba);
if(arebuli_raodenoba_clear <6 ){
alert('არასწორი ნიშნული');
} else {
var new_text = arebuli_raodenoba_clear-1;
document.getElementById("boca_number").textContent=new_text;
}
vvv();
}


function vvv(){

var dispanser_number = $('#dispanser_number').text();
var dispanser_number_clear = parseInt(dispanser_number);

if(dispanser_number_clear==0){
    dispanser_number_clear=1;
} else {
    dispanser_number_clear = dispanser_number_clear;
}




var arsebuli_raodenoba = $('#boca_number').text();
var arebuli_raodenoba_clear = parseInt(arsebuli_raodenoba);
var bocis_fasi = $('#bocis_fasi').text();
var bocis_fasi_clear = parseInt(bocis_fasi);
var jami = ((bocis_fasi_clear * arebuli_raodenoba_clear) *dispanser_number_clear);
document.getElementById("sul_fasi").textContent=jami;
}










$("#customRadio1").click( function(){
   if( $(this).is(':checked') ) alert("checked");
});

</script>










<section id="about-part" class="pt-60">

</section>




@endsection
