@extends('snoadmin.lay.app')
@section('content')


            <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">გამოქვეყნებული ბლოგები</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table id="datatable" class="table table-striped table-bordered" >
                                 <thead>
                                    <tr>
                                       <th>სათაური ქართულად</th>
                                       <th>ნახვები</th>
                                       <th>დრო</th>
                                       <th>ცვლილება</th>
                                       <th>წაშლა</th>
                                      
                                    </tr>
                                 </thead>
                                 <tbody>

                                    @foreach ($Blog as $item)


                                    <tr>
                                       <td>{{{$item->blog_title_ka}}}</td>
                                       <td>{{{$item->blog_readed}}}</td>
                                       <td>{{{$item->blog_time}}}</td>
                                       <td><a href='{{Request::root()}}/snoadmin/blog_edit/{{{$item->blog_id}}}'>ცვლილება</a></td>
                                       <td><a href='{{Request::root()}}/snoadmin/blog_drop/{{{$item->blog_id}}}'>წაშლა</a></td>
                                       
                                    </tr>
                                   
                                        
                                    @endforeach
                                   
                                    
                                   
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th>სათაური ქართულად</th>
                                       <th>ნახვები</th>
                                       <th>დრო</th>
                                       <th>ცვლილება</th>
                                       <th>წაშლა</th>
                                    </tr>
                                 </tfoot>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         

@endsection