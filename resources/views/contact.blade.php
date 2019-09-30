@extends('layouts.layout')

@section('title')
Contacts
@endsection

@section('content')

<section class="home-slider owl-carousel">


    <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Contactez Nous </h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil</a></span>
                        <span>Contact</span></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container mt-5">
        <div class="row block-9">
            <div class="col-md-4 contact-info ftco-animate">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <h2 class="h4">Information</h2>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Adresse:</span> Angré Terminus 81 80, Cocody, Côte d'ivoire</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Telephone:</span> <a href="tel://0022549222123">
                                (+225) 49 222 123</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">contact@ac2s.digital</a></p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p><span>site-Web:</span> <a href="#">AC2S.digital</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 ftco-animate">
                <form action="#" class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nom & Prenoms">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Objet">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer " class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div id="map"></div>

@endsection
