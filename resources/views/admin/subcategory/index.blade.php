@extends('admin.admin_master')
@section('admin_contain')

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Show Category Items</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered ">
              <thead>
                  <tr>
                      <th style="width: 10%">SL</th>
                      <th style="width: 10%">Category Name</th>
                      <th style="width: 10%">Sub Category Name</th>
                      <th style="width: 15%">Date registered</th>
                      
                      <th style="width: 10%">Status</th>
                      <th style="width: 20%">Actions</th>
                  </tr>
              </thead>  
                @foreach ($subcategories as $subcategory )
                  <tbody>
                                  
                
                 <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{data_get($subcategory->category,'name','N/A') }}</td>
                    <td>{{ $subcategory->name }}</td>
                    <td class="center">{{ \Carbon\Carbon::parse($subcategory->created_at)->format('Md,Y') }}</td>

                               
                

                    <td class="center">
                        @if ($subcategory->status==1)
                            
                       <span class="label label-success">Active</span>
                       @else
                       <span class="label label-danger">Deactive</span>
                       @endif

                    </td>

                    <td class="row">
                        <div class="span3"></div>

                                                   
                         <div class="span2">
                             @if ($subcategory->status==1)

                         <a href="{{ url('/cat_status').$subcategory->id }}" class="btn btn-success" >
                            <i class="halflings-icon white thumbs-down"></i> 
                            
                         </a>
                        
                         @else
                         <a href="{{ url('/cat_status').$subcategory->id }}" class="btn btn-danger" >
                            <i class="halflings-icon white thumbs-up"></i> 
                           
                         </a>
                            @endif
                        </div>
                      

                        <div class="span2">

                         <a href="{{url('/subcategories/'.$subcategory->id.'/edit') }}" class="btn btn-info" >
                            <i class="halflings-icon white edit"></i>  
                         </a>

                        </div>

                        <div class="span2">
                            <form action="{{ url('/subcategories/'.$subcategory->id )}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"> <i class="halflings-icon white trash"></i> </button>
                                                                            
                            </form>

                         </div>
                    </td>

                    </div>


                 </tr>
                                       
                                            
              
                  </tbody>
              @endforeach
          </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->


@endsection