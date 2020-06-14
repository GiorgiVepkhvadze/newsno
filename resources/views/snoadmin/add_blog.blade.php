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
                         
                           <form method="POST" action="" enctype="multipart/form-data">
                              @csrf

                              <div class="form-group">
                                 <label for="exampleInputPlaceholder">მონიშნეთ ფოტო</label>
                                 <input type="file" class="form-control-file" name="filesToUpload1" required>
                              </div>

                              <div class="form-group">
                                 <label for="exampleInputPlaceholder">სათაური ქართულად</label>
                                 <input type="text" class="form-control" name="blog_title_ka" required>
                              </div>


                              <div class="form-group">
                                 <label for="exampleInputPlaceholder">სათაური ინგლისურად</label>
                                 <input type="text" class="form-control" name="blog_title_en" required>
                              </div>


                              <div class="form-group">
                                 <label for="exampleInputPlaceholder">სათაური რუსულად</label>
                                 <input type="text" class="form-control" name="blog_title_ru" required>
                              </div>



                              <div class="form-row">
                                 
                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">ტექსტი ქართულად</label>
                     <textarea id="editor1" name="blog_text_ka">

                     

                     </textarea>
                  <br>
                  </div>
                  <br>
                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">ტექსტი ინგლისურად</label>
                     <textarea id="editor2" name="blog_text_en">

                        

                     </textarea>
                     <br>
                  </div>
                  <br>

                  <div class="col-md-12 mb-12">
                     <label for="validationCustom01">ტექსტი რუსულად</label>
                     <textarea id="editor3" name="blog_text_ru">

                      

                     </textarea>
                     <br>
                  </div>
                  <br>            
                              
                              </div>
                            
                              <button class="btn btn-primary" type="submit">ბლოგის გამოქვეყნება</button>
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