@extends('main.app')

@section('content')

{{--  Main page  --}}

<section id="starter" class="d-flex align-items-center bg-dark">

  <div class="container bg-dark">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
        @foreach ($homeInfo as $info)
        <h3 class="text-white">{{ $info->title}}</h3>
        <p class="text-white mt-5 ">
          {{ $info->content}}
          </p>
        @endforeach
        <a href="#about" class="btn btn-outline-primary scrollto">Get Started</a>
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
  </section>

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
        @foreach ($services as $service)
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="{{$service->icon}}"></i></div>
            <h4 class="title"><a href="">{{$service->title}}</a></h4>
            <p class="description">{{$service->content}}
          </p>
          </div>
        </div>

        @endforeach
      </div>

    </div>
  </section>

  <section id="offers">
    <div id="pricing" class="section wb">
      <div class="container">
          <div class="section-title text-center">
              <h1 class="text-white" data-aos="fade-up">Offers</h1>
              <p class="text-white" data-aos="fade-up">Get 50% offer when working projects with us.</p>
          </div>
  
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-md-12">
          <div class="pricing pricing-palden">
          
          @foreach ($offers as $offer)
          <div class="{{$offer->class}}">
            <div class="pricing-deco">
            <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
              <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
              <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
              <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
              <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
            </svg>
            <div class="pricing-price"><span class="pricing-currency">MK</span>{{$offer->price}}
              <span class="pricing-period">, 000</span>
            </div>
            <h3 class="pricing-title">{{$offer->title}}</h3>
            </div>
            <ul class="pricing-feature-list">
            <li class="pricing-feature">{{$offer->content_1}}</li>
            <li class="pricing-feature">{{$offer->content_2}}</li>
            <li class="pricing-feature">{{$offer->content_3}}</li>
            </ul>
            <a href="/offers/{{$offer->id}}"><button class="bttn-new-a">Get started</button></a>
          </div> 
          @endforeach
          
        </div>
      </div>
    </div>
   </div>
  </div>

  

  
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
  </section>


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
                <a href="https://www.instagram.com/invites/contact/?i=1776vl4u0785i&utm_content=2lyt2hn"><i class="icofont-instagram"></i></a>
                <a href="https://www.linkedin.com/in/kelvin-chidothi-338a7b157"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="member">
            <img src="https://i2.wp.com/ceph.io/wp-content/uploads/2016/07/headshot-placeholder.png?fit=250%2C250&ssl=1" class="img-fluid" alt="">
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
  </section>

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
  </section>

  <section id="contact" class="contact bg-dark">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h1 class="text-white">Contact Us</h1>
        <p class="text-white">Get in touch with us</p>
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

            <iframe src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBRZGFJFgA2iUoF_hciLRyqgUH9mUQP3Qk&q=kalimbuka+road+zomba+malawi" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
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
  </section>

@endsection

{{--  Last edited by Kells Works   --}}