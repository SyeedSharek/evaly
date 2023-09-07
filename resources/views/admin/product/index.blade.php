@extends('admin.admin_master')
@section('admin_contain')

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Show Products Items</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th style="width: 2%">SL</th>
                      <th style="width: 6%">Category Name</th>
                      <th style="width: 6%">Sub product Name</th>
                      <th style="width: 5%">Name</th>
                      <th style="width: 6%">Size</th>
                      <th style="width: 6%">Color</th>
                      <th style="width: 4%">Brand</th>
                      <th style="width: 10%">Description</th>
                      <th style="width: 5%">Price</th>
                      <th style="width: 5%">Stock In</th>
                      <th style="width: 18%">Image</th>
                      <th style="width: 6%">Date</th>
                      <th style="width: 5%">Status</th>
                      <th style="width: 18%">Actions</th>
                  </tr>
              </thead>  
                @foreach ($products as $key=>$product )

                @php
                  $product['image'] = explode("|",$product->image);
                  $images = $product['image'];
                   @endphp
                  
              <tbody>
                                  
                
                <tr>
                    <td>{{$key+1}}</td>
                    
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->subcategory->name }}</td>
                    <td>{{ $product->name }}</td>
                   

                     <td>

                        {{-- @foreach (Json_decode($product->size) as $product_size) --}}

                        @php
                            $sizes = json_decode($product->size)
                        @endphp

                        @foreach ($sizes as $size )
                                                  
                         <ul class="span3">
                            {{ $size }}
                        </ul>

                        @endforeach    
                       
                    
                     </td> 



                    <td>
                        @php
                            $colors = json_decode($product->color);
                        @endphp

                        @foreach ($colors as $color)
                        <ul class="span3">
                            {{ $color }}
                        </ul>
                        @endforeach
                    </td>

                    <td>{{ $product->brand }}</td>
                    <td>{!! $product->description !!}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stockin }}</td>
                   

                               
                    <td>
                        @foreach ($images as $image )
                            
                       
                        <img style="height: 70px" width="70px" src="{{ asset('/product_image/'.$image) }}" alt="" >
                    
                        @endforeach
                    </td>

                    <td class="center">{{ \Carbon\Carbon::parse($product->created_at)->format('Md,Y') }}</td>

                    <td class="center">
                        @if ($product->status==1)
                            
                       <span class="label label-success">Active</span>
                       @else
                       <span class="label label-danger">Deactive</span>
                       @endif

                    </td>

                    <td class="row">
                        <div class="span3"></div>

                                                   
                         <div class="span2">
                             @if ($product->status==1)

                          <a href="{{ url('/cat_status').$product->id }}" class="btn btn-success" >
                            <i class="halflings-icon white thumbs-down"></i> 
                            
                         </a>
                        
                         @else
                         <a href="{{ url('/cat_status').$product->id }}" class="btn btn-danger" >
                            <i class="halflings-icon white thumbs-up"></i> 
                           
                         </a>
                            @endif
                        </div>
                      

                        <div class="span2">

                          <a href="{{ url('/products/'.$product->id.'/edit') }}" class="btn btn-info" >

                            <i class="halflings-icon white edit"></i>  
                         </a>

                        </div>

                        <div class="span2">
                            <form action="{{ url('/products/'.$product->id )}}" method="post">
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