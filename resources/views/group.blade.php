@extends("includes.app")
@section('content')



{{-- <section class="breadcrumbs-custom" data-preset='{"title":"Breadcrumbs","category":"header","reload":false,"id":"breadcrumbs"}'>
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="index.html">Home</a></li>
        <li><a>Pages</a></li>
        <li class="active">About Us</li>
      </ul>
    </div>
  </section> --}}

  <section class="section-sm bg-default">
    <div class="container-wide">
      <div class="section-xxl bg-image context-dark" style="background-image: url({{ asset('abasas/images/about/about.jpg') }});">
        <div class="row justify-content-center text-center">
          <div class="col-md-10 col-lg-9 col-xl-8">
            <div class="p-3">
              <h2>Our Values</h2>
              <div class="mt-3" style="font-size:150%">
                We are a value-driven organization with people at the very core of all of our operational and administrative decisions. Our core values of quality, sustainability, and affordability have been the major driver of our success. 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      <!--Full-Width Grid System-->
      <section class="section ">
        <div class="container  ">
          {{-- <h4 class="text-center">Full-Width Grid System</h4> --}}
          <div class="row">
            <div class="col-12 col-md-6 pb-2">
              <h6>Quality</h6>
              <p>
                We’re obsessed with quality and this is well-reflected in our products and process. For instance, we maintain a professional in-house team of highly-experienced quality control officers. Professionals on this team boast more than a decade of experience in the QC industry and are some of the industry’s finest. We go the extra mile for quality as well. We work with K2 Quality Control & Logistics, a third-party quality control company. K2 can provide piece-to-piece quality checks to ensure each product meets the customer’s specified requirements. Finally, we work in line with the JDPC and the Bangladesh Jute Association. This means all our jute diversified products have to be compliant with government standards and legislation on sustainable products. 

              </p>
            </div>
            <div class="col-12 col-md-3 pb-2">
              <h6>Sustainability</h6>
              <p>We are a green business and we care about the environment. Our products are sourced from natural and sustainable raw materials. Our line of products is environmentally-friendly, safe and healthy for use indoors and outdoors. Our textile products are devoid of harmful chemicals and toxins that won’t trigger allergies or cause your skin any harm. These are safe for both the young and old alike.  </p>
            </div>
            <div class="col-12 col-md-3">
              <h6>Affordability</h6>
              <p>Premium products should not cost a fortune. Here at Pure Origins, we strive to make quality affordable to our customers without compromise. We care so much about our customers and would go to any length to ensure maximum satisfaction. This is why we have made it our goal and commitment to blend quality with affordability as shown in our diverse range of environmentally-friendly products. </p>
            </div>
          </div>
 
        </div>
      </section>



  <section class="section-sm bg-default">
    <div class="container-wide">
      <div class="row row-20 justify-content-center">
 
        <div class="col-sm-6 col-lg-4"><a class="banner-classic banner-classic-2" href="#">
            <div class="banner-classic-figure"><img src="{{ asset('abasas/images/banner-classic-1-590x700.jpg') }}" alt="" width="590" height="700">
            </div>
            <div class="banner-classic-caption">
              <div class="h3 banner-classic-caption-title">DELIVERY TO ALL REGIONS</div>
              <div class="banner-classic-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
            </div></a>
        </div>
        <div class="col-sm-6 col-lg-4"><a class="banner-classic banner-classic-2" href="#">
            <div class="banner-classic-figure"><img src="{{ asset('abasas/images/banner-classic-1-590x700.jpg') }}" alt="" width="590" height="700">
            </div>
            <div class="banner-classic-caption">
              <div class="h3 banner-classic-caption-title">DELIVERY TO ALL REGIONS</div>
              <div class="banner-classic-caption-text">Lorem ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi facere, nulla quaerat nihil suscipit fuga. Sit facilis ducimus rem repellendus, nobis architecto a laboriosam labore deserunt dolor, neque aliquid voluptatum. Ad deserunt unde odit, quam, doloremque eaque deleniti inventore expedita suscipit cum ducimus dolorem pariatur voluptatem minima vel quisquam nisi. dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
            </div></a>
        </div>
        <div class="col-sm-6 col-lg-4"><a class="banner-classic banner-classic-2" href="#">
            <div class="banner-classic-figure"><img src="{{ asset('abasas/images/banner-classic-1-590x700.jpg') }}" alt="" width="590" height="700">
            </div>
            <div class="banner-classic-caption">
              <div class="h3 banner-classic-caption-title">DELIVERY TO ALL REGIONS</div>
              <div class="banner-classic-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
            </div></a>
        </div>


      </div>
    </div>
  </section>



  <section class="section section-md bg-transparent position-relative">
    <svg class="bg-decor bg-decor-2" width="703" height="716" viewBox="0 0 703 716" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M576.149 245.486C630.363 339.387 629.64 506.443 515.386 572.408C401.132 638.372 166.248 538.762 100.444 424.785C34.6395 310.809 177.394 142.877 315.908 68.698C430.162 2.73351 510.345 131.509 576.149 245.486Z" fill="#FB9AB1"></path>
    </svg>
    <div class="container-wide">
      <div class="row row-40">
        <div class="col-lg-7"><img src="{{ asset('abasas/images/home-07-1095x700.jpg') }}" alt="" width="1095" height="700">
        </div>
        <div class="col-lg-5">
          <div class="box-1">
            <h2>Skin care tips &amp; trends</h2>
            <p class="big">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex soluta enim, et alias voluptatem fugit reiciendis </p>
            <ul class="list-marked big list-spacing-01">
              <li>Lorem ipsum dolor sit amet.</li>
              <li> Lorem, ipsum dolor. </li>
              <li>Lorem ipsum dolor sit. </li>
            </ul><a class="btn btn-primary" href="">go</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section section-xs">
    <div class="container-wide">
      <div class="section-sm bg-light ">
        <div class="container">
          <div class="row row-130 justify-content-sm-between align-items-center">
            <div class="col-12">
              <h4>Get our latest news and special sales</h4>
              <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae at, nihil sed tempore voluptates optio numquam vero exercitationem, aliquid laudantium illum quaerat quisquam dolor. Est, harum exercitationem! Eos earum ex voluptatem odit praesentium vero cum exercitationem molestias. Omnis velit perferendis nostrum non minima praesentium, iste quidem sequi optio. Quis doloremque veniam fugit, numquam accusantium quidem saepe molestiae quasi minus accusamus ipsam rem suscipit possimus obcaecati ea. Libero molestias quibusdam nulla incidunt explicabo repudiandae aliquam, ea laborum odit voluptatem fugiat exercitationem rem, asperiores doloremque ipsam dolor maiores iure saepe sint voluptate est! Quaerat officiis amet velit asperiores doloremque labore autem expedita. </p>
            </div>
         
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="overflow-hidden mt-4 mb-4">
    <div class="container">
      <div class="row row-30 align-items-center">
        <div class="col-12  col-md-6 col-xl-5">
          <h3>CATERING TO YOUR REQUIREMENTS, HANDLING YOUR NEEDS WITH CARE</h3>
          <h6 class="mt-3">Our store is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience. Forget about struggling to do everything at once: taking care of the family, running your business, walking your dog, cleaning the house, doing the shopping, etc.</h6>
        </div>
        <div class=" col-12 col-md-6 col-xl-7"><img class="box-image-item-responsive img-responsive" src="{{ asset('abasas/images/about-02-670x400.jpg') }}" alt="" width="670" height="400">
        </div>
      </div>
    </div>
  </section>


@endsection