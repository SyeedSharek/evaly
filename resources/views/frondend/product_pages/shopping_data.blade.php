@extends('frondend.master')
@section('contain')

<div class="untree_co-section">
    <div class="container">
    <div class="row align-items-center mb-5">
    <div class="col-lg-8">
    <h2 class="mb-3 mb-lg-0">Shop</h2>
    </div>
    <div class="col-lg-4">
    <div class="d-flex sort align-items-center justify-content-lg-end">
    <strong class="mr-3">Sort by:</strong>
    <form action="#">
    <select class required>
    <option value>Newest Items</option>
    <option value="1">Best Selling</option>
    <option value="2">Price: Ascending</option>
    <option value="2">Price: Descending</option>
    <option value="3">Rating(High to Low)</option>
    </select>
    </form>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-3">
    <ul class="list-unstyled categories">
    <li><a href="#">New <span>2,919</span></a></li>
    <li><a href="#">Men <span>5,381</span></a></li>
    <li><a href="#">Women <span>7,119</span></a></li>
    <li><a href="#">Jewelries <span>1,012</span></a></li>
    <li><a href="#">Accessories <span>919</span></a></li>
    <li><a href="#">Shoes <span>4,344</span></a></li>
    <li><a href="#">Clothing <span>7,919</span></a></li>
    </ul>
    </div>
    <div class="col-md-9">
    <div class="row">
    <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
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
    <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
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
    <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
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
    <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
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
    <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
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
    <div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
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
    <div class="row mt-5">
    <div class="col-lg-12">
    <div class="custom-pagination">
    <ul class="list-unstyled">
    <li>
    <a href="#">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z" />
    <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
    </svg>
    </a>
    </li>
    <li class="active"><span>1</span></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
    <a href="#">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
    <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
    </svg>
    </a>
    </li>
    </ul>
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

@endsection