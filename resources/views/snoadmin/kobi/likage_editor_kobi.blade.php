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
                         
                           <form method="POST" action="{{ route('kobi_likage_update') }}">

                              @csrf
                              <div class="form-row">
                      
                                 
                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">პირველი ტექსტი ქართულად</label>
                     <textarea id="editor1" name="kobi_likage_text_pirveli_ka">

                        {!! $kobi_likage_text_pirveli_ka !!}
                     </textarea>
                  <br>
                  </div>


                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">პირველი ტექსტი ინგლისურად</label>
                     <textarea id="editor2" name="kobi_likage_text_pirveli_en">

                        {!! $kobi_likage_text_pirveli_en !!}
                     </textarea>
                  <br>
                  </div>

                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">პირველი ტექსტი რუსულად</label>
                     <textarea id="editor3" name="kobi_likage_text_pirveli_ru">

                        {!! $kobi_likage_text_pirveli_ru !!}
                     </textarea>
                  <br>
                  </div>





                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეორე ტექსტი ქართულად</label>
                     <textarea id="editor4" name="kobi_likage_text_meore_ka">

                        {!! $kobi_likage_text_meore_ka !!}
                     </textarea>
                  <br>
                  </div>


                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეორე ტექსტი ინგლისურად</label>
                     <textarea id="editor5" name="kobi_likage_text_meore_en">

                        {!! $kobi_likage_text_meore_en !!}
                     </textarea>
                  <br>
                  </div>

                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეორე ტექსტი რუსულად</label>
                     <textarea id="editor6" name="kobi_likage_text_meore_ru">

                        {!! $kobi_likage_text_meore_ru !!}
                     </textarea>
                  <br>
                  </div>

                  


                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მესამე ტექსტი ქართულად</label>
                     <textarea id="editor7" name="kobi_likage_text_mesame_ka">

                        {!! $kobi_likage_text_mesame_ka !!}
                     </textarea>
                  <br>
                  </div>


                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მესამე ტექსტი ინგლისურად</label>
                     <textarea id="editor8" name="kobi_likage_text_mesame_en">

                        {!! $kobi_likage_text_mesame_en !!}
                     </textarea>
                  <br>
                  </div>

                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მესამე ტექსტი რუსულად</label>
                     <textarea id="editor9" name="kobi_likage_text_mesame_ru">

                        {!! $kobi_likage_text_mesame_ru !!}
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
                         
                           <form method="POST" action="{{ route('kobi_likage_update_image_one') }}" enctype="multipart/form-data">
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
                         
                           <img class="img-fluid" src="{{Request::root()}}/images/{{$kobi_likage_image1 }}">
                           

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
                            
                              <form method="POST" action="{{ route('kobi_likage_update_image_two') }}" enctype="multipart/form-data">
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
                            
                              <img class="img-fluid" src="{{Request::root()}}/images/{{$kobi_likage_image2}}">  


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
</script>

         

@endsection