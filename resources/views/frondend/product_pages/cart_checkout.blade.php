@extends('frondend.master')
@section('contain')

<div class="page-heading bg-light">
    <div class="container">
    <div class="row align-items-end">
    <div class="col-lg-7">
    <h1>Cart</h1>
    <p class="mb-4"><a href="#">Home</a> / <strong>Cart</strong></p>
    </div>
    </div>
    </div>
    </div>
    <div class="untree_co-section">
    <div class="container">
    <div class="row mb-5">
    <form class="col-md-12" method="post">
    <div class="site-blocks-table">
    <table class="table table-bordered">
    <thead>
    <tr>
    <th class="product-thumbnail">Image</th>
    <th class="product-name">Product</th>
    <th class="product-price">Price</th>
    <th class="product-quantity">Quantity</th>
    <th class="product-total">Total</th>
    <th class="product-remove">Remove</th>
    </tr>
    </thead>
    @php
       
        $cart_array = cardArray();

    @endphp



    @foreach ($cart_array as $product )
        
    @php
        $images = $product['attributes'][0];
        $images = explode('|',$images);
        $images = $images[0];
    @endphp
    
    <tbody>
    <tr>
    <td class="product-thumbnail">
    <img src="{{ asset('/product_image/'.$images) }}" alt="Image" class="img-fluid">
    </td>
    <td class="product-name">
    <h2 class="h5 text-black">{{ $product['name'] }}</h2>
    </td>
    <td >{{ $product['price'] }}&#2547;</td>
    <td>
    <div class="input-group mb-3" style="max-width: 120px;">
    <div class="input-group-prepend">
    <button class="btn btn-outline-black js-btn-minus" type="button">&minus;</button>
    </div>

    <input {{ $product['price'] }}  type="hidden" class="iprice" value="{{ $product['price'] }} " id="">

    <input name="quantity" type="text" class="form-control text-center iquantity" onchange="subTotal()" value="{{ $product['quantity'] }}" placeholder aria-label="Example text with button addon" aria-describedby="button-addon1">
    <div class="input-group-append">
    <button class="btn btn-outline-black js-btn-plus" type="button">&plus;</button>
    </div>
    </div>
    </td>
    <td class="total_price"></td>
    
    <td><a href="{{ url('/delete_cart/'.$product['id']) }}" class="btn btn-black btn-sm">X</a></td>
    </tr>

    
    
    </tbody>

    @endforeach
    </table>
    </div>
    </form>
    </div>
    <div class="row">
    <div class="col-md-6">
    <div class="row mb-5">
    <div class="col-md-6 mb-3 mb-md-0">
    <button class="btn btn-black btn-sm btn-block">Update Cart</button>
    </div>
    <div class="col-md-6">
    <button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <label class="text-black h4" for="coupon">Coupon</label>
    <p>Enter your coupon code if you have one.</p>
    </div>
    <div class="col-md-8 mb-3 mb-md-0">
    <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
    </div>
    <div class="col-md-4">
    <button class="btn btn-black">Apply Coupon</button>
    </div>
    </div>
    </div>
    <div class="col-md-6 pl-5">
    <div class="row justify-content-end">
    <div class="col-md-7">
    <div class="row">
    <div class="col-md-12 text-right border-bottom mb-5">
    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
    </div>
    </div>
    <div class="row mb-3">
    <div class="col-md-6">
    <span class="text-black">SubTotal</span>
    </div>
    <div class="col-md-6 text-right">
    <strong class="text-black">{{ Cart::getSubTotal() }}</strong>
    </div>
    </div>
    <div class="row mb-5">
    <div class="col-md-6">
    <span class="text-black">Delivary Charge</span>
    </div>
    <div class="col-md-6 text-right">
    <strong class="text-black">50</strong>
    </div>
    <div class="col-md-6">
    <span class="text-black">Total</span>
    </div>
    <div class="col-md-6 text-right">
    <strong class="text-black">{{ Cart::getTotal()+50}}</strong>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceed To Checkout</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script>
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('total_price');

        function subTotal(){

            for(i=0;i<iprice.length;i++){
                
            itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
            }

        }

        subTotal();


    </script>

@endsection