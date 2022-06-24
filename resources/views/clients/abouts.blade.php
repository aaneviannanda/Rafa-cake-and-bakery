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
    <!-- Team -->
    <h2 class="text-center">Team</h2>
    <section class="team-section">
      <div class="container">
        <div class="row justify-content-center">          
          <div class="col-12 col-md-4 col-lg-4">
            <div class="card border-0 shadow-lg my-5 position-relative">
              <div class="card-body p-4">
                <div class="member-profile w-100 text-center">
                    <img class="img__team rounded-circle d-inline-block shadow-sm" src="{{ asset('img/lucas.jpeg') }}" alt="Lucas Marcellino" style="width: 100px; height: 100px;">
                  </div>
                <div class="name__team card-text pt-1">
                  <h5 class="member-name mb-0 text-center font-weight-bold">Lucas Marcellino</h5>
                  <div class="mb-3 text-center">Member of CPSG-62</div>
                </div>
              </div><!--//card-body-->
            </div><!--//card-->
          </div><!--//col-->
          <div class="col-12 col-md-4 col-lg-4">
            <div class="card border-0 shadow-lg my-5 position-relative">
              <div class="card-body p-4">
                <div class="member-profile w-100 text-center">
                    <img class="img__team rounded-circle d-inline-block shadow-sm" src="{{ asset('img/azmah.jpeg') }}" alt="" alt="Lucas Marcellino" style="width: 100px; height: 100px;">
                  </div>
                <div class="name__team card-text pt-1">
                  <h5 class="member-name mb-0 text-center font-weight-bold">Azmah Rasyidah</h5>
                  <div class="mb-3 text-center">Member of CPSG-62</div>
                </div>
              </div><!--//card-body-->
            </div><!--//card-->
          </div><!--//col-->
          <div class="col-12 col-md-4 col-lg-4">
            <div class="card border-0 shadow-lg my-5 position-relative">
              <div class="card-body p-4">
                <div class="member-profile w-100 text-center">
                    <img class="img__team rounded-circle d-inline-block shadow-sm" src="{{ asset('img/tegar.jpeg') }}" alt="Tegar Shallahudin A" style="width: 100px; height: 100px;">
                  </div>
                <div class="name__team card-text pt-1">
                  <h5 class="member-name mb-0 text-center font-weight-bold">Tegar Shallahudin Al Ayubi</h5>
                  <div class="mb-3 text-center">Member of CPSG-62</div>
                </div>
              </div><!--//card-body-->
            </div><!--//card-->
          </div><!--//col-->
          <div class="col-12 col-md-4 col-lg-4">
            <div class="card border-0 shadow-lg my-5 position-relative">
              <div class="card-body p-4">
                <div class="member-profile w-100 text-center">
                    <img class="img__team rounded-circle d-inline-block shadow-sm" src="{{ asset('img/aan.jpg') }}" alt="Aan Evian Nanda" style="width: 100px; height: 100px;">
                  </div>
                <div class="name__team card-text pt-1">
                  <h5 class="member-name mb-0 text-center font-weight-bold">Aan Evian Nanda</h5>
                  <div class="mb-3 text-center">Member of CPSG-62</div>
                </div>
              </div><!--//card-body-->
            </div><!--//card-->
          </div><!--//col-->
        </div><!--//row-->
      </div>
  </section>
    <!-- End Team -->
  </div>
<div>
@include('layout.client.footer')
@endsection