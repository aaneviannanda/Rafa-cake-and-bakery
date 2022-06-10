<div id="demo" class="carousel slide hero__section" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/hero-01.png') }}" alt="Roti unyil" class="d-block" style="width: 100%" />
            <div class="carousel-caption">
                <h1>Rafa Cake & Bakery</h1>
                <a href="{{ route('product') }}" class="btn button__explore">Explore Products</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/hero-02.png') }}" alt="Roti Gulung Keju" class="d-block" style="width: 100%" />
            <div class="carousel-caption">
                <h1>Choose Products & Let's Go</h1>
                <a href="{{ route('product') }}" class="btn button__explore">Explore Products</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/hero-03.png') }}" alt="Cake Bento" class="d-block" style="width: 100%" />
            <div class="carousel-caption">
                <h1>Premium Products</h1>
                <a href="{{ route('product') }}" class="btn button__explore">Explore Products</a>
            </div>
        </div>
    </div>
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
