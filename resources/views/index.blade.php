@extends("includes.app")
@section('content')
<!--Swiper-->
<section class="section">
    <div class="container-wide">
        <div class="swiper-container swiper-slider swiper-classic-slider" data-swiper='{"autoplay":{"delay":5000}}'>
            <div class="swiper-wrapper">


                <div class="swiper-slide swiper-classic-slide-3 context-dark"
                    data-slide-bg="{{ asset('abasas/images/slide/SewingMachine.jpg') }}">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row text-center justify-content-center justify-content-lg-start">
                                <div class="col-lg-7 offset-lg-5 col-md-8 col-sm-10">
                                    <h2 class="h1" data-caption-animate="fadeInUp" data-caption-delay="100">2020 <br>
                                        beauty trend</h2>
                                    <p class="lead box-570 block-center" data-caption-animate="fadeInUp"
                                        data-caption-delay="250">Whether you’re new to skin care or are ready to take
                                        your routine to the next level, we’re here to guide you every step of the way.
                                    </p><a class="btn btn-primary" href="products-grid.html"
                                        data-caption-animate="fadeInUp" data-caption-delay="450">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="swiper-slide swiper-classic-slide-3 context-dark"
                    data-slide-bg="{{ asset('abasas/images/slide/ThreadsBundle.jpg') }}">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row text-center justify-content-center justify-content-lg-start">
                                <div class="col-lg-7 offset-lg-5 col-md-8 col-sm-10">
                                    <h2 class="h1" data-caption-animate="fadeInUp" data-caption-delay="100">2020 <br>
                                        beauty trend</h2>
                                    <p class="lead box-570 block-center" data-caption-animate="fadeInUp"
                                        data-caption-delay="250">Whether you’re new to skin care or are ready to take
                                        your routine to the next level, we’re here to guide you every step of the way.
                                    </p><a class="btn btn-primary" href="products-grid.html"
                                        data-caption-animate="fadeInUp" data-caption-delay="450">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="swiper-slide" data-slide-bg="{{ asset('abasas/images/slide/LogisticsShip.jpg') }}">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-8 col-sm-10 ">
                                    <h2 class="h1" data-caption-animate="fadeInUp" data-caption-delay="100">happier skin
                                        with hemp</h2>
                                    <p class="lead box-570" data-caption-animate="fadeInUp" data-caption-delay="250">
                                        Prevent aging before it stars with <a class="font-italic"
                                            href="#">nourishing</a>, natural <a class="font-italic" href="#">hemp
                                            seed</a> oil and <a class="font-italic" href="#">pomegranate</a> probiotie
                                        ferment</p><a class="btn btn-primary" href="products-grid.html"
                                        data-caption-animate="fadeInUp" data-caption-delay="450">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide swiper-classic-slide-3 context-dark"
                    data-slide-bg="{{ asset('abasas/images/slide/LogisticsTrucks.jpg') }}">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row text-center justify-content-center justify-content-lg-start">
                                <div class="col-lg-7 offset-lg-5 col-md-8 col-sm-10">
                                    <h2 class="h1" data-caption-animate="fadeInUp" data-caption-delay="100">2020 <br>
                                        beauty trend</h2>
                                    <p class="lead box-570 block-center" data-caption-animate="fadeInUp"
                                        data-caption-delay="250">Whether you’re new to skin care or are ready to take
                                        your routine to the next level, we’re here to guide you every step of the way.
                                    </p><a class="btn btn-primary" href="products-grid.html"
                                        data-caption-animate="fadeInUp" data-caption-delay="450">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Swiper Pagination-->
            <div class="swiper-pagination"></div>
            <!--Swiper Navigation-->
            <div class="swiper-button-prev">
                <svg class="icon-svg" width="12" height="20" viewbox="0 0 12 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.5 0L12 1.42857L3 10L12 18.5714L10.5 20L0 10L10.5 0Z"></path>
                </svg>
            </div>
            <div class="swiper-button-next">
                <svg class="icon-svg" width="12" height="20" viewbox="0 0 12 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.5 0L0 1.42857L9 10L0 18.5714L1.5 20L12 10L1.5 0Z"></path>
                </svg>
            </div>
        </div>
    </div>
</section>





{{-- 
<div class="jumbotron jumbotron-fluid mt-0 mb-0">
    <div class="container">
        <h2 class="display-4">Fluid jumbotron</h2>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>

<div class="jumbotron mt-0 mb-0" style="
background-image: url({{ asset('abasas/images/covid-banner.jpg') }});
">
    <h2 class="display-4 " style="text-align: center">COVID 19 IMPACT</h2>
    <p style="color: black; text-align: center"> “Our industry has come to a halt and with closures in the retail
        sectors manufacturing has been hit due to order cancellations and plant closures.” <br> “We have sprung back
        into operation with fresh innovations and vigour as we steam ahead with our manufacturing without the lag!”</p>
</div>


<div class="jumbotron jumbotron-fluid mt-0 mb-0">
    <div class="container">
        <h2 class="display-4" style="text-align: end">Fluid jumbotron</h2>
        <p class="lead" style="text-align: end">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div> --}}

<img src="{{ asset("abasas/images/banner (1).png") }}" width="100%" style="padding: 0; margin:0;" alt="covid19">

<!-- About-->
<section class="section section-md bg-transparent">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10 text-center">
                <h2 class="h3">Manufacturing Cycle</h2>
                <p class="lead">Taylored Manufacturing through our Composite Manufacturing Cycle</p>


            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row">

            <div class="col-12 col-sm-6 col-md-2 offset-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                <nav class="navbar ">
                    <a class="navbar-brand text-light"><img
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-new-process-discover.svg"
                            alt="ic-new-process-design"></a>
                    {{-- <div class="d-none d-md-block">----------------</div> --}}
                </nav>

                <h6 class="card-title font-weight-bold"> Product Design & Development </h6>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="col-12 col-sm-6 col-md-2 aos-init" data-aos="fade-up" data-aos-delay="200">


                <nav class="navbar ">
                    <a class="navbar-brand text-light"><img
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-new-process-design.svg"
                            alt="ic-new-process-design"></a>
                    {{-- <div class="d-none d-md-block">----------------</div> --}}
                </nav>

                <h6 class="card-title font-weight-bold">Pattern Development </h6>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>



            <div class="col-12 col-sm-6 col-md-2 aos-init" data-aos="fade-up" data-aos-delay="300">
                <nav class="navbar ">
                    <a class="navbar-brand text-light"><img
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-new-process-build.svg"
                            alt="ic-new-process-design"></a>
                    {{-- <div class="d-none d-md-block">----------------</div> --}}
                </nav>

                <h6 class="card-title font-weight-bold">Sampling</h6>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>



            <div class="col-12 col-sm-6 col-md-2 aos-init" data-aos="fade-up" data-aos-delay="300">
                <nav class="navbar ">
                    <a class="navbar-brand text-light"><img
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-new-process-build.svg"
                            alt="ic-new-process-design" height="300px"></a>
                    {{-- <div class="d-none d-md-block">----------------</div> --}}
                </nav>


                <h6 class="card-title font-weight-bold">Manufacturing</h6>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit.. </p>
            </div>


            <div class="col-12 col-sm-6 col-md-2 aos-init " data-aos="fade-up" data-aos-delay="400">


                <nav class="navbar ">
                    <a class="navbar-brand text-light"><img
                            src="https://d1i2cp4a5c819e.cloudfront.net/wp-content/uploads/2020/02/ic-new-process-deliver.svg"
                            alt="ic-new-process-deliver" height="30px"></a>

                </nav>

                <h6 class="card-title font-weight-bold">Shipping </h6>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit.. </p>
            </div>







        </div>
    </div>
</section>




<img src="{{ asset("abasas/images/banner (2).png") }}" width="100%"  alt="covid19">



<section id="more-services" class="more-services">
    <div class="container">

        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">

                <div class="card aos-init aos-animate" style="background-image: url(https://abasas.tech/img/more-services-1.jpg);" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Woven</a></h5>
                        <p class="card-text"> 
                            
<b>Lines:</b> 26 lines  <br>
<b>Capacity:</b> 30,000 pieces per day  <br>
<b>Samples:</b> 2,000 per month (80 daily) <br>
<b>Marker & Sample:</b> CAD system <br>
<b>Cutting, Sewing & Finishing:</b> 520k monthly  <br>
<b>Print & Embroidery:</b> In house printing facility <br>
Brother, Juki, Pegasus, Auto Spreader with (Gerber Technology Vibemac <br>


                        </p>
                        <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="card aos-init aos-animate" style="background-image: url(https://abasas.tech/img/more-services-2.jpg);" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Knit</a></h5>
                        <p class="card-text">
                            
<b>Lines:</b> 30 lines <br>
<b>Capacity:</b> 34,600 per day <br>
<b>Samples:</b> 2,050 per month  <br>
<b>Dyeing & Finishing:</b> 30 Sets of machines <br>
<b>Dyeing & Finishing:</b> 20 metric tonnes per day  <br>
<b>Knitting:</b> 23 sets of machines
                        </p>
                        <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="card aos-init" style="background-image: url(https://abasas.tech/img/more-services-3.jpg);" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                        {{-- <h5>h5 class="card-title"><a href="">A cloud based document management platform</a></h5> --}}
                        <p class="card-text">
                            Outerwear 
Underwear <br>
Tops, T’s, Polos, Vests etc <br>
Denims <br>
Lounge wear <br>
Sweater, Fleece <br>
Active wear  <br>

                        </p>
                        <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="card aos-init" style="background-image: url(https://abasas.tech/img/more-services-4.jpg);" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Home Textiles</a></h5>
                        <p class="card-text">
                            
                    <b> Spinning: </b>
                    150,000 spindles, 45 tonnes of yarn daily capacity    <br>
                    <b>Weaving:</b>
                    With Rapier, Air jet & Shuttle procedure looms capable of 100% Cotton, 100% Polyester / Blended fabrics  <br>
                        <b>Confectioning: </b>
                    Equipped with our own stitching and packing unit with processing capacity of 1,500,000 meters (1.5 million meters) fabric per month

                        </p>
                        <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<img src="{{ asset("abasas/images/banner (3).png") }}" width="100%"  alt="covid19">

<!-- About-->
<section class="section section-md bg-transparent">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10 text-center">
                <h2 class="h3">Let you sparkle</h2>
                <p class="lead">We are offering you the unique goods because our product is the real treasure. If you
                    are a true fan, you’ll love it. We have a tremendous variety in comparison to all of our
                    competitors.</p>

                <a class="btn btn-primary" href="about-us.html" data-caption-animate="fadeInUp"
                    data-caption-delay="450">About Us</a>



            </div>
        </div>
    </div>
</section>




<!-- About-->
<section class="section section-md bg-transparent">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10 text-center">
                <h2 class="h3">Let you sparkle</h2>
                <p class="lead">We are offering you the unique goods because our product is the real treasure. If you
                    are a true fan, you’ll love it. We have a tremendous variety in comparison to all of our
                    competitors.</p><a class="btn btn-primary" href="about-us.html" data-caption-animate="fadeInUp"
                    data-caption-delay="450">About Us</a>
            </div>
        </div>
    </div>
</section>



<!-- Category-->
<section class="section section-md bg-transparent position-relative">
    <svg class="bg-decor bg-decor-1" width="1920" height="1388" viewbox="0 0 1920 1388" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
            d="M2104.84 573C2104.84 816.019 1951.38 1065.59 1755.84 1173C1536.09 1293.71 973.54 1406.88 724.851 1385.35C560.885 1371.15 -276 1244.64 -276 728.5C-276 212.363 -77.5325 0 438.5 0C954.532 0 2104.84 56.8635 2104.84 573Z"
            fill="#FFEEF2"></path>
    </svg>
    <div class="container-wide">
        <div class="row row-40 justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <article class="box-category-classic">
                    <figure class="box-category-classic-figure"><a class="link-image" href="products-grid.html"><img
                                src="images/home-04-590x598.jpg" alt="" width="590" height="598"></a></figure>
                    <div class="box-category-classic-caption">
                        <h3 class="box-category-classic-category">Skincare</h3>
                        <h4 class="box-category-classic-title"><a href="products-grid.html">Toners</a></h4>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6">
                <article class="box-category-classic">
                    <figure class="box-category-classic-figure"><a class="link-image" href="products-grid.html"><img
                                src="images/home-05-590x598.jpg" alt="" width="590" height="598"></a></figure>
                    <div class="box-category-classic-caption">
                        <h3 class="box-category-classic-category">Makeup</h3>
                        <h4 class="box-category-classic-title"><a href="products-grid.html">Cleansers</a></h4>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-sm-6">
                <article class="box-category-classic">
                    <figure class="box-category-classic-figure"><a class="link-image" href="products-grid.html"><img
                                src="images/home-06-590x598.jpg" alt="" width="590" height="598"></a></figure>
                    <div class="box-category-classic-caption">
                        <h3 class="box-category-classic-category">Hair &amp; Body</h3>
                        <h4 class="box-category-classic-title"><a href="products-grid.html">Dryness</a></h4>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Care-->
<section class="section section-md bg-transparent position-relative">
    <svg class="bg-decor bg-decor-2" width="703" height="716" viewbox="0 0 703 716" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
            d="M576.149 245.486C630.363 339.387 629.64 506.443 515.386 572.408C401.132 638.372 166.248 538.762 100.444 424.785C34.6395 310.809 177.394 142.877 315.908 68.698C430.162 2.73351 510.345 131.509 576.149 245.486Z"
            fill="#FB9AB1"></path>
    </svg>
    <div class="container-wide">
        <div class="row row-40">
            <div class="col-lg-7"><img src="images/home-07-1095x700.jpg" alt="" width="1095" height="700">
            </div>
            <div class="col-lg-5">
                <div class="box-1">
                    <h2>Skin care tips & trends</h2>
                    <p class="big">The perfect products for your skin type, the best ingredients for your skin concerns
                        and everything else you want and need to know about skin care.</p>
                    <ul class="list-marked big list-spacing-01">
                        <li>Free shipping over $30</li>
                        <li>Free & easy returns</li>
                        <li>Free ice cream</li>
                    </ul><a class="btn btn-primary" href="products-grid.html">shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop-->
<section class="section section-md bg-transparent">
    <div class="container">
        <h2 class="h4 text-line">shop bestsellers</h2>
    </div>
    <div class="container-wide">
        <div class="owl-carousel owl-theme owl-carousel-style-2" data-items="1" data-sm-items="2" data-md-items="3"
            data-lg-items="3" data-xl-items="4" data-xxl-items="5" data-stage-padding="10"
            data-owl="{&quot;dots&quot;:true,&quot;nav&quot;:false,&quot;autoplayTimeout&quot;:3500,&quot;margin&quot;:20,&quot;stagePadding&quot;:1}">
            <article class="product-item-boxed">
                <ul class="product-item-badges">
                    <li class="product-item-badge">New</li>
                </ul>
                <figure class="product-item-boxed-figure"><img src="images/shop/shop-01-346x346.png" alt="" width="346"
                        height="346"><a class="product-item-boxed-link-like" href="#">
                        <svg class="icon-svg-outline" width="20" height="19" viewbox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 17L8.74 15.7826C4.06 11.7826 1 9.08696 1 5.78261C1 3.08696 3.16 1 5.95 1C7.48 1 9.01 1.69565 10 2.82609C10.99 1.69565 12.52 1 14.05 1C16.84 1 19 3.08696 19 5.78261C19 9.08696 15.94 11.7826 11.26 15.7826L10 17Z"
                                stroke-width="2" stroke-linecap="round"></path>
                        </svg></a><a class="btn btn-primary" href="#">Add to cart</a>
                </figure>
                <div class="product-item-boxed-caption">
                    <h4 class="product-item-boxed-title"><a href="single-product.html">Aura Cacia Organic Natural</a>
                    </h4>
                    <div class="product-item-boxed-price">$45</div>
                </div>
            </article>
            <article class="product-item-boxed">
                <figure class="product-item-boxed-figure"><img src="images/shop/shop-02-346x346.png" alt="" width="346"
                        height="346"><a class="product-item-boxed-link-like" href="#">
                        <svg class="icon-svg-outline" width="20" height="19" viewbox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 17L8.74 15.7826C4.06 11.7826 1 9.08696 1 5.78261C1 3.08696 3.16 1 5.95 1C7.48 1 9.01 1.69565 10 2.82609C10.99 1.69565 12.52 1 14.05 1C16.84 1 19 3.08696 19 5.78261C19 9.08696 15.94 11.7826 11.26 15.7826L10 17Z"
                                stroke-width="2" stroke-linecap="round"></path>
                        </svg></a><a class="btn btn-primary" href="#">Add to cart</a>
                </figure>
                <div class="product-item-boxed-caption">
                    <h4 class="product-item-boxed-title"><a href="single-product.html">Babyganics Alcohol-Free
                            Foaming</a></h4>
                    <div class="product-item-boxed-prices">
                        <div class="product-item-boxed-price">$59</div>
                        <div class="product-item-boxed-price-old">$66</div>
                    </div>
                </div>
            </article>
            <article class="product-item-boxed">
                <figure class="product-item-boxed-figure"><img src="images/shop/shop-03-346x346.png" alt="" width="346"
                        height="346"><a class="product-item-boxed-link-like" href="#">
                        <svg class="icon-svg-outline" width="20" height="19" viewbox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 17L8.74 15.7826C4.06 11.7826 1 9.08696 1 5.78261C1 3.08696 3.16 1 5.95 1C7.48 1 9.01 1.69565 10 2.82609C10.99 1.69565 12.52 1 14.05 1C16.84 1 19 3.08696 19 5.78261C19 9.08696 15.94 11.7826 11.26 15.7826L10 17Z"
                                stroke-width="2" stroke-linecap="round"></path>
                        </svg></a><a class="btn btn-primary" href="#">Add to cart</a>
                </figure>
                <div class="product-item-boxed-caption">
                    <h4 class="product-item-boxed-title"><a href="single-product.html">Coconoil Certified Virgin
                            Organic</a></h4>
                    <div class="product-item-boxed-price">$77 - $88</div>
                </div>
            </article>
            <article class="product-item-boxed">
                <figure class="product-item-boxed-figure"><img src="images/shop/shop-04-346x346.png" alt="" width="346"
                        height="346"><a class="product-item-boxed-link-like" href="#">
                        <svg class="icon-svg-outline" width="20" height="19" viewbox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 17L8.74 15.7826C4.06 11.7826 1 9.08696 1 5.78261C1 3.08696 3.16 1 5.95 1C7.48 1 9.01 1.69565 10 2.82609C10.99 1.69565 12.52 1 14.05 1C16.84 1 19 3.08696 19 5.78261C19 9.08696 15.94 11.7826 11.26 15.7826L10 17Z"
                                stroke-width="2" stroke-linecap="round"></path>
                        </svg></a><a class="btn btn-primary" href="#">Add to cart</a>
                </figure>
                <div class="product-item-boxed-caption">
                    <h4 class="product-item-boxed-title"><a href="single-product.html">Eminence Organic Skincare
                            Bearberry</a></h4>
                    <div class="product-item-boxed-price">$95 - $99</div>
                </div>
            </article>
            <article class="product-item-boxed">
                <figure class="product-item-boxed-figure"><img src="images/shop/shop-05-346x346.png" alt="" width="346"
                        height="346"><a class="product-item-boxed-link-like" href="#">
                        <svg class="icon-svg-outline" width="20" height="19" viewbox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 17L8.74 15.7826C4.06 11.7826 1 9.08696 1 5.78261C1 3.08696 3.16 1 5.95 1C7.48 1 9.01 1.69565 10 2.82609C10.99 1.69565 12.52 1 14.05 1C16.84 1 19 3.08696 19 5.78261C19 9.08696 15.94 11.7826 11.26 15.7826L10 17Z"
                                stroke-width="2" stroke-linecap="round"></path>
                        </svg></a><a class="btn btn-primary" href="#">Add to cart</a>
                </figure>
                <div class="product-item-boxed-caption">
                    <h4 class="product-item-boxed-title"><a href="single-product.html">JASON Kids Only! Daily
                            Detangling</a></h4>
                    <div class="product-item-boxed-price">$120</div>
                </div>
            </article>
            <article class="product-item-boxed">
                <ul class="product-item-badges">
                    <li class="product-item-badge">New</li>
                </ul>
                <figure class="product-item-boxed-figure"><img src="images/shop/shop-06-346x346.png" alt="" width="346"
                        height="346"><a class="product-item-boxed-link-like" href="#">
                        <svg class="icon-svg-outline" width="20" height="19" viewbox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 17L8.74 15.7826C4.06 11.7826 1 9.08696 1 5.78261C1 3.08696 3.16 1 5.95 1C7.48 1 9.01 1.69565 10 2.82609C10.99 1.69565 12.52 1 14.05 1C16.84 1 19 3.08696 19 5.78261C19 9.08696 15.94 11.7826 11.26 15.7826L10 17Z"
                                stroke-width="2" stroke-linecap="round"></path>
                        </svg></a><a class="btn btn-primary" href="#">Add to cart</a>
                </figure>
                <div class="product-item-boxed-caption">
                    <h4 class="product-item-boxed-title"><a href="single-product.html">Natural Anti Aging Facial Mud
                            Mask</a></h4>
                    <div class="product-item-boxed-price">$60</div>
                </div>
            </article>
            <article class="product-item-boxed">
                <ul class="product-item-badges">
                    <li class="product-item-badge">New</li>
                </ul>
                <figure class="product-item-boxed-figure"><img src="images/shop/shop-07-346x346.png" alt="" width="346"
                        height="346"><a class="product-item-boxed-link-like" href="#">
                        <svg class="icon-svg-outline" width="20" height="19" viewbox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 17L8.74 15.7826C4.06 11.7826 1 9.08696 1 5.78261C1 3.08696 3.16 1 5.95 1C7.48 1 9.01 1.69565 10 2.82609C10.99 1.69565 12.52 1 14.05 1C16.84 1 19 3.08696 19 5.78261C19 9.08696 15.94 11.7826 11.26 15.7826L10 17Z"
                                stroke-width="2" stroke-linecap="round"></path>
                        </svg></a><a class="btn btn-primary" href="#">Add to cart</a>
                </figure>
                <div class="product-item-boxed-caption">
                    <h4 class="product-item-boxed-title"><a href="single-product.html">Physicians Formula Organic
                            Wear</a></h4>
                    <div class="product-item-boxed-prices">
                        <div class="product-item-boxed-price">$79</div>
                        <div class="product-item-boxed-price-old">$85</div>
                    </div>
                </div>
            </article>
            <article class="product-item-boxed">
                <figure class="product-item-boxed-figure"><img src="images/shop/shop-08-346x346.png" alt="" width="346"
                        height="346"><a class="product-item-boxed-link-like" href="#">
                        <svg class="icon-svg-outline" width="20" height="19" viewbox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 17L8.74 15.7826C4.06 11.7826 1 9.08696 1 5.78261C1 3.08696 3.16 1 5.95 1C7.48 1 9.01 1.69565 10 2.82609C10.99 1.69565 12.52 1 14.05 1C16.84 1 19 3.08696 19 5.78261C19 9.08696 15.94 11.7826 11.26 15.7826L10 17Z"
                                stroke-width="2" stroke-linecap="round"></path>
                        </svg></a><a class="btn btn-primary" href="#">Add to cart</a>
                </figure>
                <div class="product-item-boxed-caption">
                    <h4 class="product-item-boxed-title"><a href="single-product.html">Raw Cocoa Butter</a></h4>
                    <div class="product-item-boxed-price">$90 - $110</div>
                </div>
            </article>
            <article class="product-item-boxed">
                <figure class="product-item-boxed-figure"><img src="images/shop/shop-09-346x346.png" alt="" width="346"
                        height="346"><a class="product-item-boxed-link-like" href="#">
                        <svg class="icon-svg-outline" width="20" height="19" viewbox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 17L8.74 15.7826C4.06 11.7826 1 9.08696 1 5.78261C1 3.08696 3.16 1 5.95 1C7.48 1 9.01 1.69565 10 2.82609C10.99 1.69565 12.52 1 14.05 1C16.84 1 19 3.08696 19 5.78261C19 9.08696 15.94 11.7826 11.26 15.7826L10 17Z"
                                stroke-width="2" stroke-linecap="round"></path>
                        </svg></a><a class="btn btn-primary" href="#">Add to cart</a>
                </figure>
                <div class="product-item-boxed-caption">
                    <h4 class="product-item-boxed-title"><a href="single-product.html">SHANY Professional Makeup Kit</a>
                    </h4>
                    <div class="product-item-boxed-price">$35 - $40</div>
                </div>
            </article>
            <article class="product-item-boxed">
                <figure class="product-item-boxed-figure"><img src="images/shop/shop-10-346x346.png" alt="" width="346"
                        height="346"><a class="product-item-boxed-link-like" href="#">
                        <svg class="icon-svg-outline" width="20" height="19" viewbox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 17L8.74 15.7826C4.06 11.7826 1 9.08696 1 5.78261C1 3.08696 3.16 1 5.95 1C7.48 1 9.01 1.69565 10 2.82609C10.99 1.69565 12.52 1 14.05 1C16.84 1 19 3.08696 19 5.78261C19 9.08696 15.94 11.7826 11.26 15.7826L10 17Z"
                                stroke-width="2" stroke-linecap="round"></path>
                        </svg></a><a class="btn btn-primary" href="#">Add to cart</a>
                </figure>
                <div class="product-item-boxed-caption">
                    <h4 class="product-item-boxed-title"><a href="single-product.html">Vitamin C Serum</a></h4>
                    <div class="product-item-boxed-price">$18</div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Advantages-->
<section class="section section-xs">
    <div class="container-wide">
        <div class="bg-primary-lighten section-xl position-relative oh">
            <svg class="bg-decor bg-decor-3" width="435" height="408" viewbox="0 0 435 408" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M203.619 405.463C116.265 404.831 0.490464 336.214 1.25926 229.963C2.02806 123.712 167.038 1.18749 273.068 1.95468C379.098 2.72188 437.551 170.343 432.594 296.794C431.825 403.045 309.649 406.23 203.619 405.463Z"
                    fill="#FB9AB1"></path>
            </svg>
            <div class="container">
                <div class="row row-40">
                    <div class="col-lg-8">
                        <h2>Beauty & body products</h2>
                        <p class="lead box-550">We’re on a mission to build a new type of company — one that makes it
                            easier and more fun for women to do it all</p>
                        <div class="row row-35 box-550">
                            <div class="col-sm-6 col-auto">
                                <div class="unit align-items-center">
                                    <div class="unit-left">
                                        <svg class="icon-svg-outline text-primary" width="26" height="24"
                                            viewbox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.9995 1L15.6937 9.2918H24.4122L17.3588 14.4164L20.0529 22.7082L12.9995 17.5836L5.94609 22.7082L8.64026 14.4164L1.58683 9.2918H10.3053L12.9995 1Z"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="unit-right">
                                        <h5 class="text-style-2">TSA-Approved</h5>
                                    </div>
                                </div>
                                <div class="unit align-items-center">
                                    <div class="unit-left">
                                        <svg class="icon-svg-outline text-primary" width="26" height="24"
                                            viewbox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.9995 1L15.6937 9.2918H24.4122L17.3588 14.4164L20.0529 22.7082L12.9995 17.5836L5.94609 22.7082L8.64026 14.4164L1.58683 9.2918H10.3053L12.9995 1Z"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="unit-right">
                                        <h5 class="text-style-2">Time-Saving</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-auto">
                                <div class="unit align-items-center">
                                    <div class="unit-left">
                                        <svg class="icon-svg-outline text-primary" width="26" height="24"
                                            viewbox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.9995 1L15.6937 9.2918H24.4122L17.3588 14.4164L20.0529 22.7082L12.9995 17.5836L5.94609 22.7082L8.64026 14.4164L1.58683 9.2918H10.3053L12.9995 1Z"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="unit-right">
                                        <h5 class="text-style-2">Compact</h5>
                                    </div>
                                </div>
                                <div class="unit align-items-center">
                                    <div class="unit-left">
                                        <svg class="icon-svg-outline text-primary" width="26" height="24"
                                            viewbox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.9995 1L15.6937 9.2918H24.4122L17.3588 14.4164L20.0529 22.7082L12.9995 17.5836L5.94609 22.7082L8.64026 14.4164L1.58683 9.2918H10.3053L12.9995 1Z"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="unit-right">
                                        <h5 class="text-style-2">Multi-Functional</h5>
                                    </div>
                                </div>
                            </div>
                        </div><a class="btn btn-primary" href="products-grid.html">Shop now</a>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="parallax-scene-js parallax-scene-1">
                            <div class="layer" data-depth=".3"><img src="images/home-13-387x354.jpg" alt="" width="387"
                                    height="354">
                            </div>
                            <div class="layer" data-depth=".9"><img src="images/home-14-272x249.jpg" alt="" width="272"
                                    height="249">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA-->
<section class="section section-xs">
    <div class="container-wide">
        <div class="section-sm bg-primary context-dark">
            <div class="container">
                <div class="row row-30 justify-content-sm-between align-items-center">
                    <div class="col-lg-6">
                        <h4>Get our latest news and special sales</h4>
                        <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the
                            legal notice.</p>
                    </div>
                    <div class="col-lg-5">
                        <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global"
                            data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                            <div class="form-wrap">
                                <input class="form-input" id="subscribe-form-email" type="email" name="email"
                                    data-constraints="@Email @Required">
                                <label class="form-label" for="subscribe-form-email">Email address</label>
                            </div>
                            <div class="form-button">
                                <button class="btn btn-primary" type="submit">Get</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer-1">
    <svg class="bg-decor bg-decor-4" width="1746" height="688" viewbox="0 0 1746 688" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
            d="M1746 284.024C1746 404.483 1631.36 528.191 1485.29 581.431C1321.14 641.265 900.906 697.36 715.132 686.686C592.648 679.649 121.385 557.025 23.0317 338.904C-68.198 136.581 115.743 0 501.225 0C886.707 0 1746 28.186 1746 284.024Z"
            fill="#FFEEF2"></path>
    </svg>
    <div class="footer-1-top">
        <div class="container-wide">
            <div class="row row-30">
                <div class="col-sm-6 col-lg-3">
                    <p class="footer-title">your account</p>
                    <ul class="footer-list">
                        <li><a href="#">Personal info</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Credit slips</a></li>
                        <li><a href="#">Addresses</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <p class="footer-title">customer service</p>
                    <ul class="footer-list">
                        <li>Monday to Friday<br>10am - 6.30pm (NewYork time)</li>
                        <li><span class="fa-phone"></span><a href="tel:#">+(001) 23 45 67 89</a></li>
                        <li><a href="#">Send us a message</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <p class="footer-title">our guarantees</p>
                    <ul class="footer-list">
                        <li>Shipping in 3 days</li>
                        <li>Free returns within 14 days</li>
                        <li>Secure payments</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <p class="footer-title">our company</p>
                    <ul class="footer-list">
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Legal Notice</a></li>
                        <li><a href="about-us.html">About us</a></li>
                        <li><a href="contact-us.html">Contact us</a></li>
                        <li><a href="#">Terms and conditions of use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-1-bottom text-center text-lg-left">
        <div class="container-wide">
            <div class="row row-15 align-items-center">
                <div class="col-lg-6">
                    <ul class="list-inline footer-1-bottom-list">
                        <li class="list-inline-item"><a href="index.html"><img class="footer-1-logo"
                                    src="images/logo-default-149x49.svg" alt="" width="149" height="49"></a></li>
                        <li class="list-inline-item">
                            <p class="rights"><span>&copy;&nbsp;</span><span
                                    class="copyright-year"></span><span>&nbsp;</span><span>Roxxe</span></p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 text-lg-right">
                    <ul class="list-inline group-sm">
                        <li class="list-inline-item"><a class="icon icon-gray icon-md fa-facebook-f" href="#"></a></li>
                        <li class="list-inline-item"><a class="icon icon-gray icon-md fa-instagram" href="#"></a></li>
                        <li class="list-inline-item"><a class="icon icon-gray icon-md fa-twitter" href="#"></a></li>
                        <li class="list-inline-item"><a class="icon icon-gray icon-md fa-pinterest" href="#"></a></li>
                        <li class="list-inline-item"><a class="icon icon-gray icon-md fa-youtube-play" href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- Modals-->
<!-- Modal Login-->
<div class="modal modal-login fade" id="modal-login">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <button class="modal-close" data-dismiss="modal"></button>
            <div class="modal-body">
                <!--RD Mailform-->
                <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post"
                    action="bat/rd-mailform.php">
                    <div class="form-wrap">
                        <label class="form-label form-label-outside" for="login-name">Name *</label>
                        <input class="form-input" id="login-name" type="text" name="name" data-constraints="@Required"
                            placeholder="Your name">
                    </div>
                    <div class="form-wrap">
                        <label class="form-label form-label-outside" for="login-phone">Phone *</label>
                        <input class="form-input" id="login-phone" type="text" name="phone"
                            data-constraints="@Required @PhoneNumber" placeholder="Your phone number">
                    </div>
                    <div class="form-button">
                        <button class="btn btn-gray-800 btn-block" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Login-->
<div class="modal modal-subscribe fade" id="modal-subscribe" data-modal-autoshow="5000">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="modal-close" data-dismiss="modal"></button><img src="images/modal-01-500x245.jpg" alt=""
                width="500" height="245">
            <div class="modal-body">
                <h3 class="modal-title">Join our mailing list</h3>
                <p class="big">Stay informed! Monthly sales and discounts.</p>
                <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global"
                    data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                    <div class="form-wrap">
                        <input class="form-input" id="modal-subscribe-form-email" type="email" name="email"
                            data-constraints="@Email @Required">
                        <label class="form-label" for="modal-subscribe-form-email">Email address</label>
                    </div>
                    <div class="form-button">
                        <button class="btn btn-primary" type="submit">Get</button>
                    </div>
                </form>
                <div class="mt-2"><a class="link-confirm" href="#" data-dismiss="modal">Don’t show this popup again</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="snackbars" id="form-output-global"></div>
@endsection
