@extends('layout.client')
@section('content')
<div class="contact__rafa">
    <h2 class="text-center">Contact Us</h2>
    <div class="container-fluid">
        <section id="contact">
            <div class="container contact__desc">
                <p class="text-center w-75 m-auto">Let's make something awesome together. 
                    Contact me if you want to know more about rafa cake & bakery. 
                    We hope you are satisfied with our products and services.</p>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                                <h4 class="text-uppercase mb-5">call us</h4>
                                <p>+62856-2437-8677</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <i class="fa fa-whatsapp fa-5x mb-3" aria-hidden="true"></i>
                                <h4 class="text-uppercase mb-5">WhatsApp</h4>
                                <address>+62856-2437-8677</address>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                                <h4 class="text-uppercase mb-5">Store location</h4>
                                <address>Jl.Kandang Perahu Gang Jati No.42, Karyamulya, Kec.Kesambi, Kota Cirebon, Jawa Barat 45131r</address>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 my-5">
                        <div class="card border-0">
                            <div class="card-body text-center">
                                <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                                <h4 class="text-uppercase mb-5">email</h4>
                                <p>rafacake@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gmaps Location -->
                <div class="location__rafa d-flex justify-content-center">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.Kandang%20Perahu%20Gang%20Jati%20No.42,%20Karyamulya,%20Kec.Kesambi,%20Kota%20Cirebon,%20Jawa%20Barat%2045131&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            <a href="https://123movies-to.org"></a>
                            <br>
                            <style>.mapouter{position:relative;text-align:right;height:500px;width: 100%;}</style>
                            <a href="https://www.embedgooglemap.net">google maps widget html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
                        </div>
                    </div>
                </div>
                <!-- End gmaps location -->
            </div>
        </section>
    </div>
<div>
@include('layout.client.footer')
@endsection