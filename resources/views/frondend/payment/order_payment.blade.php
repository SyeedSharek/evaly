@extends('frondend.master')
@section('contain')

<div class="page-heading bg-light">
    <div class="container">
     <div class="row align-items-end">
     <div class="col-lg-7">
     <h1>PAYMENT</h1>
     
     </div>
     </div>
     </div>
  </div>

  <div class="untree_co-section">
    <div class="container">
    
    <div class="row">
    
    

  <div class="col-md-12">
    <div class="row mb-5">
    <div class="col-md-12">
    <h2 class="h3 mb-3 text-black">Coupon Code</h2>
    <div class="p-3 p-lg-5 border">
    <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
    <div class="input-group w-75">
    <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
    <div class="input-group-append">
    <button class="btn btn-black btn-sm" type="button" id="button-addon2">Apply</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row mb-5">
    <div class="col-md-12">
    <h2 class="h3 mb-3 text-black">Your Order</h2>
    <div class="p-3 p-lg-5 border">
    <table class="table site-block-order-table mb-5">
    <thead>
    <th>Product</th>
    <th>Total</th>
    </thead>
    <tbody>
        @foreach ($cart_array as $cart)
            
        
    <tr>
    <td>{{ $cart['name'] }} <strong class="mx-2">x</strong> {{ $cart['quantity'] }}</td>
    <td>{{ Cart::get($cart['id'])->getPriceSum() }} &#2547;</td>
    </tr>
    @endforeach
    
    <tr>
      <td class="text-black font-weight-bold"><strong>Delevary Charge</strong></td>
      <td class="text-black font-weight-bold"><strong>50 &#2547;</strong></td>
      </tr>
    
    <tr>
    <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
    <td class="text-black font-weight-bold"><strong>{{ Cart::getTotal() +50}} &#2547;</strong></td>
    </tr>
    
    </tbody>
    </table>

    <form action="{{ url('/order_place') }}" method="POST">
      @csrf

      <h3 >Payment Method</h3>
      <br>


      <div class="payment-method">
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-1" value="cash" required>
            <label for="payment-1">
                <span></span>
                Cash On Delevary
            </label>
            <div class="caption">
                <p>You can payment after receive your parcle</p>
            </div>
        </div>
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-2" value="bikash" required>
            <label for="payment-2">
                <span></span>
                Bikash
            </label>
            <div class="caption">
                <p>You can payment by this Bikash number 01832246775</p>
            </div>
        </div>
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-3" value="nogot" required>
            <label for="payment-3">
                <span></span>
                Nogot
            </label>
            <div class="caption">
                <p>You can payment by this Nogot number 01832246775</p>
            </div>
        </div>
    </div>

      
      
    <div class="form-group">
    <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='thankyou.html'">Place Order</button>
    </div> 

  </form>

    
    </div>
    </div>
    </div>
    </div>
    

</div>
</div>
</div>




    
 
   
@endsection