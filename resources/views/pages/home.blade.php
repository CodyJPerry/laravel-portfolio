@extends('layout.app')


@section('main')
  @include('partials.header')

  
  <!-- WHAT WE OFFER -->
  <div class="services-offered">
      <span class="divider">What we offer</span>
      <div class="container">
      <h3>Our Process <i class="far fa-check-circle"></i></h3>
        <div class="row">
          <div class="col-sm-3">
            <img class="service-img" src="/images/analytics-icon.svg" alt="Analytics Icon">
            <h4 class="service-title">Analytics</h4>
            <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, recusandae.</p>
            <a class="service-button" href="#">Button</a> 
          </div>
          <div class="col-sm-3">
              <img class="service-img" src="http://placekitten.com/g/200/200" alt="placeholder">
              <h4 class="service-title">Design</h4>
              <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, blanditiis.</p>
              <a class="service-button" href="#">Button</a>  
          </div>
          <div class="col-sm-3">
            <img class="service-img" src="http://placekitten.com/g/200/200" alt="placeholder">
            <h4 class="service-title">Development</h4>
            <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, dolorem?</p>
            <a class="service-button" href="#">Button</a>  
          </div>
          <div class="col-sm-3">
            <img class="service-img" src="http://placekitten.com/g/200/200" alt="placeholder">
            <h4 class="service-title">Maintenance</h4>
            <p class="service-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, tempora!</p>
            <a class="service-button" href="#">Button</a>  
          </div>
        </div>
      </div>
  </div>
  
@endsection
