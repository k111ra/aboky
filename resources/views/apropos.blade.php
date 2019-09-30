@extends('layouts.layout')

@section('title')
A Propos
@endsection

@section('content')
<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">A Propos</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil</a></span> <span>A
                            Propos</span></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate ">
                <span class="subheading">Decouvrez</span>
                <h2 class="mb-4">Notre Histoire</h2>
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, esse quidem? Eius nam possimus
                    repellat maxime exercitationem minima tempore fugit harum provident obcaecati cumque, molestias, at
                    qui, blanditiis commodi sed.</p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-right ftco-animate">
                    <span class="subheading">Découvrez</span>
                    <h2 class="mb-4">Nos Produits</h2>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the
                        coast of the Semantics, a large language ocean.</p>
                    <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Voir la boutique</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="menu-entry mt-lg-4">
                            <a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
