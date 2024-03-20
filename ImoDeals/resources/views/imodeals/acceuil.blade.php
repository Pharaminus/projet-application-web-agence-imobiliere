@extends('base')

@section('title', 'acceuil')

@section('contenu')
    <style>

    </style>

    <div class="row" style="height: 85%;">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active h-100"
                    style="background-image: url('{{ asset('assets/img/slide-1.jpg') }}')">
                    <div class="carousel-description">
                        <span>Louer</span> une <br> maison
                        
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('{{ asset('assets/img/slide-2.jpg') }}')">
                    <div class="carousel-description">
                        <span>Achertes</span> des <br> maisons
                        
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('{{ asset('assets/img/slide-3.jpg') }}')">
                    <div class="carousel-description">
                        <span>Vendez</span> vos <br> maisons
                        
                    </div>

                </div>
                <div class="carousel-item" style="background-image: url('{{ asset('assets/img/slide-2.jpg') }}')">
                    <div class="carousel-description">
                        <span>Projet</span> immobilier
                        
                    </div>

                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
{{-- ===( block pour la presentation des services )======== --}}
    <div class="container-lg" id="presentation-service">
        <div class="row ms-3 mb-5 nos-services">
            Nos services
        </div>
        <div class="row services">
            <div class="col-4">
                <div class="row  title-row">
                    <p>Location de maison</p>
                </div>
                <div class="row desc-row">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea dolorem sapiente quam facere, modi quibusdam molestias et distinctio aliquam sequi nemo sint quisquam excepturi sed repellat tenetur, commodi natus necessitatibus?</p>
                </div>
            </div>
            <div class="col-4">
                <div class="row title-row">
                    <p>Achat/Vente de maisons</p>
                </div>
                <div class="row desc-row">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus odit corrupti vitae quia, laudantium quibusdam veritatis soluta provident architecto asperiores nostrum odio in deleniti molestias quae non voluptas accusamus! Totam?</p>
                </div>
            </div>
            <div class="col-4">
                <div class="row title-row">
                    <p>Projet</p>
                </div>
                <div class="row desc-row">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nemo eaque officiis quod explicabo, harum numquam fuga officia quaerat asperiores id iure optio, molestias commodi quia ea perspiciatis, assumenda porro.</p>
                </div>
            </div>

        </div>
    </div>

    {{-- ========( block pour la presentation des proprietes )====== --}}
    <div class="container" id="presentation-propriete">

    </div>



@endsection
