@extends('fe.master')
@section('content')
<div class="header-carousel">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{ asset('front-end/img/home2.jpg')}}" class="img-fluid w-100" alt="First slide"/>
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Dapatkan Kredit Motor dengan Cicilan Terjangkau</h1>
                                    <p class="text-white">Rencanakan perjalananmu dengan motor idaman sekarang!</p>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="carousel-item">
                <img src="{{ asset('back-end/img/carousel-1.jpg')}}" class="img-fluid w-100" alt="Second slide"/>
                <div class="carousel-caption">
                    <div class="container py-4">
                        <div class="row g-5">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                                <div class="text-start">
                                    <h1 class="display-5 text-white">Get 15% off your rental! Choose Your Model</h1>
                                    <p class="text-white">Treat yourself in USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

@endsection

   

