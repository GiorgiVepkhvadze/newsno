@extends('snoadmin.lay.app')
@section('content')
            <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               <div class="row">

                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           
                        </div>
                        <div class="iq-card-body">
                         
                           <form method="POST" action="{{ route('sno_xarisxi_update') }}">

                              @csrf
                              <div class="form-row">
                      
                                 
                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">პირველი ტექსტი ქართულად</label>
                     <textarea id="editor1" name="sno_mineral_pirveli_ka">

                        {!! $sno_mineral_pirveli_ka !!}
                     </textarea>
                  <br>
                  </div>


                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">პირველი ტექსტი ინგლისურად</label>
                     <textarea id="editor2" name="sno_mineral_pirveli_en">

                        {!! $sno_mineral_pirveli_en !!}
                     </textarea>
                  <br>
                  </div>



                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">პირველი ტექსტი რუსულად</label>
                     <textarea id="editor3" name="sno_mineral_pirveli_ru">

                        {!! $sno_mineral_pirveli_ru !!}
                     </textarea>
                  <br>
                  </div>





                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეორე ტექსტი ქართულად</label>
                     <textarea id="editor4" name="sno_mineral_meore_ka">

                        {!! $sno_mineral_meore_ka !!}
                     </textarea>
                  <br>
                  </div>


                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეორე ტექსტი ინგლისურად</label>
                     <textarea id="editor5" name="sno_mineral_meore_en">

                        {!! $sno_mineral_meore_ka !!}
                     </textarea>
                  <br>
                  </div>

                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეორე ტექსტი რუსულად</label>
                     <textarea id="editor6" name="sno_mineral_meore_ru">

                        {!! $sno_mineral_meore_en !!}
                     </textarea>
                  <br>
                  </div>


                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მესამე ტექსტი ქართულად</label>
                     <textarea id="editor7" name="sno_mineral_mesame_ka">

                        {!! $sno_mineral_mesame_ka !!}
                     </textarea>
                  <br>
                  </div>


                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მესამე ტექსტი ინგლისურად</label>
                     <textarea id="editor8" name="sno_mineral_mesame_ru">

                        {!! $sno_mineral_mesame_ru !!}
                     </textarea>
                  <br>
                  </div>

                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მესამე ტექსტი რუსულად</label>
                     <textarea id="editor9" name="sno_mineral_mesame_en">

                        {!! $sno_mineral_mesame_en !!}
                     </textarea>
                  <br>
                  </div>



                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეოთხე ტექსტი ქართულად</label>
                     <textarea id="editor10" name="sno_mineral_meotxe_ka">

                        {!! $sno_mineral_meotxe_ka !!}
                     </textarea>
                  <br>
                  </div>


                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეოთხე ტექსტი ინგლისურად</label>
                     <textarea id="editor11" name="sno_mineral_meotxe_en">

                        {!! $sno_mineral_meotxe_en !!}
                     </textarea>
                  <br>
                  </div>

                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეოთხე ტექსტი რუსულად</label>
                     <textarea id="editor12" name="sno_mineral_meotxe_ru">

                        {!! $sno_mineral_meotxe_ru !!}
                     </textarea>
                  <br>
                  </div>




                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეხუთე ტექსტი ქართულად</label>
                     <textarea id="editor13" name="sno_mineral_mexute_ka">

                        {!! $sno_mineral_mexute_ka !!}
                     </textarea>
                  <br>
                  </div>


                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეხუთე ტექსტი ინგლისურად</label>
                     <textarea id="editor14" name="sno_mineral_mexute_en">

                        {!! $sno_mineral_mexute_en !!}
                     </textarea>
                  <br>
                  </div>

                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეხუთე ტექსტი რუსულად</label>
                     <textarea id="editor15" name="sno_mineral_mexute_ru">

                        {!! $sno_mineral_mexute_ru !!}
                     </textarea>
                  <br>
                  </div>


                          
                              
                              </div>
                            
                              <button class="btn btn-primary" type="submit">განახლება</button>
                           </form>
                        </div>
                     </div>
                   
                  </div>




                  
               </div>
            </div>



            <div class="container-fluid">
               <div class="row">

                  <div class="col-sm-6 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           
                        </div>
                        <div class="iq-card-body">
                         
                           <form method="POST" action="{{ route('sno_xarisxi_update_image_one') }}" enctype="multipart/form-data">
                              @csrf

                              <div class="form-group">
                                 <label for="exampleInputPlaceholder">მონიშნეთ ფოტო</label>
                                 <input type="file" class="form-control-file" name="filesToUpload1" required>
                              </div>
                              <button class="btn btn-primary" type="submit">პირველი ფოტოს შეცვლა</button>
                           </form>

                           </div>



                        </div>

                  </div>

                  <div class="col-sm-6 col-lg-6">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           
                        </div>
                        <div class="iq-card-body">
                         
                           <img class="img-fluid" src="{{Request::root()}}/images/{{$sno_mineral_image1 }}">
                           

                        </div>



                        </div>

                  </div>




                  </div>
                  
               </div>



               <div class="container-fluid">
                  <div class="row">
   
                     <div class="col-sm-6 col-lg-6">
                        <div class="iq-card">
                           <div class="iq-card-header d-flex justify-content-between">
                              
                           </div>
                           <div class="iq-card-body">
                            
                              <form method="POST" action="{{ route('sno_xarisxi_update_image_two') }}" enctype="multipart/form-data">
                                 @csrf
   
                                 <div class="form-group">
                                    <label for="exampleInputPlaceholder">მონიშნეთ ფოტო</label>
                                    <input type="file" class="form-control-file" name="filesToUpload1" required>
                                 </div>
                                 <button class="btn btn-primary" type="submit">მეორე  ფოტოს შეცვლა</button>
                              </form>
   
                              </div>

   
                           </div>
   
                     </div>
   
                     <div class="col-sm-6 col-lg-6">
                        <div class="iq-card">
                           <div class="iq-card-header d-flex justify-content-between">
                              
                           </div>
                           <div class="iq-card-body">
                            
                              <img class="img-fluid" src="{{Request::root()}}/images/{{$sno_mineral_image2}}">  


                           </div>
   
   
   
                           </div>
   
                     </div>
   
   
   
   
                     </div>
                     
                  </div>


                  <div class="container-fluid">
                     <div class="row">
      
                        <div class="col-sm-6 col-lg-6">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 
                              </div>
                              <div class="iq-card-body">
                               
                                 <form method="POST" action="{{ route('sno_xarisxi_update_image_three') }}" enctype="multipart/form-data">
                                    @csrf
      
                                    <div class="form-group">
                                       <label for="exampleInputPlaceholder">მონიშნეთ ფოტო</label>
                                       <input type="file" class="form-control-file" name="filesToUpload1" required>
                                    </div>
                                    <button class="btn btn-primary" type="submit">მესამე  ფოტოს შეცვლა</button>
                                 </form>
      
                                 </div>
   
      
                              </div>
      
                        </div>
      
                        <div class="col-sm-6 col-lg-6">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 
                              </div>
                              <div class="iq-card-body">
                               
                                 <img class="img-fluid" src="{{Request::root()}}/images/{{$sno_mineral_image3}}">  
   
   
                              </div>
      
      
      
                              </div>
      
                        </div>
      
      
      
      
                        </div>
                        
                     </div>
           
         

          

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('editor1');
CKEDITOR.replace('editor2');
CKEDITOR.replace('editor3');
CKEDITOR.replace('editor4');
CKEDITOR.replace('editor5');
CKEDITOR.replace('editor6');
CKEDITOR.replace('editor7');
CKEDITOR.replace('editor8');
CKEDITOR.replace('editor9');
CKEDITOR.replace('editor10');
CKEDITOR.replace('editor11');
CKEDITOR.replace('editor12');
CKEDITOR.replace('editor13');
CKEDITOR.replace('editor14');
CKEDITOR.replace('editor15');
</script>

         

@endsection