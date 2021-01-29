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
                                    </p><a class="btn btn-primary" href=""
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
                                    </p><a class="btn btn-primary" href=""
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
                                        ferment</p><a class="btn btn-primary" href=""
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
<div class="container-fluid">
    <img src="{{ asset("abasas/images/banner (1).png") }}" width="100%" style="padding: 0; margin:0;" alt="covid19"></div>

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




<div class="container">
    <img src="{{ asset("abasas/images/banner (2).png") }}" width="100%"  alt="covid19">
</div>



<section id="more-services" class="more-services">
    <div class="container">

        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">

                <div class="card aos-init aos-animate" style="background-image:  url({{ asset('abasas/images/hqdefault.jpg') }});" data-aos="fade-up" data-aos-delay="100">
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
                        {{-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="card aos-init aos-animate" style="background-image: url({{ asset('abasas/images/knit.jpg') }});" data-aos="fade-up" data-aos-delay="200">
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
                        {{-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> --}}
                    </div>
                </div>

            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="card aos-init" style="background-image:  url({{ asset('abasas/images/towels.range2_.jpg') }});" data-aos="fade-up" data-aos-delay="100">
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
                        {{-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="card aos-init" style="background-image: url({{ asset('abasas/images/towel.jpg') }});" data-aos="fade-up" data-aos-delay="200">
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
                        {{-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>





<!-- About-->
<section class="section section-md bg-transparent">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-sm-10 text-center">
                <h2 class="h3">Our Locations</h2>
                <p class="lead">We are leading the scene in sustainable textile products manufacturing, producing a diverse variety of products internationally</p>


            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row">

       <img src="{{ asset('abasas/images/map.jpg') }}" alt="map" width="100%" style="min-width: 100%;" >







        </div>
    </div>
</section>



<div class="container-fluid">


    <img src="{{ asset("abasas/images/banner (3).png") }}" width="100%"  alt="covid19"></div>







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
            <div class="col-lg-7"><img src="{{ asset('abasas/images/towel.jpg') }}" alt="" width="1095" height="700">
            </div>
            <div class="col-lg-5">
                <div class="box-1">
                    <h2>Pure Home Products</h2>
                    <p class="big">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus veniam quisquam minima mollitia ullam unde sunt porro totam ipsum architecto.</p>
                    <ul class="list-marked big list-spacing-01">
                        <li>Free shipping over $30</li>
                        <li>Free & easy returns</li>
                        <li>Free ice cream</li>
                    </ul><a class="btn btn-primary" href="">shop now</a>
                </div>
            </div>
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
                        <h2>Diversified Home Products</h2>
                        <p class="lead box-550">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum id accusantium, illo dolore eveniet quam dolorum consectetur cupiditate et iure! Dolorem nihil nulla molestias possimus?</p>
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
                        </div><a class="btn btn-primary" href="">Shop now</a>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="parallax-scene-js parallax-scene-1">
                            <div class="layer" data-depth=".3"><img src="{{ asset('abasas/images/27-scaled.jpg') }}" alt="" width="387"
                                    height="354">
                            </div>
                            <div class="layer" data-depth=".9"><img src="{{ asset('abasas/images/28-scaled.jpg') }}" alt="" width="272"
                                    height="249">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
