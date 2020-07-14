@extends('cpadmin/layouts.app')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-md-12">
                   
                    <h4 class="mb-1 mt-0">ბოცის ფასის რედაქტირება</h4>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0">ბოცის ფასის რედაქტირება</h4>
                            
                            <form class="form-horizontal" method="POST" action="{{ route('updateBoci', $Boci->boci_id) }}" enctype="multipart/form-data">
                                @csrf
                                @method("PATCH")
                                
                                <div class="row">
                                    <div class="col">

                                        
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ქართულად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="boci_title_ka" id="simpleinput" value="{{ $Boci->boci_title_ka }}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ინგლისურად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="boci_title_en" id="simpleinput" value="{{ $Boci->boci_title_en }}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">რუსულად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="boci_title_ru" id="simpleinput" value="{{ $Boci->boci_title_ru }}" required>
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ფასი</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="boci_price" id="simpleinput" value="{{ $Boci->boci_price }}" required>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success">რედაქტირება</button>
                                       
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
        