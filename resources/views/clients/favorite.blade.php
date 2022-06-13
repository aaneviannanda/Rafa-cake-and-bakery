@extends('layout.client')
@section('content')
    <!-- Favorite -->
    <div class="container-fluid my__favorite">
        @if (Session::has('fav-error'))
            <script>swal("Failed actions!", "{{ Session::get('fav-error') }}", "error");</script>
        @endif
        <h2 class="text-center">My Favorite</h2>
        <div class="row">
            @foreach ($dataFavorites as $favorite)
                <div class="col-md-4 d-flex justify-content-center container__card">
                    <div class="card card__item" style="width: 20rem">
                        <img src="{{ asset('product_img/'.$favorite->products->link_img) }}" class="card-img-top" alt="{{ $favorite->products->link_img }}" style="height: 230px;" />
                        <div class="card__price">Rp. {{ $favorite->products->price }}</div>
                        <div class="card-body">
                            <h5 class="card-title"><a tabindex="0" href="{{ route('product_detail', ['id' => $favorite->products->id]) }}">{{ $favorite->products->name }}</a></h5>
                            <p class="card__rating">
                                Rating : <span class="fa fa-star"></span>
                                <span class="card__rating__value" aria-label="rating ">{{ $favorite->products->rating }}</span>
                            </p>
                            <p class="card-text">{{ $favorite->products->description }}</p>
                            <a href="https://wa.me/6285624378677" class="btn btn__buy">Hubungi<i class="fa fa-whatsapp fa-1.5x ms-3" aria-hidden="true"></i></a>
                            <form method="POST" action="{{ route('delete_favorite', ['id' => $favorite->id]) }}">
                                @csrf
                                <button type = "submit" class="btn btn__fav">UnFav<i class="fa fa-heart fa-1.5x ms-3" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    <div>
    <!-- End favorite-->
@include('layout.client.footer')
@endsection
