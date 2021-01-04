@extends('main.app')


@section('content')
<main id="main" class="bg-dark mt-4">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs bg-dark">
      <div class="container bg-dark">

        <div class="d-flex justify-content-between align-items-center">
          <h2 class="text-white">Doctors Appointments Details</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/">Our latest works</a></li>
            <li class="text-white">Doctors Appointments</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details bg-dark">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="assets/img/portfolio/portfolio-details-1.jpg" class="img-fluid" alt="">
            <img src="assets/img/portfolio/portfolio-details-2.jpg" class="img-fluid" alt="">
            <img src="assets/img/portfolio/portfolio-details-3.jpg" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Mobile apps (Android) </li>
              <li><strong>Client</strong>: NEXTGENERATIONS</li>
              <li><strong>Project date</strong>: 01 July, 2020</li>
              <li><strong>Google playstore</strong>: <a href="#">Not yet signed</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2 class="text-white">Description</h2>
          <p class="text-white">
             Doctors Appointments version 1.2.9. This app allows users to serach for doctors, pharamaceutical shops and hospitals in their nearest proximity. They can then book an appointment or suggesta favourable place. Deliveries are also included in this app thanks to the mobile money feature integration.
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection