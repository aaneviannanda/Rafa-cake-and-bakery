@extends('layout.client')

@section('content')
{{-- Detail items --}}
<div class="detail__items">
    <h2 class="text-center movie__title">Detail of {{ $product->name }}</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center detail__img">
                <img src="{{ asset('product_img/'.$product->link_img) }}" alt="Cake full fodant">
            </div>
            <div class="col-md-6 description__about">
              <ul class="list-group">
                <li class="list-group-item"><strong>Price :</strong><p>{{ $product->price }}</p></li>
                <li class="list-group-item"><strong>Category :</strong><p>{{ $product->categories->name }}</p></li>
                <li class="list-group-item"><strong>Rating</strong> : {{ $product->rating }} <span class="fa fa-star"></span></li>
                <li class="list-group-item"><strong>Overview :</strong>
                    <p>{{ $product->description }}</p>
                </li>
            </ul>
            <!-- button-detail -->
            <div class="container px-4 mt-3">
                <div class="row gx-5">
                  <div class="col">
                        <a href="https://wa.me/6285624378677" class="btn btn__buy">Hubungi<i class="fa fa-whatsapp fa-1.5x ms-3" aria-hidden="true"></i></a>
                  </div>
                  <div class="col">
                    @guest
                        <a href="{{ route('login') }}" class="btn btn__fav">Fav<i class="fa fa-heart fa-1.5x ms-3" aria-hidden="true"></i></a>
                    @else
                        <form method="POST" action="{{ route('insert_favorite') }}">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type = "submit" class="btn btn__fav">Fav<i class="fa fa-heart fa-1.5x ms-3" aria-hidden="true"></i></button>
                        </form>
                    @endguest
                  </div>
                </div>
              </div>
              <!-- End button-detail -->
            </div>
        </div>
    </div>
<div>
{{-- End detail item --}}
@include('layout.client.footer')
@endsection
