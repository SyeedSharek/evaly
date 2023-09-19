@extends('frondend.master')
@section('contain')

  
    
    <section class="shop spad">
    <div class="container">
    <div class="row">
    <div class="col-lg-3 col-md-3">
    <div class="shop__sidebar">
    <div class="sidebar__categories">
    <div class="section-title">
    <h4>Categories</h4>
    </div>
    <div class="categories__accordion">
    <div class="accordion" id="accordionExample">

        @foreach ($categories as $category )
            <div class="card">
           <div class="card-heading active">
              <a href="" data-toggle="collapse" data-target="#collapseOne">{{ $category->name }}</a>
           </div>
             <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
             <div class="card-body">
               <ul>
                @foreach ($category->subcategories as $subCategory)
                    
                
                 <li><a href="{{ url('/subcat_by_id/'.$subCategory->id) }}">{{ $subCategory->name }}</a></li>

                 @endforeach
                 
               </ul>
          </div>
       </div>

    </div>
   
     @endforeach
   

    </div>
    </div>
    </div>
    <div class="sidebar__filter">
    <div class="section-title">
    <h4>Shop by price</h4>
    </div>
    <div class="filter-range-wrap">
    <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="99"></div>
    <div class="range-slider">
    <div class="price-input">
    <p>Price:</p>
    <input type="text" id="minamount">
    <input type="text" id="maxamount">
    </div>
    </div>
    </div>
    <a href="#">Filter</a>
    </div>
    <div class="sidebar__sizes">
    <div class="section-title">
    <h4>Shop by size</h4>
    </div>
    <div class="size__list">
    <label for="xxs">
    xxs
    <input type="checkbox" id="xxs">
    <span class="checkmark"></span>
    </label>
    <label for="xs">
    xs
    <input type="checkbox" id="xs">
    <span class="checkmark"></span>
    </label>
    <label for="xss">
    xs-s
    <input type="checkbox" id="xss">
    <span class="checkmark"></span>
    </label>
    <label for="s">
    s
    <input type="checkbox" id="s">
    <span class="checkmark"></span>
    </label>
    <label for="m">
    m
    <input type="checkbox" id="m">
    <span class="checkmark"></span>
    </label>
    <label for="ml">
    m-l
    <input type="checkbox" id="ml">
    <span class="checkmark"></span>
    </label>
    <label for="l">
    l
    <input type="checkbox" id="l">
    <span class="checkmark"></span>
    </label>
    <label for="xl">
    xl
    <input type="checkbox" id="xl">
    <span class="checkmark"></span>
    </label>
    </div>
    </div>
    <div class="sidebar__color">
    <div class="section-title">
    <h4>Shop by size</h4>
    </div>
    <div class="size__list color__list">
    <label for="black">
    Blacks
    <input type="checkbox" id="black">
    <span class="checkmark"></span>
    </label>
    <label for="whites">
    Whites
    <input type="checkbox" id="whites">
    <span class="checkmark"></span>
    </label>
    <label for="reds">
    Reds
    <input type="checkbox" id="reds">
    <span class="checkmark"></span>
    </label>
    <label for="greys">
    Greys
    <input type="checkbox" id="greys">
    <span class="checkmark"></span>
    </label>
    <label for="blues">
    Blues
    <input type="checkbox" id="blues">
    <span class="checkmark"></span>
    </label>
    <label for="beige">
    Beige Tones
    <input type="checkbox" id="beige">
    <span class="checkmark"></span>
    </label>
    <label for="greens">
    Greens
    <input type="checkbox" id="greens">
    <span class="checkmark"></span>
    </label>
    <label for="yellows">
    Yellows
    <input type="checkbox" id="yellows">
    <span class="checkmark"></span>
    </label>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-9 col-md-9">
    <div class="row">

    @foreach ($products as $product )

    @php
    $product['image'] = explode('|',$product->image);
    $images = $product->image[0];
    
    @endphp
            
        
    <div class="col-lg-4 col-md-6">
    <div class="product__item">
       
            
        
    <div class="product__item__pic set-bg">
        <a href="{{ url('/view_product/'.$product->id) }}" >
         <img  style="width: 500px; height:600px;" src="{{ asset('/product_image/'.$images) }}" alt="Image" class="img-fluid">
        </a>
        

        
    <div class="label new">New</div>
    <ul class="product__hover">
    <li><a href="img/shop/shop-1.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
    <li><a href="#"><span class="icon_bag_alt"></span></a></li>
    </ul>
    </div>
    <div class="product__item__text">
    <h6><a href="{{ url('/view_product/'.$product->id) }}">{{ $product->name }}</a></h6>
    <div class="rating">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    </div>
    <div class="product__price">{{ $product->price }}&#2547;</div>
    <div>
        <form action="{{ url('/add_to_cart/') }}" method="POST">
            @csrf
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="id" value="{{ $product->id }}">


         <button href="" class="cart-btn"><i class="fa fa shoping-cart"></i> Add to cart</button>

         </form>
    </div>
    
    </div>
    

    </div>
    </div>
    @endforeach
    
    

    <div class="col-lg-12 text-center">
    <div class="pagination__option">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#"><i class="fa fa-angle-right"></i></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    
<div class="untree_co-section">
    <div class="container">
    <div class="row mb-5 align-items-center">
    <div class="col-md-6">
    <h2>Popular Items</h2>
    </div>
    <div class="col-sm-6 carousel-nav text-sm-right">
    <a href="#" class="prev js-custom-prev-v2">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
    <path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z" />
    <path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z" />
    </svg>
    </a>
    <a href="#" class="next js-custom-next-v2">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
    <path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z" />
    <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
    </svg>
    </a>
    </div>
    </div> 
    <div class="owl-3-slider owl-carousel">
    <div class="item">
    <div class="product-item">
    <a href="shop-single.html" class="product-img">
    <span class="custom-badge new">New</span>
    <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">
    </a>
    <h3 class="title"><a href="#">Kiko Linen Slip Dress, Brown</a></h3>
    <div class="price">
    <span>£69.00</span>
    </div>
    </div>
    </div> 
    <div class="item">
    <div class="product-item">
    <a href="shop-single.html" class="product-img">
    <span class="custom-badge sale">Sale</span>
    <img src="images/cloth_2.jpg" alt="Image" class="img-fluid">
    </a>
    <h3 class="title"><a href="#">Sleeve Dress, White</a></h3>
    <div class="price">
    <del>£99.00</del> &mdash; <span>£69.00</span>
    </div>
    </div>
    </div> 
    <div class="item">
    <div class="product-item">
    <a href="shop-single.html" class="product-img">
    <img src="images/watch_1.jpg" alt="Image" class="img-fluid">
    </a>
    <h3 class="title"><a href="#">Hodina Watch</a></h3>
    <div class="price">
    <span>£29.00</span>
    </div>
    </div>
    </div> 
    <div class="item">
    <div class="product-item">
    <a href="shop-single.html" class="product-img">
    <img src="images/shoe_2.jpg" alt="Image" class="img-fluid">
    </a>
    <h3 class="title"><a href="#">Triangle Low White-Black</a></h3>
    <div class="price">
    <span>£29.00</span>
    </div>
    </div>
    </div> 
    <div class="item">
    <div class="product-item">
    <a href="shop-single.html" class="product-img">
    <span class="custom-badge sale">Sale</span>
    <img src="images/cloth_3.jpg" alt="Image" class="img-fluid">
    </a>
    <h3 class="title"><a href="#">Kid Dress, White</a></h3>
    <div class="price">
    <del>£99.00</del> &mdash; <span>£69.00</span>
    </div>
    </div>
    </div> 
    <div class="item">
    <div class="product-item">
    <a href="shop-single.html" class="product-img">
    <span class="custom-badge sale">Sale</span>
    <img src="images/shoe_1.jpg" alt="Image" class="img-fluid">
    </a>
    <h3 class="title"><a href="#">Lady Shoes, Brown</a></h3>
    <div class="price">
    <del>£99.00</del> &mdash; <span>£69.00</span>
    </div>
    </div>
    </div> 
    </div>
    </div> 
    </div> 
    
    </section>

@endsection