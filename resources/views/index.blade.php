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
                                    <h2 class="h1" data-caption-animate="fadeInUp" data-caption-delay="100">COVID 19
                                        IMPACT</h2>
                                    <p class="lead box-570 block-center" data-caption-animate="fadeInUp"
                                        data-caption-delay="250">
                                        “Our industry has come to a halt and with closures in the retail sectors
                                        manufacturing has been hit due to order cancellations and plant closures.” <br>
                                        “We have sprung back into operation with fresh innovations and vigour as we
                                        steam ahead with our manufacturing without the lag
                                    </p><a class="btn btn-primary" href="#" data-caption-animate="fadeInUp"
                                        data-caption-delay="450">Read More</a>
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
                                    <h2 class="h1" data-caption-animate="fadeInUp" data-caption-delay="100">Our Presence
                                        @ PureLondon </h2>
                                    <p class="lead box-570 block-center" data-caption-animate="fadeInUp"
                                        data-caption-delay="250">
                                        Come and join the Fashion Together Event hosted by Hyve in London <br>
                                        Our designers have crafted some great pieces for the upcoming season 21/22
                                    </p><a class="btn btn-primary" href="#" data-caption-animate="fadeInUp"
                                        data-caption-delay="450">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                {{-- <div class="swiper-slide"
                    data-slide-bg="{{ asset('abasas/images/slide/LogisticsShip.jpg') }}">
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
                                        ferment</p><a class="btn btn-primary" href="" data-caption-animate="fadeInUp"
                                        data-caption-delay="450">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 --}}
                <div class="swiper-slide swiper-classic-slide-3 context-dark"
                    data-slide-bg="{{ asset('abasas/images/slide/LogisticsTrucks.jpg') }}">
                    <div class="swiper-slide-caption">
                        <div class="container">
                            <div class="row text-center justify-content-center justify-content-lg-start">
                                <div class="col-lg-7 offset-lg-5 col-md-8 col-sm-10">
                                    <h2 class="h1" data-caption-animate="fadeInUp" data-caption-delay="100">Prue Origins</h2>
                                    <p class="lead box-570 block-center" data-caption-animate="fadeInUp"
                                        data-caption-delay="250">Why risk travelling abroad when we are by your side offering you robust end-to-end service at your doorstep. Our London office is equipped with a design and merchandising studio. Our experienced team will assist your buyers at every step to ensure your requirements and satisfaction are fully met.
                                    </p><a class="btn btn-primary" href="#"
                                        data-caption-animate="fadeInUp" data-caption-delay="450">Read More</a>
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
                <nav class="navbar  ">
                    <a class="navbar-brand text-light  " style="margin: 0 auto;" ><img
                            src="{{asset('abasas/images/icon/ic-new-1 (3).png')}}" width="50px" height="50px"
                            alt="ic-new-process-design"></a>
                    {{-- <div class="d-none d-md-block">----------------</div> --}}
                </nav>

                <h6 class="card-title font-weight-bold text-center"> Product Design & Development </h6>
                <p class="text-center"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>
            <div class="col-12 col-sm-6 col-md-2 aos-init" data-aos="fade-up" data-aos-delay="200">


                <nav class="navbar ">
                    <a class="navbar-brand text-light  " style="margin: 0 auto;" ><img
                            src="{{asset('abasas/images/icon/ic-new-1 (1).png')}}" width="50px" height="50px"
                            alt="ic-new-process-design"></a>
                    {{-- <div class="d-none d-md-block">----------------</div> --}}
                </nav>

                <h6 class="card-title font-weight-bold text-center">Pattern Development </h6>
                <p class="text-center"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>



            <div class="col-12 col-sm-6 col-md-2 aos-init" data-aos="fade-up" data-aos-delay="300">
                <nav class="navbar ">
                    <a class="navbar-brand text-light  " style="margin: 0 auto;" ><img
                            src="{{asset('abasas/images/icon/ic-new-1 (4).png')}}" width="50px" height="50px"
                            alt="ic-new-process-design"></a>
                    {{-- <div class="d-none d-md-block">----------------</div> --}}
                </nav>

                <h6 class="card-title font-weight-bold text-center">Sampling</h6>
                <p class="text-center"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>



            <div class="col-12 col-sm-6 col-md-2 aos-init" data-aos="fade-up" data-aos-delay="300">
                <nav class="navbar ">
                    <a class="navbar-brand text-light  " style="margin: 0 auto;" ><img
                            src="{{asset('abasas/images/icon/ic-new-1 (5).png')}}" width="50px" height="50px"
                            alt="ic-new-process-design" height="300px"></a>
                    {{-- <div class="d-none d-md-block">----------------</div> --}}
                </nav>


                <h6 class="card-title font-weight-bold text-center">Manufacturing</h6>
                <p class="text-center"> Lorem ipsum dolor, sit amet consectetur adipisicing elit.. </p>
            </div>


            <div class="col-12 col-sm-6 col-md-2 aos-init " data-aos="fade-up" data-aos-delay="400">


                <nav class="navbar ">
                    <a class="navbar-brand text-light  " style="margin: 0 auto;" ><img
                            src="{{asset('abasas/images/icon/ic-new-1 (2).png')}}" width="50px" height="50px"
                           alt="ic-new-process-deliver" height="30px"></a>

                </nav>

                <h6 class="card-title font-weight-bold text-center">Shipping </h6>
                <p class="text-center"> Lorem ipsum dolor, sit amet consectetur adipisicing elit.. </p>
            </div>







        </div>
    </div>
</section>






<section id="more-services" class="more-services">
    <div class="container">

        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">

                <div class="card aos-init aos-animate"
                    style="background-image:  url({{ asset('abasas/images/hqdefault.jpg') }});"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Woven</a></h5>
                        <p class="card-text">

                            <b>Lines:</b> 26 lines <br>
                            <b>Capacity:</b> 30,000 pieces per day <br>
                            <b>Samples:</b> 2,000 per month (80 daily) <br>
                            <b>Marker & Sample:</b> CAD system <br>
                            <b>Cutting, Sewing & Finishing:</b> 520k monthly <br>
                            <b>Print & Embroidery:</b> In house printing facility <br>
                            Brother, Juki, Pegasus, Auto Spreader with (Gerber Technology Vibemac <br>


                        </p>
                        {{-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="card aos-init aos-animate"
                    style="background-image: url({{ asset('abasas/images/knit.jpg') }});"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Knit</a></h5>
                        <p class="card-text">

                            <b>Lines:</b> 30 lines <br>
                            <b>Capacity:</b> 34,600 per day <br>
                            <b>Samples:</b> 2,050 per month <br>
                            <b>Dyeing & Finishing:</b> 30 Sets of machines <br>
                            <b>Dyeing & Finishing:</b> 20 metric tonnes per day <br>
                            <b>Knitting:</b> 23 sets of machines
                        </p>
                        {{-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> --}}
                    </div>
                </div>

            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="card aos-init"
                    style="background-image:  url({{ asset('abasas/images/towels.range2_.jpg') }});"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                        {{-- <h5>h5 class="card-title"><a href="">A cloud based document management platform</a></h5> --}}
                        <p class="card-text">
                            Outerwear
                            Underwear <br>
                            Tops, T’s, Polos, Vests etc <br>
                            Denims <br>
                            Lounge wear <br>
                            Sweater, Fleece <br>
                            Active wear <br>

                        </p>
                        {{-- <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
                <div class="card aos-init"
                    style="background-image: url({{ asset('abasas/images/towel.jpg') }});"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Home Textiles</a></h5>
                        <p class="card-text">

                            <b> Spinning: </b>
                            150,000 spindles, 45 tonnes of yarn daily capacity <br>
                            <b>Weaving:</b>
                            With Rapier, Air jet & Shuttle procedure looms capable of 100% Cotton, 100% Polyester /
                            Blended fabrics <br>
                            <b>Confectioning: </b>
                            Equipped with our own stitching and packing unit with processing capacity of 1,500,000
                            meters (1.5 million meters) fabric per month

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
                <p class="lead">We are leading the scene in sustainable textile products manufacturing, producing a
                    diverse variety of products internationally</p>


            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row">

            <img src="{{ asset('abasas/images/locations.jpg') }}" alt="map" width="100%"
                style="min-width: 100%;">







        </div>
    </div>
</section>










@endsection
