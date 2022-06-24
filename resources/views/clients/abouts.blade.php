@extends('layout.client')
@section('content')
<div class="menu__about__rafa">
  <h2 class="text-center">About Rafa</h2>
  <div class="container-fluid about__us">
      <div class="row">
        <div class="col-md-6 d-flex justify-content-center">
           <img src="{{ asset('img/about-us.png') }}" alt="Cake full fodant"> 
        </div>
        <div class="col-md-6 description__about">
          <h3>Rafa Cake & Bakery</h3>
          <p>Rafa Cake and Bakery is a web-based application project that aims to introduce Rafa Cake and Bakery, 
            introduce products that are sold at the venue, and can also order them via Whatsapp.</p>
          <p>We hope this website can help buyers and owners of Rafa Cake & Bakery to be more efficient in ordering products.</p>
          <p>The features of the rafa cake and bakery application include Home (Landing Page for initial introduction and displaying superior products at Rafa Cake and Bakery), 
            Catalog (various products sold), Favorite (Products that have been added to the favorite menu by the user) , 
            About Us (Contains an explanation and introduction from the Rafa Cake and Bakery shop), Whatsapp (functions to contact the seller for product orders).</p>
        </div>
    </div>
  </div>
<div>
@include('layout.client.footer')
@endsection