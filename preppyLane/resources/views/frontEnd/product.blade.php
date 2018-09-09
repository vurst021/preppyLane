<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('/img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('/css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('/style.css') }}">

</head>

<body>
    @include('frontEnd.partials.header')
    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="{{ asset('/img/product-img/product-big-1.jpg')}}" alt="">
                <img src="{{ asset('/img/product-img/product-big-2.jpg')}}" alt="">
                <img src="{{ asset('/img/product-img/product-big-3.jpg')}}" alt="">
            </div>
        </div>
        
        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span>mango</span>
            <a href="cart.html">
                <h2>{{ $product->name }}</h2>
            </a>
            <p class="product-price">{{ $product->presentPrice() }}</p>
            <p class="product-desc">{{ $product->description}}</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <select name="select" id="productSize" class="mr-5">
                        <option value="value">Size: XL</option>
                        <option value="value">Size: X</option>
                        <option value="value">Size: M</option>
                        <option value="value">Size: S</option>
                    </select>
                    <select name="select" id="productColor">
                        <option value="value">Color: Black</option>
                        <option value="value">Color: White</option>
                        <option value="value">Color: Red</option>
                        <option value="value">Color: Purple</option>
                    </select>
                </div>
                <!-- Cart & Favourite Box -->
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                    <!-- Favourite -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>

    </section>
    <!-- ##### Single Product Details Area End ##### -->

    @include('frontEnd.partials.footer')

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('/js/plugins.js')}}"></script>
    <!-- Classy Nav js -->
    <script src="{{ asset('/js/classy-nav.min.js')}}"></script>
    <!-- Active js -->
    <script src="{{ asset('/js/active.js')}}"></script>

</body>

</html>