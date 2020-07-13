@extends('cpadmin/layouts.app')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-md-12">
                   
                    <h4 class="mb-1 mt-0">პროდუქციის დამატება</h4>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0">პროდუქციის დამატება</h4>
                            
                            <form class="form-horizontal" method="POST" action="{{ route('add_product_insert') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="pid" value="{{ $pid }}">
                                
                                <div class="row">
                                    <div class="col">

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">პროდუქტის სათაური ქართულად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="product_title_ka" id="simpleinput" placeholder="სათაური" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">პროდუქტის სათაური ინგლისურად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="product_title_en" id="simpleinput" placeholder="სათაური" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">პროდუქტის სათაური რუსულად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="product_title_ru" id="simpleinput" placeholder="სათაური" required>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="example-fileinput">პროდუქტის მთავარი ფოტო</label>
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
        