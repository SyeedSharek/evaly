@extends('frondend.master')

@section('contain')

@php
    $product['image']= explode('|',$product->image) 
   
@endphp





    
    
    <section class="product-details spad">
        
    <div class="container">
    <div class="row">
    <div class="col-lg-6">
    <div class="product__details__pic">
    <div class="product__details__pic__left product__thumb nice-scroll">


        @foreach ($product->image as $images )
            
        
    <a class="pt active" href="#product-1">
    <img src="{{ asset('/product_image/'.$images) }}" alt>
    </a>
    @endforeach
   
    </div>
    
    <div class="product__details__slider__content">
    <div class="product__details__pic__slider owl-carousel">

        @foreach ($product->image as $images)

      
    <img data-hash="product-1" class="product__big__img" src="{{ asset('/product_image/'.$images) }}" alt>

    @endforeach

   
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-6">
    <div class="product__details__text">
    <h3>{{ $product->name }} <span>Brand: {{ $product->brand }}</span></h3>
    <div class="rating">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <span>( 138 reviews )</span>
    </div>
    <div class="product__details__price">&#2547;{{ $product->price }} <span>&#2547;{{ $product->price }}</span></div>
    <p> {!! $product->description !!}</p>
    <div class="product__details__button">
    <div class="quantity">
    <span>Quantity:</span>
    <div class="pro-qty">
    <input type="text" value="1">
    </div>
    </div>
    <a href="" class="cart-btn"><span class="icon_bag_alt"></span> Add to cart</a>
    <ul>
    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
    <li><a href="#"><span class="icon_adjust-horiz"></span></a></li>
    </ul>
    </div>
    <div class="product__details__widget">
    <ul>
    <li>
    <span>Availability:</span>
    <div class="stock__checkbox">
    <label for="stockin">
    In Stock
    <input type="checkbox" id="stockin">
    <span class="checkmark"></span>
    </label>
    </div>
    </li>
    <li>
    <span>Available color:</span>
    <div class="color__checkbox">
    <label for="red">
    <input type="radio" name="color__radio" id="red" checked>
    <span class="checkmark"></span>
    </label>
    <label for="black">
    <input type="radio" name="color__radio" id="black">
    <span class="checkmark black-bg"></span>
    </label>
    <label for="grey">
    <input type="radio" name="color__radio" id="grey">
    <span class="checkmark grey-bg"></span>
    </label>
    </div>
    </li>
    <li>
    <span>Available size:</span>
    <div class="size__btn">
    <label for="xs-btn" class="active">
    <input type="radio" id="xs-btn">
    xs
    </label>
    <label for="s-btn">
    <input type="radio" id="s-btn">
    s
    </label>
    <label for="m-btn">
    <input type="radio" id="m-btn">
    m
    </label>
    <label for="l-btn">
    <input type="radio" id="l-btn">
    l
    </label>
    </div>
    </li>
    <li>
    <span>Promotions:</span>
    <p>Free shipping</p>
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-lg-12">
    <div class="product__details__tab">
    <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Description</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Specification</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews ( 2 )</a>
    </li>
    </ul>
    <div class="tab-content">
    <div class="tab-pane active" id="tabs-1" role="tabpanel">
    <h6>Description</h6>
    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
    Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
    voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
    consequat massa quis enim.</p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
    quis, sem.</p>
    </div>
    <div class="tab-pane" id="tabs-2" role="tabpanel">
    <h6>Specification</h6>
    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
    Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
    voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
    consequat massa quis enim.</p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
    quis, sem.</p>
    </div>
    <div class="tab-pane" id="tabs-3" role="tabpanel">
    <h6>Reviews ( 2 )</h6>
    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
    Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
    voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
    consequat massa quis enim.</p>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
    dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
    quis, sem.</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-12 text-center">
    <div class="related__title">
    <h5>RELATED PRODUCTS</h5>
    </div>
    </div>



    @foreach ($related_products as $related_product )

    @php
       $related_product['image'] = explode('|',$related_product->image);
       $images = $related_product->image[0];
    @endphp
        
    

    <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="product__item">
    <div class="product__item__pic set-bg" data-setbg="{{ asset('/product/'.$images) }}">
        <img style="width: 400px; height: 480px;" src="{{ asset('/product_image/'.$images) }}" alt="">
    <ul class="product__hover">
    <li><a href="img/product/related/rp-2.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
    </ul>
    </div>
    <div class="product__item__text">
    <h6><a href="#">{{ $related_product->name }}</a></h6>
    <div class="rating">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </div>
    <div class="product__price">&#2547;{{ $related_product->price }}</div>
    </div>
    </div>
    </div>
    @endforeach
   
   
    </div>
    </div>
    </section>
 
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
  
        gtag('config', 'UA-23581568-13');
    </script>

@endsection