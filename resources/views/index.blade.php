@extends('layouts.app')
@section('content')
    <div class="container-fluid my-carousel">

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel"
            data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </div>

    <x-cards></x-cards>

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title">Наши преимущества</h3>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <p class="text-center"><i class="fas fa-shipping-fast"></i></p>
                        <p>Прямые поставки от производителей</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <p class="text-center"><i class="fas fa-cubes"></i></p>
                        <p>Широкий ассортимент товара</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <p class="text-center"><i class="fas fa-hand-holding-usd"></i></p>
                        <p>Приятные и конкуретные цены</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <p class="text-center"><i class="fas fa-user-cog"></i></p>
                        <p>Профессиональная консультация и сервис</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
