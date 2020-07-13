@extends('cpadmin/layouts.app')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-md-12">
                   
                    <h4 class="mb-1 mt-0">საკონტაქტო ინფორმაცია</h4>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0">საკონტაქტო პარამეტრები</h4>
                            
                            <form class="form-horizontal" method="POST" action="{{ route('contact_update') }}" enctype="multipart/form-data">
                                @csrf
                               
                                <div class="row">
                                    <div class="col">
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ტელეფონის ნომერი</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="contact_phone" id="simpleinput" value="{{ $contact->contact_phone }}" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ტელეფონის ნომერი მეორე</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="contact_phone2" id="simpleinput" value="{{ $contact->contact_phone2 }}" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ფაქსი</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="contact_fax" id="simpleinput" value="{{ $contact->contact_fax }}" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ელ-ფოსტა</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="contact_email" id="simpleinput" value="{{ $contact->contact_email }}" required>
                                            </div>
                                        </div>



                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">მისამართი ქართულად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="contact_address_ka" id="simpleinput" value="{{ $contact->contact_address_ka }}" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">მისამართი ინგლისურად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="contact_address_en" id="simpleinput" value="{{ $contact->contact_address_en }}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">მისამართი რუსულად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="contact_address_ru" id="simpleinput" value="{{ $contact->contact_address_ru }}" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">სნო Facebook</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="sno_facebook" id="simpleinput" value="{{ $contact->sno_facebook }}" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">სნო Instagram</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="sno_insta" id="simpleinput" value="{{ $contact->sno_insta }}" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">სნო Youtube</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="sno_youtube" id="simpleinput" value="{{ $contact->sno_youtube }}" required>
                                            </div>
                                        </div>




                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">კობი Facebook</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="kobi_facebook" id="simpleinput" value="{{ $contact->kobi_facebook }}" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">კობი Instagram</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="kobi_insta" id="simpleinput" value="{{ $contact->kobi_insta }}" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">კობი Youtube</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="kobi_youtube" id="simpleinput" value="{{ $contact->kobi_youtube }}" required>
                                            </div>
                                        </div>



                                        <button type="submit" class="btn btn-success">განახლება</button>



                                       
                                    </div>

                                    <div class="col">
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
</script>

         

@endsection
        