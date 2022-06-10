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
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, 
                remaining essentially unchanged.</p>
          <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
  </div>
<div>
@include('layout.client.footer')
@endsection