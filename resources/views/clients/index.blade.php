@extends('layout.client')

@section('content')

<!-- Carousel -->
@include('layout.client.carousel')
<!-- End Carousel -->

<!-- Most Populer Product -->
<div class="container-fluid most_popular_product">
    <h2 class="text-center">Most Populer Product</h2>
    <!-- Card Product-->
    <div class="row">
        @if (count($favorite_products) == 0)
            <h3 class="text-center">"please add the product to favorites first"</h3>
        @else
            @foreach ($favorite_products as $popular)
                <div class="col-md-4 d-flex justify-content-center container__card">
                    <div class="card card__item" style="width: 20rem">
                        <img src="{{ asset('product_img/'.$popular->products->link_img) }}" class="card-img-top" alt="{{ $popular->products->link_img }}" style="height: 230px;" />
                        <div class="card__price">Rp. {{ $popular->products->price }}</div>
                        <div class="card-body">
                            <h5 class="card-title"><a tabindex="0" href="">{{ $popular->products->name }}</a></h5>
                            <p class="card__rating">
                                Rating : <span class="fa fa-star"></span>
                                <span class="card__rating__value" aria-label="rating ">{{ $popular->products->rating }}</span>
                            </p>
                            <p class="card-text">{{ $popular->products->description }}</p>
                            <a href="https://wa.me/6285624378677" class="btn btn__buy">Hubungi<i class="fa fa-whatsapp fa-1.5x ms-3" aria-hidden="true"></i></a>
                            @guest
                                <a href="{{ route('login') }}" class="btn btn__fav">Fav<i class="fa fa-heart fa-1.5x ms-3" aria-hidden="true"></i></a>
                            @else
                                <form method="POST" action="{{ route('insert_favorite') }}">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $popular->product_id }}">
                                    <button type = "submit" class="btn btn__fav">Fav<i class="fa fa-heart fa-1.5x ms-3" aria-hidden="true"></i></button>
                                </form>
                            @endguest
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <!-- Card Product-->
</div>
<!-- End most Populer Product -->

<!-- Hero -->
@include('layout.client.hero')
<!-- End Hero -->

<!-- About -->
@include('layout.client.about')
<!-- End About -->

@include('layout.client.footer')

@endsection
