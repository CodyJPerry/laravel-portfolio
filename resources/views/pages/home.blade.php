@extends('layout.app')


@section('main')
  @include('partials.header')

  
  <!-- WHAT WE OFFER -->
  <div class="services-offered">
    <span class="divider">What we offer</span>
  </div>

  <div class="container">
  <h3>Our Process</h3>
    <div class="row">
      <div class="col-sm-3">
        <img src="http://placekitten.com/g/200/200" alt="placeholder">
        <h4>Analytics</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, recusandae.</p>
        <a class="text-center" href="#">Button</a> 
      </div>
      <div class="col-sm-3">
          <img src="http://placekitten.com/g/200/200" alt="placeholder">
          <h4>Design</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae, blanditiis.</p>
          <a href="#">Button</a>  
      </div>
      <div class="col-sm-3">
        <img src="http://placekitten.com/g/200/200" alt="placeholder">
        <h4>Development</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, dolorem?</p>
        <a href="#">Button</a>  
      </div>
      <div class="col-sm-3">
        <img src="http://placekitten.com/g/200/200" alt="placeholder">
        <h4>Maintenance</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, tempora!</p>
        <a href="#">Button</a>  
      </div>
    </div>
  </div>
  
@endsection
