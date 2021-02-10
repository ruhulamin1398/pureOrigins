
<div class="preloader">
    <div class="preloader-body">
      <div class="cssload-container">
        <div class="cssload-speeding-wheel"></div>
      </div>
    </div>
  </div>
  <div class="page">
    <header class="section page-header">
      <!--RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xl-stick-up-offset="110px" data-xxl-stick-up-offset="110px" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-aside-outer">
            <div class="rd-navbar-panel">
              <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
              <div class="rd-navbar-aside">
                <div class="rd-navbar-aside-col rd-navbar-select-box">
                  {{-- <div class="select2-outline select2-currency">
                    <select>
                      <option>Usd</option>
                      <option>Eur</option>
                    </select>
                  </div> --}}
                </div>
                <div class="rd-navbar-aside-col rd-navbar-brand">
                  <!--Brand--><a class="brand" href="{{ route('index') }}"><img class="brand-logo-dark" src="{{ asset($setting->image->url) }}" alt="" width="149" height="49"></a>
                </div>
                <div class="rd-navbar-aside-col">
                  <div class="rd-navbar-aside-button-group">
                    <!--RD Navbar Search-->
                    <div class="rd-navbar-search">
                      <button class="btn-small-icon rd-navbar-search-toggle" data-custom-toggle=".rd-navbar-search" data-custom-toggle-disable-on-blur="true">
                          <i class="fa fa-search"  style="border: 2px solid; padding: 10px; border-radius: 20px;" aria-hidden="true"></i>
  
                      </button>
                      <div class="rd-navbar-search-wrap">
                        <div class="position-relative">
                          <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                            <div class="form-wrap">
                              <label class="form-label" for="rd-navbar-search-form-input">Search</label>
                              <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                              <div class="rd-search-results-live" id="rd-search-results-live"></div>
                            </div>
                            <button class="rd-search-form-submit fa-search" type="submit"></button>
                          </form>
                          <button class="modal-close rd-navbar-search-close" data-custom-toggle=".rd-navbar-search"></button>
                        </div>
                        <div class="rd-navbar-search-bg" data-custom-toggle=".rd-navbar-search"></div>
                      </div>
                    </div>
                    <a class="btn-small-icon" href="tel:01840000408" title="01840000408">
                      <i class="fa fa-phone" style="border: 2px solid; padding: 10px 12px; border-radius: 20px;"></i>
                    </a>
                    <a class="btn-small-icon" href="#">
                      <i class="fa fa-map-marker" style="border: 2px solid; padding:10px 14px; border-radius: 20px;"></i>
                    </a>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <div class="rd-navbar-nav-wrap">
                <ul class="rd-navbar-nav">
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="{{ route('index') }}">Home</a>
                  </li>
                 
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('crafts.index') }}">The Craft</a>
                  </li>
           
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('groups.index') }}">The Group</a>
                  </li>
           
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#">Gallery</a>
                  </li>
           
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('contacts.index') }}">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
  