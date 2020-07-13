@extends('cpadmin/layouts.app')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-md-12">
                   
                    <h4 class="mb-1 mt-0">ცვლილება</h4>
                </div>
            </div>
            

  @if ($contenti->content_id=='1')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">ფოტო ედიტორი</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif



  @if ($contenti->content_id=='2')


  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editor1a">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  
  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">პოსტერის ფოტოს ცვლილება</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>

                <div class="col">
                
                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                      <input type="hidden" value="image2" name="image_position">
  
  
                      
                      <div class="row">
                          <div class="col">
  
                              <div class="form-group row">
                                  <label class="col-lg-2 col-form-label"
                                      for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                  <div class="col-lg-10">
                                      <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                  </div>
                              </div>
  
                              <button type="submit" class="btn btn-success">განახლება</button>
                             
                          </div>
  
  
                          <div class="col">
                          
                              <img src="{{Request::root()}}/{{ $contenti->image2 }}" width="250" />
  
                          </div>
  
                          
                          
                      </div>
                    </form>
  
                  </div>


                  <div class="col">
                
                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                      <input type="hidden" value="image3" name="image_position">
                     
  
  
                      
                      <div class="row">
                          <div class="col">
  
                              <div class="form-group row">
                                  <label class="col-lg-2 col-form-label"
                                      for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                  <div class="col-lg-10">
                                      <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                  </div>
                              </div>
  
                              <button type="submit" class="btn btn-success">განახლება</button>
                             
                          </div>
  
  
                          <div class="col">
                          
                              <img src="{{Request::root()}}/{{ $contenti->image3 }}" width="250" />
  
                          </div>
  
                          
                          
                      </div>
                    </form>
  
                  </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif





  
  @if ($contenti->content_id=='3')


  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editor1a">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  
  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">პოსტერის ფოტოს ცვლილება</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif
          
       



  @if ($contenti->content_id=='4')


  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editor1a">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->

  
  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">პოსტერის ფოტოს ცვლილება</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif
          




  @if ($contenti->content_id=='5')


  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">


                    <div class="row">
                        <div class="col-md-6">
                           
                            

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_erti_geo" rows="5"
                                        id="editor1">{!! $contenti->sveti_erti_geo !!}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_ori_geo" rows="5"
                                        id="editor2">{!! $contenti->sveti_ori_geo !!}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                           
                            

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_erti_eng" rows="5"
                                        id="editor3">{!! $contenti->sveti_erti_eng !!}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_ori_eng" rows="5"
                                        id="editor4">{!! $contenti->sveti_ori_eng !!}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-6">
                           
                            

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_erti_rus" rows="5"
                                        id="editor5">{!! $contenti->sveti_erti_rus !!}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_ori_rus" rows="5"
                                        id="editor6">{!! $contenti->sveti_ori_rus !!}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>







                    <div class="row">
                        <div class="col">
                           
                            

            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->




  @endif





  @if ($contenti->content_id=='6')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editor1">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->








  @endif




  @if ($contenti->content_id=='7')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editor1">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">ფოტო ედიტორი</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif



  @if ($contenti->content_id=='8')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                           

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">ფოტო ედიტორი</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif



  @if ($contenti->content_id=='9')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">ფოტო ედიტორი</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif



  @if ($contenti->content_id=='10')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">ფოტო ედიტორი</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif



  @if ($contenti->content_id=='11')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif



  @if ($contenti->content_id=='12')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif
         
  


  @if ($contenti->content_id=='13')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editor1">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">ფოტო ედიტორი</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif







  @if ($contenti->content_id=='14')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editor1">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">ფოტო ედიტორი</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif
            



  @if ($contenti->content_id=='15')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editor">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">ფოტო ედიტორი</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>


                <div class="col">
                
                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                      <input type="hidden" value="image2" name="image_position">
  
  
                      
                      <div class="row">
                          <div class="col">
  
                              <div class="form-group row">
                                  <label class="col-lg-2 col-form-label"
                                      for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                  <div class="col-lg-10">
                                      <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                  </div>
                              </div>
  
                              <button type="submit" class="btn btn-success">განახლება</button>
                             
                          </div>
  
  
                          <div class="col">
                          
                              <img src="{{Request::root()}}/{{ $contenti->image2 }}" width="250" />
  
                          </div>
  
                          
                          
                      </div>
                    </form>
  
                  </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif




  @if ($contenti->content_id=='16')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->



  @endif




  @if ($contenti->content_id=='17')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">პოსტის მთავარი ფოტოს ცვლილება</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif


  @if ($contenti->content_id=='18')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editor1">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">პოსტის მთავარი ფოტოს ცვლილება</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif




  @if ($contenti->content_id=='19')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                        
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                          

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->




  @endif






  @if ($contenti->content_id=='20')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editor1">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">პოსტის მთავარი ფოტოს ცვლილება</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif




  @if ($contenti->content_id=='21')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">პოსტის მთავარი ფოტოს ცვლილება</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif




  @if ($contenti->content_id=='22')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">პოსტის მთავარი ფოტოს ცვლილება</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif



  @if ($contenti->content_id=='23')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->



  @endif



  @if ($contenti->content_id=='24')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->

  @endif




  @if ($contenti->content_id=='25')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">პოსტის მთავარი ფოტოს ცვლილება</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif




  @if ($contenti->content_id=='26')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">პოსტის მთავარი ფოტოს ცვლილება</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>


                <div class="col">
                
                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                      <input type="hidden" value="image2" name="image_position">
  
  
                      
                      <div class="row">
                          <div class="col">
  
                              <div class="form-group row">
                                  <label class="col-lg-2 col-form-label"
                                      for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                  <div class="col-lg-10">
                                      <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                  </div>
                              </div>
  
                              <button type="submit" class="btn btn-success">განახლება</button>
                             
                          </div>
  
  
                          <div class="col">
                          
                              <img src="{{Request::root()}}/{{ $contenti->image2 }}" width="250" />
  
                          </div>
  
                          
                          
                      </div>
                    </form>
  
                  </div>
  



                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif


  @if ($contenti->content_id=='27')


  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">პოსტის მთავარი ფოტოს ცვლილება</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif





  @if ($contenti->content_id=='28')


  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">


                    <div class="row">
                        <div class="col-md-6">
                           
                            

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_erti_geo" rows="5"
                                        id="editor1">{!! $contenti->sveti_erti_geo !!}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_ori_geo" rows="5"
                                        id="editor2">{!! $contenti->sveti_ori_geo !!}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-6">
                           
                            

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_erti_eng" rows="5"
                                        id="editor3">{!! $contenti->sveti_erti_eng !!}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_ori_eng" rows="5"
                                        id="editor4">{!! $contenti->sveti_ori_eng !!}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>




                    <div class="row">
                        <div class="col-md-6">
                           
                            

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_erti_rus" rows="5"
                                        id="editor5">{!! $contenti->sveti_erti_rus !!}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="sveti_ori_rus" rows="5"
                                        id="editor6">{!! $contenti->sveti_ori_rus !!}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>







                    <div class="row">
                        <div class="col">
                           
                            

            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->




  @endif




  @if ($contenti->content_id=='30')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editor1">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->



  @endif





  @if ($contenti->content_id=='31')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">ფოტო ედიტორი</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif





  @if ($contenti->content_id=='32')

  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">კონტენტის ცვლილება</h4>

                    <form class="form-horizontal" method="POST" action="{{ route('content_edit_update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">

                    <div class="row">
                        <div class="col">
                           
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_geo }}" name="header_geo" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ქართულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_geo" rows="5"
                                        id="editora">{!! $contenti->text_geo !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_eng }}" name="header_eng" id="simpleinput" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი ინგლისურად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_eng" rows="5"
                                        id="editor2a">{!! $contenti->text_eng !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="simpleinput">Header ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="{{ $contenti->header_rus }}" name="header_rus" id="simpleinput" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-textarea">ტექსტი რუსულად</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" name="text_rus" rows="5"
                                        id="editor3a">{!! $contenti->text_rus !!}</textarea>
                                </div>
                            </div>
            
                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>
                        
                        
                    </div>
                </form>
                

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->





  <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0">ფოტო ედიტორი</h4>
                
                <div class="col">
                
                  <form class="form-horizontal" method="POST" action="{{ route('content_edit_update_image') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $contenti->content_id }}" name="content_id">
                    <input type="hidden" value="image1" name="image_position">


                    
                    <div class="row">
                        <div class="col">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label"
                                    for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">განახლება</button>
                           
                        </div>


                        <div class="col">
                        
                            <img src="{{Request::root()}}/{{ $contenti->image1 }}" width="250" />

                        </div>

                        
                        
                    </div>
                  </form>

                </div>




                        

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div><!-- end col -->
</div>
<!-- end row -->


  @endif





            
        </div> <!-- container-fluid -->

    </div> <!-- content -->

    

   <!-- Footer Start -->
   <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                2020 &copy; ITWEB.GE <a href="https://itweb.ge/" target="_blank">გიორგი ვეფხვაძე</a>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

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
        