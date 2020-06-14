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
                         
                           <form method="POST" action="{{{$router_url}}}">

                              @csrf
                              <div class="form-row">
                                 
                  <div class="col-md-6 mb-12">
                     <label for="validationCustom01">პირველი სვეტი ქართულად</label>
                     <textarea id="editor1" name="company_sveti_pirveli_ka">

                        {!! $company_sveti_pirveli_ka !!}

                     </textarea>
                  <br>
                  </div>
                  <br>
                  <div class="col-md-6 mb-12">
                     <label for="validationCustom01">მეორე სვეტი ქართულად</label>
                     <textarea id="editor2" name="company_sveti_meore_ka">

                        {!! $company_sveti_meore_ka !!}

                     </textarea>
                     <br>
                  </div>
                  <br>






                  <div class="col-md-6 mb-12">
                     <label for="validationCustom01">პირველი სვეტი ინგლისურად</label>
                     <textarea id="editor3" name="company_sveti_pirveli_en">

                        {!! $company_sveti_pirveli_en !!}

                     </textarea>
                  <br>
                  </div>
                  <br>
                  <div class="col-md-6 mb-12">
                     <label for="validationCustom01">მეორე სვეტი ინგლისურად</label>
                     <textarea id="editor4" name="company_sveti_meore_en">

                        {!! $company_sveti_meore_en !!}

                     </textarea>
                     <br>
                  </div>
                  <br>




                  <div class="col-md-6 mb-12">
                     <label for="validationCustom01">პირველი სვეტი რუსულად</label>
                     <textarea id="editor5" name="company_sveti_pirveli_ru">

                        {!! $company_sveti_pirveli_ru !!}

                     </textarea>
                  <br>
                  </div>
                  <br>
                  <div class="col-md-6 mb-12">
                     <label for="validationCustom01">მეორე სვეტი რუსულად</label>
                     <textarea id="editor6" name="company_sveti_meore_ru">

                        {!! $company_sveti_meore_ru !!}

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