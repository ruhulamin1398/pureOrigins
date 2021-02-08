@extends('includes.app')
@section('content')




<section class="section section-md bg-transparent position-relative">
    <div class="container-wide">
      <div class="row row-40">
        <div class="col-lg-7"><img src="{{ asset('abasas/images/home-07-1095x700.jpg') }}" alt="" width="1095" height="700">
        </div>
        <div class="col-lg-5">
          <div class="box-1">
            <h2>LONDON OFFICE</h2>
            <p class="big">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex soluta enim, et alias voluptatem fugit reiciendis </p>
            <ul class="list-marked big list-spacing-01">
              <li>Lorem ipsum dolor sit amet.</li>
              <li> Lorem, ipsum dolor. </li>
              <li>Lorem ipsum dolor sit. </li>
            </ul>
            {{-- <a class="btn btn-primary" href="">go</a> --}}
          </div>
        </div>
      </div>
    </div>
  </section>



  


  <section class="section section-md bg-light position-relative">
  
    <div class="container-wide">
      <div class="row row-40">

        <div class="col-lg-5">
          <div class="box-1">
            <h2>DHAKA OFFICE</h2>
            <p class="big">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex soluta enim, et alias voluptatem fugit reiciendis </p>
            <ul class="list-marked big list-spacing-01">
              <li>Lorem ipsum dolor sit amet.</li>
              <li> Lorem, ipsum dolor. </li>
              <li>Lorem ipsum dolor sit. </li>
            </ul>
            {{-- <a class="btn btn-primary" href="">go</a> --}}

          </div>
        </div>

        <div class="col-lg-7"><img src="{{ asset('abasas/images/home-07-1095x700.jpg') }}" alt="" width="1095" height="700">
        </div>

      </div>
    </div>
  </section>

<section class="section section-md bg-default">
    <div class="container">
      <div class="row row-30">
        <div class="col-lg-4">
          <div class="row row-30">
            <div class="col-6 col-md-4 col-lg-12">
              <div class="contact-info">
                <p class="contact-info-title">CUSTOMER SERVICE</p>
                <div class="contact-info-link"><span class="fa-phone mr-2"></span><a href="tel:#">+000 000 000</a></div>
                <p class="mt-0">Monday to Friday<br>10am - 6.30pm (NewYork time)</p>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-12">
              <div class="contact-info">
                <p class="contact-info-title">PRODUCTS & ORDERS</p>
                <div class="contact-info-link"><span class="fa-phone mr-2"></span><a href="tel:#">+00000  000 000</a></div>
                <p class="mt-0">Monday to Friday<br>10am - 6.30pm (NewYork time)</p>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-12">
              <div class="contact-info">
                <p class="contact-info-title">STORE LOCATOR</p>
                <p>13 Amsterdam Road</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <!--Google Map-->
          <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
          <!--Please note that YOUR_API_KEY should replaced with your key.-->
          <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
          <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;landscape&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:60}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:40},{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;administrative.province&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;lightness&quot;:30}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ef8c25&quot;},{&quot;lightness&quot;:40}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b6c54c&quot;},{&quot;lightness&quot;:40},{&quot;saturation&quot;:-40}]},{}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
              <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
            </ul>
          </div>
         
        </div>
      </div>
    </div>
  </section>


  <section class="bg-light p-4">
<div class="container mb-4 pb-4 ">
    <div class="row">
        <div class="col-12 col-md-2"></div>
        <div class="col-12 col-md-8">


            <h4>Have a question about a product, our company, or just want to chat? Email us!</h4>
            <p>We will be glad to assist you in any question and encourage you to share your ideas and improvements with us.</p>
            <!--RD Mailform-->
            <form class="rd-mailform text-left mt-4" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
              <div class="form-wrap">
                <label class="form-label form-label-outside" for="contact-name">Name</label>
                <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
              </div>
              <div class="form-wrap">
                <label class="form-label form-label-outside" for="contact-email">E-Mail</label>
                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
              </div>
              <div class="form-wrap">
                <label class="form-label form-label-outside" for="contact-message">Message</label>
                <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
              </div>
              <div class="form-button">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
            </form>

        </div>
        <div class="col-12 col-md-2"></div>
    </div>
</div>
  </section>





    
@endsection