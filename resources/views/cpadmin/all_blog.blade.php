@extends('cpadmin/layouts.app')
@section('content')



<div class="content-page">
    <div class="content">
        
        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row page-title">
                <div class="col-md-12">
                    <h4 class="mb-1 mt-0">გამოქვეყნებული ბლოგები</h4> 
                    
                </div>
            </div>

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
                                        <th>სიახლის დასახელება</th>
                                        <th>ცვლილება</th>
                                        <th>წაშლა</th>
                                        
                                    </tr>
                                </thead>
                            
                            
                                <tbody>

                                    @foreach ($Blog as $Blog_item)
                                    <tr>
                                        <td>{{ $Blog_item->blog_id }}</td>
                                        <td>{{ $Blog_item->blog_title_ka }}</td>
                                        
                                        <td><a href='{{Request::root()}}/pesadmin/blog_edit/{{ $Blog_item->blog_id  }}'>დეტალები</a></td>
                                        <td><a href='{{Request::root()}}/pesadmin/blog_drop/{{ $Blog_item->blog_id  }}'>წაშლა</a></td>
                                        
                                        
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

</div>


         

@endsection
        