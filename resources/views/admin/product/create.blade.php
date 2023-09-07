@extends('admin.admin_master')
@section('admin_contain')


<p class="alert-success">
  <?php
  $message = Session::get('message');
  if ($message) {
      echo $message;
      Session::put('message',null);
  }
               
  
  ?>

</p>
<div class="row-fluid sortable">
  <div class="box span12">
    <div class="box-header" data-original-title>
      <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
      <div class="box-icon">
        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
      </div>
    </div>
    <div class="box-content">
      <form class="form-horizontal" action="{{ url('/products/') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset>

          <div class="control-group">
            <label class="control-label" for="selectError3">Category Select</label>
            <div class="controls">
              
              <select name="category" id="cat_id">
                <option value="">Select</option>
                @foreach ($categories as $category )

                  <option value="{{ $category->id }}"> {{ $category->name }}</option>

                @endforeach
              
             
              </select>
            </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="selectError3">Sub Category Select</label>
              <div class="controls">
                <select name="subcategory" id="subcat_id">
                  <option value="">Select</option>
                  @foreach ($subcategories as $subcategory )
  
                    <option value="{{ $subcategory->id }}"> {{ $subcategory->name }}</option>
  
                  @endforeach
                
               
                </select>
              </div>
              </div>



          <div class="control-group">
          <label class="control-label" for="focusedInput">Name</label>
          <div class="controls">
            <input name="name" class="input-xlarge focused" id="focusedInput" type="text" value="" required>
          </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="focusedInput">Size</label>
            <div class="controls">
              <input name="size[]" type="text" value="" data-role="tagsinput" placeholder="Add Size" required/>
            </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="focusedInput">Color</label>
              <div class="controls">
                <input name="color[]" type="text" value="" data-role="tagsinput" placeholder="Add Color" required />
              </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="focusedInput">Brand</label>
                <div class="controls">
                  <input name="brand" class="input-xlarge focused" id="focusedInput" type="text" value="" required>
                </div>
                </div>

                <div class="control-group hidden-phone">
                  <label class="control-label" for="textarea2">Description</label>
                  <div class="controls">
                  <textarea name="description" class="cleditor" id="textarea2" rows="3" required></textarea>
                  </div>
                </div>

         
                <div class="control-group">
                  <label class="control-label" for="focusedInput">Price</label>
                  <div class="controls">
                    <input name="price" class="input-xlarge focused" id="focusedInput" type="text" value="" required>
                  </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="focusedInput">Stock In</label>
                    <div class="controls">
                      <input name="stockin" class="input-xlarge focused" id="focusedInput" type="text" value="" required>
                    </div>
                    </div>

       
        

          <div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input name="image[]" placeholder="image" class="input-file uniform_on"  type="file" multiple required>
							  </div>
							</div> 
        
          
           
              
             
          
          <div class="form-actions">
          <button  type="submit" class="btn btn-primary">Save changes</button>
          <button class="btn">Cancel</button>
          </div>
        </fieldset>
        </form>
    
    </div>
  </div><!--/span-->

</div><!--/row-->

{{-- 
<script type="text/javascript">

$(document).ready(function(){
  $('select[name="cat_id"]').on('change'.function(){
    var cat_id = $(this).val();
    if (cat_id) {
      $.ajax({
        url:"{{ url('/subcat/') }}/"+cat_id,
        type:"GET",
        datatype:"json",
        success:function(data){
          $("#subcat_id").empty();
          $each(data,function(key,value){
            $("#subcat_id").append('<option value = "+value.id"+>'+value.subcategory_name+'</option>');
          });
        },
      });
      
    },
    else{
  alert('danger');
}
  });
});

  

   
  
  </script> --}}

@endsection
