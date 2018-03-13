@extends('layout.app')

@section('main')
  @include('partials.header')

  <!-- WHAT WE OFFER -->
  <div class="services-offered">
      <span class="divider">What We Offer</span>
      <div class="container">
      <h3>Our Process <i class="far fa-check-circle"></i></h3>
        <div class="row">
          <div class="col-sm-3">
            <img class="service-img" src="/images/analytics-icon.svg" alt="Analytics Icon">
            <h4 class="service-title">Analytics</h4>
            <p class="service-text">We work with you to create an online presence that will get noticed.</p>
            <a class="service-button" href="#">Learn More!</a> 
          </div>
          <div class="col-sm-3">
              <img class="service-img" src="/images/design-icon.svg" alt="Design Icon">
              <h4 class="service-title">Design</h4>
              <p class="service-text">From Brand Identity to UI/UX design, we’ll help you engage customers.</p>
              <a class="service-button" href="#">Learn More!</a>  
          </div>
          <div class="col-sm-3">
            <img class="service-img" src="/images/development-icon.svg" alt="Development Icon">
            <h4 class="service-title">Development</h4>
            <p class="service-text">Our team will create a functional solution that will exceed users expectations.</p>
            <a class="service-button" href="#">Learn More!</a>  
          </div>
          <div class="col-sm-3">
            <img class="service-img" src="/images/maintenance-icon.svg" alt="Maintenance Icon">
            <h4 class="service-title">Maintenance</h4>
            <p class="service-text">Not a fan of code. No problem, we provide complete maintenance plans.</p>
            <a class="service-button" href="#">Learn More!</a>  
          </div>
        </div>
      </div>
  </div>
  
@endsection
