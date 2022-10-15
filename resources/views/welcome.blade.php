@extends('layout.app')
@section('title')
    главная страница
@endsection
@section('main')
    <div class="container">
        <div class="row">
            <div class="coll-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://traveltimes.ru/wp-content/uploads/2021/06/2345313173.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://traveltimes.ru/wp-content/uploads/2021/09/canada-kvebek-siti-24471.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="http://canadago.ru/assets/blog/193.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <h2>это заголовок</h2>
            </div>
            <div class="col-6">
                <p>это текс</p>
            </div>
        </div>
    </div>
@endsection
