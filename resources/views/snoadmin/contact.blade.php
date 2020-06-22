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

                    <form method="POST" action="{{ route('admin-contact-update', 1) }}">

                        @csrf
                        @method("PATCH")
                        <div class="form-row">

                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">ტელეფონი</label>
                                <input type="text" name="contact_phone" class="form-control" value="{{ $contact->contact_phone }}" id="">
                            </div>

                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">ელ. ფოსტა</label>
                                <input type="text" name="contact_email" class="form-control" value="{{ $contact->contact_email }}" id="">
                            </div>

                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">მისამართი ქართულად</label>
                                <input type="text" name="contact_address_ka" class="form-control" value="{{ $contact->contact_address_ka }}" id="">
                            </div>

                            <div class="col-md-12 mb-12">
                                <label for="contact_address_en">მისამართი ინგლისურად</label>
                                <input type="text" name="contact_address_en" class="form-control" value="{{ $contact->contact_address_en }}" id="">
                            </div>
                            
                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">მისამართი რუსულად</label>
                                <input type="text" name="contact_address_ru" class="form-control" value="{{ $contact->contact_address_ru }}" id="">
                            </div>

                            
                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">Twitter</label>
                                <input type="text" name="contact_twitter" class="form-control" value="{{ $contact->contact_twitter }}" id="">
                            </div>

                            
                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">Facebook</label>
                                <input type="text" name="contact_facebook" class="form-control" value="{{ $contact->contact_facebook }}" id="">
                            </div>

                            
                            <div class="col-md-12 mb-12">
                                <label for="validationCustom01">Youtube</label>
                                <input type="text" name="contact_youtube" class="form-control" value="{{ $contact->contact_youtube }}" id="">
                            </div>

                        </div>
                        <br>
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
