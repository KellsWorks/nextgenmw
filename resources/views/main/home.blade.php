@extends('main.app')


@section('content')

<!-- ======= Hero Section ======= -->

<section id="hero" class="d-flex align-items-center bg-dark">

  <div class="container bg-dark">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        @foreach ($homeInfo as $info)
        <h3 class="text-white">{{ $info->title}}</h3>
        <p class="text-white mt-5 ">
          {{ $info->content}}
          </p>
        @endforeach
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="assets/img/hero-img.svg" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section>

<main id="main" class="bg-dark">

  <section id="about" class="about">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
          <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0">
          <h3 data-aos="fade-up" class="text-white">We are here to help</h3>
          <p data-aos="fade-up" data-aos-delay="100">
              We are here to provide the best tech services you can ever find in Malawi and abroad. Our prices are fair justified with the highest quality of services that we provide to all our clients.
          </p>
          <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
              <i class="icofont-business-man"></i>
              <h4>Build your business</h4>
              <p>In a fast growing tech world, your business might just have the chance to sprout</p>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <i class="icofont-tasks"></i>
              <h4>Join us in partnership</h4>
              <p>Interested to work with us? Contact us now</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services bg-dark">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
          <h1 class="text-white text-center m-5">
              Our Services
          </h1>
          <p class="text-white text-center">
              We bring the exciting software features. We are available 24/7 to meet your needs in our capability.
          </p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="icofont-smart-phone"></i></div>
            <h4 class="title"><a href="">Mobile apps</a></h4>
            <p class="description">Our primary goal in mobile app development is the use of advanced skills in order to bring the most exciting features for your mobile application. We build commerce, agricultural, science, health, educations etc apps.
          </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="icofont-dashboard-web"></i></div>
            <h4 class="title"><a href="">Backend development</a></h4>
            <p class="description">For cooporate developments, we build backends for websites and mobile apps (Android and iOS) with easy intergration with your frontends. Our API's are secured and limited to your choice.
          </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="icofont-web"></i></div>
            <h4 class="title"><a href="">Web development</a></h4>
            <p class="description"> We focus on effective web solutions with the highest qualities and amazing features. We design and build websites, web apps, web commerce intergration, web backends and many more...
                  
          </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="icofont-library"></i></div>
            <h4 class="title"><a href="">IT Support</a></h4>
            <p class="description"> We provide support to IT departments in organizations in system maintenance and technologies usage. We also offer network solutions and favourable CMS for large organizations   
          </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h1 class="text-white">Our latest works</h1>
        <p class="text-white text-center mt-1">
          To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage But who has any right
      </p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Mobile apps</li>
            <li data-filter=".filter-card">Web development</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="../img/works/mobile/dzikolanga.png" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="../img/works/mobile/dzikolanga.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
            </div>
            <div class="portfolio-info">
              <h4>Dziko Langa app</h4>
              <p>Onlin election results viewer</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="../img/works/mobile/Doctors.png" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="../img/works/mobile/Doctors.png"  data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>
              <a href="/work" title="More Details"><i class="icofont-link"></i></a>
            </div>
            <div class="portfolio-info">
              <h4>Doctors Appointments</h4>
              <p>Private: Owned by Nextgenerations Malawi</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="../img/works/mobile/hec.jpg" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="../img/works/mobile/hec.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-plus-circle"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
            </div>
            <div class="portfolio-info">
              <h4>HEC</h4>
              <p>Higher education resources in Malawi</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="../img/works/web/qr.png" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="../img/works/web/qr.png"  data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-plus-circle"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
            </div>
            <div class="portfolio-info">
              <h4>QR Ticketing System</h4>
              <p>PRIVATE: OWNED BY NEXTGENERATIONS</p>
            </div>
          </div>
        </div>

      

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= F.A.Q Section ======= -->
  <section id="faq" class="faq">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h1 class="text-white">F.A.Q</h1>
        <p class="text-white">Frequently Asked Questions</p>
      </div>

      <ul class="faq-list">

        <li data-aos="fade-up" data-aos-delay="100">
          <a data-toggle="collapse" class="" href="#faq1">Adminstrative roles</i></a>
          <div id="faq1" class="collapse show" data-parent=".faq-list">
            <p class="text-white">
                Can you set up an adminstrative page for my firm but not like wordpress?
              </p>
          </div>
        </li>

      </ul>

    </div>
  </section><!-- End F.A.Q Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team bg-dark">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h1 class="text-white">Our team</h1>
        <p class="text-white">Our team is always here to help</p>
      </div>

      <div class="row">

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
          <div class="member">
            <img src="../img/staff/abel_andersons.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Abel Andersons</h4>
                <span>Graphic Designer</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="member">
            <img src="../img/staff/jacque.jpg" class="img-fluid" alt="" height="500px" width="700px">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Jacqueline Jailosi</h4>
                <span>Marketer/Sales Man</span>
              </div>
              <div class="social">
                <a href="https://mobile.twitter.com/FrontEndGirlMW"><i class="icofont-twitter"></i></a>
                <a href="https://www.facebook.com/jacqueline.jailosi"><i class="icofont-facebook"></i></a>
                <a href="httpa://www.instagram.com/invites/contact/?i=pkgr2ziq45y5&utm_content=u9ha37"><i class="icofont-instagram"></i></a>
                <a href="https://www.linkedin.com/in/jacqueline-jailosi-a9162a186"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="member">
            <img src="../img/staff/kelvin_chidothi.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Kelvin Chidothi</h4>
                <span>Android developer</span>
              </div>
              <div class="social">
                <a href="https://twitter.com/kellskamuzu?s=09"><i class="icofont-twitter"></i></a>
                <a href="https://www.facebook.com/kelvin_kamuzu"><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="member">
            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Rodger Kumwanje</h4>
                <span>Web developer</span>
              </div>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h1 class="text-white">Clients</h1>
        <p class="text-white">They trusted us</p>
      </div>

      <div class="owl-carousel clients-carousel" data-aos="fade-up" data-aos-delay="100">
        <img src="../img/clients/celeb_hub.png" alt="">
        <img src="https://www.hec.ac.mw/themes/hec/assets/images/hec-logo-plain.png" alt="">
        <img src="../img/clients/qr_ticketing.png" alt="">
       
      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Contact Us Section ======= -->
  <section id="contact" class="contact bg-dark">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h1 class="text-white">Contact Us</h1>
        <p class="text-white">Contact us the get started</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p>Kalimbuka, Zomba, Malawi</p>
            </div>

            <div class="email">
              <i class="icofont-envelope"></i>
              <h4>Email:</h4>
              <p>info@nextgenmw.com</p>
            </div>

            <div class="phone">
              <i class="icofont-phone"></i>
              <h4>Call:</h4>
              <p>+265 99 363 48 27</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <form action="{{route('send-message')}}" method="post" role="form" class="php-email-form">
              @csrf

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>
            
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Us Section -->

</main><!-- End #main -->
@endsection