@extends('cpadmin/layouts.app')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-md-12">
                   
                    <h4 class="mb-1 mt-0">პროდუქტის დამატება</h4>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0">პროდუქტის დამატება</h4>
                            
                            <form class="form-horizontal" method="POST" action="{{ route('orderProductPost') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col">

                                        
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ქართულად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="order_product_title_ka"  required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ინგლისურად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="order_product_title_en"  required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">რუსულად</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="order_product_title_ru"  required>
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                for="simpleinput">ფასი</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" name="order_product_price"  required>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success">დამატება</button>
                                       
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
                            
                            <p class="sub-header">
                               
                            </p>

                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>დასახელება ქართულად</th>
                                        <th>დასახელება ინგლისურად</th>
                                        <th>დასახელება რუსულად</th>
                                        <th>ფასი</th>
                                        <th>ცვლილება</th>
                                        <th>წაშლა</th>
                                        
                                    </tr>
                                </thead>
                            
                            
                                <tbody>

                                    @foreach ($orderProducts as $orderProduct)
                                    <tr>
                                        <td>{{ $orderProduct->order_product_id  }}</td>
                                        <td>{{ $orderProduct->order_product_title_ka }}</td>
                                        <td>{{ $orderProduct->order_product_title_en }}</td>
                                        <td>{{ $orderProduct->order_product_title_ru }}</td>
                                        <td>{{ $orderProduct->order_product_price }}</td>
                                        <td><a href='{{Request::root()}}/pesadmin/orderProduct/{{ $orderProduct->order_product_id }}'>რედაქტირება</a></td>
                                        <td><a href='{{Request::root()}}/pesadmin/orderProductDelete/{{ $orderProduct->order_product_id }}'>წაშლა</a></td>
                                    </tr>
                                    @endforeach
                                    
                                  
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

            


       
            
            
            
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
        