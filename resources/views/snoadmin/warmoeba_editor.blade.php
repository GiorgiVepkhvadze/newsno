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
                         
                           <form method="POST" action="{{ route('company_sawarmo_update') }}">

                              @csrf
                              <div class="form-row">
                                 
                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">პირველი ტექსტი ქართულად</label>
                     <textarea id="editor1" name="company_sawarmo_piveli_ka">

                        {!! $company_sawarmo_piveli_ka !!}

                     </textarea>
                  <br>
                  </div>
                  <br>
                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">პირველი ტექსტი ინგლისურად</label>
                     <textarea id="editor2" name="company_sawarmo_piveli_en">

                        {!! $company_sawarmo_piveli_en !!}

                     </textarea>
                     <br>
                  </div>
                  <br>

                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">პირველი ტექსტი რუსულად</label>
                     <textarea id="editor3" name="company_sawarmo_piveli_ru">
                        {!! $company_sawarmo_piveli_ru !!}
                      
                     </textarea>
                     <br>
                  </div>
                  <br>       



                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეორე ტექსტი ქართულად</label>
                     <textarea id="editor4" name="company_sawarmo_meore_ka">
                        {!! $company_sawarmo_meore_ka !!}
                      
                     </textarea>
                     <br>
                  </div>
                  <br> 


                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეორე  ტექსტი ინგლისურად</label>
                     <textarea id="editor5" name="company_sawarmo_meore_en">
                        {!! $company_sawarmo_meore_en !!}
                      
                     </textarea>
                     <br>
                  </div>
                  <br> 

                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">მეორე ტექსტი რუსულად</label>
                     <textarea id="editor6" name="company_sawarmo_meore_ru">
                        {!! $company_sawarmo_meore_ru !!}
                      
                     </textarea>
                     <br>
                  </div>
                  <br> 
                  
                  




                              
                              </div>
                            
                              <button class="btn btn-primary" type="submit">განახლება</button>
                           </form>
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
</script>

         

@endsection