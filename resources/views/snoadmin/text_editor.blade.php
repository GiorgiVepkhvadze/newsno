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
                                 
                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">ტექსტი ქართულად</label>
                     <textarea id="editor1" name="geo_text">

                        {!! $geo_text !!}

                     </textarea>
                  <br>
                  </div>
                  <br>
                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">ტექსტი ინგლისურად</label>
                     <textarea id="editor2" name="eng_text">

                        {!! $eng_text !!}

                     </textarea>
                     <br>
                  </div>
                  <br>

                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">ტექსტი რუსულად</label>
                     <textarea id="editor3" name="rus_text">

                        {!! $rus_text !!}

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
</script>

         

@endsection