@extends('frondend.master')
@section('contain')


    


      <div class="page-heading bg-light">
        <div class="container">
         <div class="row align-items-end">
         <div class="col-lg-7">
         <h1>Checkout</h1>
         <p class="mb-4"><a href="#">Home</a> / <strong>Shipping</strong></p>
         </div>
         </div>
         </div>
      </div>
    
    <div class="untree_co-section">
    <div class="container">
    
    <div class="row">
    <div class="col-md-12 mb-6 mb-md-2">
    <h2 class="h3 mb-3 text-black">Billing Details</h2>
    

    <form action="{{ url('/save_shipping_address/') }}" method="POST">
        @csrf
       

        <div> 
        <div class="form-group">
            <label for="c_country" class="text-black">District <span class="text-danger">*</span></label>
            <select name="district" id="c_country" class="form-control">
            <option value="1">Select a District</option>
            <option value="2">Chattagram</option>
            <option value="3">Dhaka</option>
            <option value="4">Comilla</option>
            <option value="5">Rajshahi</option>
            <option value="6">Mymensingh</option>
            <option value="7">Rangpur</option>
            <option value="8">Gazipur</option>
            
            </select>
        </div>

    <div class="form-group row">
    <div class="col-md-12">
    <label  for="c_fname" class="text-black">Full Name <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="c_fname" name="c_name">
    </div>  
    </div>
    
    <div class="form-group row">
    <div class="col-md-12">
    <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
    </div>
    </div>
    
    <div class="form-group row">
    <div class="col-md-6">
    <label for="c_state_country" class="text-black">Thana <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="c_state_country" name="c_state_country">
    </div>
    <div class="col-md-6">
    <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
    </div>
    </div>
    <div class="form-group row mb-5">
    <div class="col-md-6">
    <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="c_email_address" name="c_email_address">
    </div>
    <div class="col-md-6">
    <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
    </div>
    
    </div>
    <div>
        <input  type="submit" class="primary-btn order-submit" style="float: right;" value="NEXT"/>
    </div>

   
   </div>
   </form>
</div>
</div>
</div>
</div>

     

@endsection