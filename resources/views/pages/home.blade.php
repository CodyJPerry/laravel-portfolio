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
            <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, recusandae.</p>
            <a class="service-button" href="#">Learn More!</a> 
          </div>
          <div class="col-sm-3">
              <img class="service-img" src="/images/design-icon.svg" alt="Design Icon">
              <h4 class="service-title">Design</h4>
              <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, blanditiis.</p>
              <a class="service-button" href="#">Learn More!</a>  
          </div>
          <div class="col-sm-3">
            <img class="service-img" src="/images/development-icon.svg" alt="Development Icon">
            <h4 class="service-title">Development</h4>
            <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, dolorem?</p>
            <a class="service-button" href="#">Learn More!</a>  
          </div>
          <div class="col-sm-3">
            <img class="service-img" src="/images/maintenance-icon.svg" alt="Maintenance Icon">
            <h4 class="service-title">Maintenance</h4>
            <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, tempora!</p>
            <a class="service-button" href="#">Learn More!</a>  
          </div>
        </div>
      </div>
  </div>
  
@endsection
