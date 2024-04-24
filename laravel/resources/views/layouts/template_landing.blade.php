<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT Solutions &amp; Business Services Responsive HTML5 Bootstrap5  Website Template">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- fav icon -->
        <link rel="icon" type="image/ico" href="/assets/images/tbni.ico">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="/assets2/css/vendors/bootstrap.min.css">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="/assets2/css/vendors/animate.css">
        
        <!-- Swiper -->
        <link rel="stylesheet" href="/assets2/css/vendors/swiper-bundle.min.css">
        
        <!-- flaticon -->
        <link rel="stylesheet" href="/assets2/css/vendors/flaticon/flaticon.css">
        
        <!-- fontAwesome -->
        <link rel="stylesheet" href="/assets2/css/vendors/all.min.css">
        
        <!-- bootstrap icons -->
        <link rel="stylesheet" href="/assets2/css/vendors/bootstrap-icons-1.9.1/bootstrap-icons.css">
        
        <!-- Fancybox -->
        <link rel="stylesheet" href="/assets2/css/vendors/jquery.fancybox.min.css">
        
        <!-- fonts site preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <!-- fonts site preconnect -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap">
        
        <!-- main-LTR -->
        <link rel="stylesheet" href="/assets2/css/main-LTR.css">

        <title>{{$title}}</title>
  </head>
  <body class=" dark-theme ">
    <!--Start Page Header-->
    <header class=" page-header   header-basic" id="page-header">
      <div class="container">
        <nav class="menu-navbar">
          <div class="header-logo"><a class="logo-link" href="{{ route('home') }}"><img class="logo-img light-logo" loading="lazy" src="/assets2/assets/logo/logo-tbni.png" alt="logo"/></a></div>
          <div class="links menu-wrapper ">
            <ul class="list-js links-list">
              <li class="menu-item"><a class="menu-link" href="{{ route('home') }}">Home</a></li>
              <li class="menu-item has-sub-menu"><a class="menu-link">Event<i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{ route('home') }}#testimonials-img-bg">Last Event</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="{{ route('home') }}#upcoming-event">Upcoming Event</a></li>
                </ul>
              </li>
                <li class="menu-item"><a class="menu-link  " href="{{ route('becomeSponsor') }}">Become Our Sponsor</a></li>
              </li>
            </ul>
          </div>
          <div class="controls-box">
           <!-- Menu Toggler button -->
           <div class="control menu-toggler me-3"><span></span><span></span><span></span></div>
           <!-- Dark/Light mode button -->
           <div class="mode-switcher me-3">
            <div class="switch-inner go-light" title="Switch To Light Mode"><i class="bi bi-sun icon"></i></div>
            <div class="switch-inner go-dark" title="Switch To Dark Mode"><i class="bi bi-moon icon"></i></div>
          </div>
          <!-- Buttons -->
        @if($isLogged == true)
            <a href="{{ route('dashboard') }}" class="btn-outline-warning btn me-2">Profile</a>    
        @else
            <a href="{{ route('register') }}" class="btn-outline-warning btn me-2">Sign Up</a>
            <a href="{{ route('login') }}" class="btn-outline-warning btn me-2">Login</a>        
        @endif
        </div>
       </nav>
      </div>
    </header>
    <!--End Page Header-->
    @yield('content')

    <!-- Start  page-footer Section-->
    <footer class="page-footer dark-color-footer" id="page-footer">
      <div class="overlay-photo-image-bg" data-bg-img="/assets2/assets/images/sections-bg-images/footer-bg-1.jpg" data-bg-opacity=".25"></div>
      <div class="container">
        <div class="row footer-cols">
          <div class="col-12 col-md-8 col-lg-4 footer-col">
            <img class="img-fluid footer-logo" loading="lazy" src="/assets2/assets/logo/logo-tbni.png" alt="logo" style="max-width: 100%; width: 200px; height: auto;"/>        
            <div class="footer-col-content-wrapper">        
              <p class="footer-text-about-us ">
                Indonesia Team Impact Hub
                Lippo Thamrin Lt.5 #0503
                Jl. M.H.Thamrin No.20, Menteng
                Jakarta Pusat 10350, Indonesia
              </p>
            </div>
            <div class="form-area ">
              <div class="mailchimp-form ">
                <form class="one-field-form" method="post" action="home-2.html#0">
                  <div class="field-group ">
                    <label class="email-label" for="email-input"> Subscribe for more info</label>
                    <input class="email-input " type="email" value="" name="EMAIL" id="email-input" placeholder="Email Address" autocomplete="off"/>
                    <div class="cta-area">
                      <input class="btn-solid subscribe-btn" type="submit" value="Subscribe" name="subscribe"/>
                    </div>
                  </div><span class="email-notice">*we will not share your personal info</span>
                </form>
              </div>
            </div>
          </div>
          <div class="col-12     col-lg-4 footer-col ">
            <h2 class=" footer-col-title    ">contact information</h2>
            <div class="footer-col-content-wrapper">       
              <div class="contact-info-card"><i class="bi bi-envelope icon"></i><a class="text-lowercase  info" href="mailto:info@tbnindonesia.org">info@tbnindonesia.org</a></div>
              <div class="contact-info-card"><i class="bi bi-phone icon"></i><a class="info" href="tel:+6282310001908">+62823 1000 1908</a></div>
              <div class="contact-info-card">
                <div class="social-icons">
                  <div class="sc-wrapper dir-row sc-size-32">
                    <ul class="sc-list">
                      <li class="sc-item " title="LinkeId"><a class="sc-link" href="https://www.linkedin.com/in/tbn-indonesia-210705251/" title="social media icon"><i class="fab fa-linkedin sc-icon"></i></a></li>
                      <li class="sc-item " title="youtube"><a class="sc-link" href="https://www.youtube.com/channel/UCnal-hHUTJRGKl5N0S79Gbg" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                      <li class="sc-item " title="instagram"><a class="sc-link" href="https://www.instagram.com/tbn.indonesia/" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                      <li class="sc-item " title="whatsapp"><a class="sc-link" href="https://api.whatsapp.com/send?phone=+6282310001908&text=Hi,%20Saya%20ingin%20bertanya%20tentang%20informasi%20TBN%20Indonesia" title="social media icon"><i class="fab fa-whatsapp sc-icon"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights ">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-start">
              <p class="creadits">
                 
                
                &copy; © 2023 TBN Indonesia. All Rights Reserved</a>
              </p>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-end">
              <div class="terms-links"><a href="home-2.html#0">Terms of Use </a>
                | <a href="home-2.html#0" data-bs-toggle="modal" data-bs-target="#privacyPolicyModal">Privacy Policy.</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End  page-footer Section-->
    <!-- Start loading-screen Component-->
    <div class="loading-screen" id="loading-screen"><span class="bar top-bar"></span><span class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span></div>
    <!-- End loading-screen Component-->
    <!-- Start back-to-top Button-->
    <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i>
    </div>
    <!-- End back-to-top Button-->
    <!-- Start privacy-policy-modal-->
    <div class="modal privacy-policy-modal fade" id="privacyPolicyModal" aria-labelledby="PrivacyPolicyModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-xl ">
        <div class="modal-content text-dark">
          <div class="modal-header">
            <h2 class="modal-title" id="PrivacyPolicyModalLabel">Privacy Policy Modal Title</h2>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
            <div class="content">
              <h4>privacy policy item Title goes here </h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores saepe, labore sequi libero nesciunt optio quidem iste, dolorum nostrum ex at. Recusandae ducimus aut autem temporibus tempore rerum, consequuntur doloribus perspiciatis, labore totam dolorem veritatis repellendus omnis illo sint ut?</p>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn-solid" type="button" data-bs-dismiss="modal" aria-label="Close">Click to close</button>
            <button class="btn-outline" type="button">Do somthing else</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End privacy-policy-modal-->   
        
        <!--     JQuery     -->
        <script src="/assets2/js/vendors/jquery-3.6.1.min.js"></script>
        
        <!--     appear     -->
        <script src="/assets2/js/vendors/appear.min.js"></script>
        
        <!--     bootstrap     -->
        <script src="/assets2/js/vendors/bootstrap.bundle.min.js"></script>
        
        <!--     countTo     -->
        <script src="/assets2/js/vendors/jquery.countTo.js"></script>
        
        <!--     wow     -->
        <script src="/assets2/js/vendors/wow.min.js"></script>
        
        <!--     swiper     -->
        <script src="/assets2/js/vendors/swiper-bundle.min.js"></script>
        
        <!--     particles     -->
        <script src="/assets2/js/vendors/particles.min.js"></script>
        
        <!--     Vanilla-tilt     -->
        <script src="/assets2/js/vendors/vanilla-tilt.min.js"></script>
        
        <!--     isotope     -->
        <script src="/assets2/js/vendors/isotope-min.js"></script>
        
        <!--     fancybox     -->
        <script src="/assets2/js/vendors/jquery.fancybox.min.js"></script>
        
        <!--     main     -->
        <script src="/assets2/js/main.js"></script>
  </body>
</html>