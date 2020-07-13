@extends('cpadmin/layouts.app')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-md-12">
                   
                    <h4 class="mb-1 mt-0">ბლოგის განთავსება</h4>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0">ბლოგის პარამეტრები</h4>
                            
                            <form class="form-horizontal" method="POST" action="{{ route('admin_add_blog_insert') }}" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="row">
                                    <div class="col">

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ბლოგის სათაური ქართულად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="blog_title_ka" id="simpleinput" placeholder="სათაური" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ბლოგის სათაური ინგლისურად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="blog_title_en" id="simpleinput" placeholder="სათაური" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ბლოგის სათაური რუსულად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="blog_title_ru" id="simpleinput" placeholder="სათაური" required>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="example-textarea">ტექსტი ქართულად</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" name="blog_text_ka" rows="5"
                                                    id="editor1"></textarea>
                                            </div>
                                        </div>




                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="example-textarea">ტექსტი ინგლისურად</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" name="blog_text_en" rows="5"
                                                    id="editor2"></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="example-textarea">ტექსტი რუსულად</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" name="blog_text_ru" rows="5"
                                                    id="editor3"></textarea>
                                            </div>
                                        </div>





                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="example-fileinput">პოსტის მთავარი ფოტო</label>
                                            <div class="col-lg-10">
                                                <input type="file" class="form-control" name="filesToUpload1" id="example-fileinput">
                                            </div>
                                        </div>



                                        <button type="submit" class="btn btn-success">გამოქვეყნება</button>



                                       
                                    </div>
                                    
                                    
                                </div>
                            </form>

                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div><!-- end col -->
            </div>
            <!-- end row -->


       
            
            
            
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
</script>

         

@endsection
        