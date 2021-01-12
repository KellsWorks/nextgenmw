@extends('main.app')


@section('content')
<main id="" class="bg-dark mt-4">

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
    </section>
  </main>

    
    <section class="portfolio-details bg-dark">
      <div class="container">

        <div class="portfolio-details-container">


        <img src="../../img/works/{{$offer->image}}" class="img-fluid" alt="">

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: {{$offer->category}} </li>
              <li><strong>Offer</strong>: {{$offer->offer}}</li>
              <li><strong>Project duration</strong>: {{$offer->duration}} </li>
              <li><strong>Mode of delivery</strong>: {{$offer->delivery}} </li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2 class="text-white">Description</h2>
          <p class="text-white" style=" white-space: pre-wrap;">
            {{$offer->description}}
             </p>
        </div>

        <div class="card">
          <div class="card-header">
            Featured
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>

      
    </section>

 
@endsection