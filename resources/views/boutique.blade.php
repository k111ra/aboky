@extends('layouts.layout')

@section('title')
Boutique
@endsection

@section('content')

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Commander en ligne</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil</a></span>
                        <span>Boutique</span></p>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="ftco-menu mb-5 pb-5">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#v-pills-0"
                                role="tab" aria-controls="v-pills-0" aria-selected="true">Café</a>

                            <a class="nav-link" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab"
                                aria-controls="v-pills-1" aria-selected="false">Machine à Café</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab"
                                aria-controls="v-pills-2" aria-selected="false">Capsules</a>

                            <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab"
                                aria-controls="v-pills-3" aria-selected="false">Accéssoires</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-0" role="tabpanel"
                                aria-labelledby="v-pills-0-tab">
                                <div class="row">
                                        @if(!empty($produits) and $produits->count() > 0)
                                        @foreach($produits as $produit)
                                    <div class="col-md-3">
                                        <div class="menu-entry">
                                            <a href="#" class="img"
                                                style="background-image: url(images/menu-1.jpg);"></a>
                                            <div class="text text-center pt-4">
                                                <h3><a href="product-single.html"><?php echo $produit->name?></a></h3>
                                                <p><?php echo $produit->description?></p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach
                                        @else
                                        <p>Il n'y a pas de pack disponible !!!</p>

                                        @endif

                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/coffee-206142_640.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Machine à café</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/coffee-869203_640.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Machine à café</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/coffee-984328_640.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Machine à café</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/capsule-cafe-bresil-arabica.jpg.png);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Capsule de café</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/capsule-cafe-ethiopie-arabica.jpg.png);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Capsule de café</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/capsule.png);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Capsule de café</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/capsule-cafe-ethiopie-arabica.jpg.png);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Capsule de café</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/capsule.png);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Capsule de café</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/capsule-cafe-bresil-arabica.jpg.png);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Capsule de café</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/morning-819362_640.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Accéssoires</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/coffee-2589761_640.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Accéssoires</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/coffee-984328_640.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Accéssoires</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/coffee-869203_640.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Accéssoires</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/coffee-984328_640.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Accéssoires</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url(images/coffee-171653_640.jpg);"></a>
                                            <div class="text">
                                                <h3><a href="product-single.html">Accéssoires</a></h3>
                                                <p>Far far away, behind the word mountains, far from the countries
                                                    Vokalia and Consonantia.</p>
                                                <p class="price"><span>2 000f CFA</span></p>
                                                <p><a href="cart.html"
                                                        class="btn btn-primary btn-outline-primary">Panier</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
