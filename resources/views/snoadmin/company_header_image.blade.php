@extends('snoadmin.lay.app')
@section('content')


<div class="container-fluid">
    <div class="row">

        <div class="col-sm-6 col-lg-6">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">

                </div>
                <div class="iq-card-body">

                    <form method="POST" action="{{ route('company_header_image_update') }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputPlaceholder">მონიშნეთ ფოტო</label>
                            <input type="file" class="form-control-file" name="filesToUpload1" required>
                        </div>
                        <button class="btn btn-primary" type="submit">ფოტოს შეცვლა</button>
                    </form>

                </div>



            </div>

        </div>

        <div class="col-sm-6 col-lg-6">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">

                </div>
                <div class="iq-card-body">

                    <img class="img-fluid" src="{{Request::root()}}/images/{{ $info->company_header_image }}">


                </div>



            </div>

        </div>




    </div>

</div>




@endsection
