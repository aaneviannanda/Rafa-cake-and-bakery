@extends('layout.client')

@section('content')

<!-- Carousel -->
@include('layout.client.carousel')
<!-- End Carousel -->

<!-- Most Populer Product -->
<div class="container-fluid most_popular_product">
    <h2 class="text-center">Products</h2>
    <!-- Card Product-->
    @foreach ($data as $key => $products)
        <div class="row">
            <h3 class="product__category">{{ $key }} Product</h3>
            @foreach ($products as $product)
                <div class="col-md-4 d-flex justify-content-center container__card">
                    <div class="card card__item" style="width: 20rem">
                        <img src="{{ asset('product_img/'.$product['link_img']) }}" class="card-img-top" alt="{{ $product['link_img'] }}" style="height: 230px;"/>
                        <div class="card__price">Rp. {{ $product['price'] }}</div>
                        <div class="card-body">
                            <h5 class="card-title"><a tabindex="0" href="{{ route('product_detail', ['id' => $product['id']]) }}">{{ $product['name'] }}</a></h5>
                            <p class="card__rating">
                                Rating : <span class="fa fa-star"></span>
                                <span class="card__rating__value" aria-label="rating ">{{ $product['rating'] }}</span>
                            </p>
                            <p class="card-text">{{ $product['description'] }}</p>
                            <a href="https://wa.me/6285624378677" class="btn btn__buy">Hubungi<i class="fa fa-whatsapp fa-1.5x ms-3" aria-hidden="true"></i></a>
                            @guest
                                <a href="{{ route('login') }}" class="btn btn__fav">Fav<i class="fa fa-heart fa-1.5x ms-3" aria-hidden="true"></i></a>
                            @else
                                <form method="POST" action="{{ route('insert_favorite') }}">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                    <button type = "submit" class="btn btn__fav">Fav<i class="fa fa-heart fa-1.5x ms-3" aria-hidden="true"></i></button>
                                </form>
                            @endguest
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
    <!-- Card Product-->
</div>
<!-- End most Populer Product -->

@include('layout.client.footer')

@endsection
