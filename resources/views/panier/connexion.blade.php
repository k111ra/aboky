@extends('layouts.layout')

@section('title')
Connexion
@endsection

@section('content')

<section class="home-slider owl-carousel">

        <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

              <div class="col-md-7 col-sm-12 text-center ftco-animate">
                  <h1 class="mb-3 mt-5 bread">Finalisation</h1>
                  <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Acceuil</a></span> <span>Finalisation</span></p>
              </div>

            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 ftco-animate">
                          <form action="#" class="billing-form ftco-bg-dark p-3 p-md-5">
                              <h3 class="mb-4 billing-heading">Info client</h3>
                    <div class="row align-items-end">
                        <div class="col-md-6">
                      <div class="form-group">
                          <label for="firstname">Nom</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="lastname">Prenom</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="w-100"></div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="country">Ville</label>
                              <div class="select-wrap">
                            <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                            <select name="" id="" class="form-control">
                                <option value="">Abidjan</option>
                              <option value="">Yakro</option>
                              <option value="">Daloa</option>
                              <option value="">Bouaké</option>
                              <option value="">Khorogo</option>
                              <option value="">Tokio</option>
                            </select>
                          </div>
                          </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <label for="streetaddress">Address</label>
                        <input type="text" class="form-control" placeholder="adresse 1">
                      </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                        <input type="text" class="form-control" placeholder="Quartier, villa ou appartement">
                      </div>
                      </div>
                      <div class="w-100"></div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <label for="towncity"> Ville</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                      </div>

                      <div class="w-100"></div>
                      <div class="col-md-6">
                      <div class="form-group">
                          <label for="phone">téléphone</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="emailaddress">Email</label>
                        <input type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="w-100"></div>
                  <div class="col-md-12">
                      <div class="form-group mt-4">
                                          <div class="radio">
                                            <label class="mr-3"><input type="radio" name="optradio"> Crée un compte  </label>

                                          </div>
                                      </div>
                  </div>
                  </div>
                </form><!-- END -->



                <div class="row mt-5 pt-3 d-flex">
                    <div class="col-md-6 d-flex">
                        <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Panier</h3>
                            <p class="d-flex">
                                      <span>total</span>
                                      <span>4000f CFA</span>
                                  </p>
                                  <p class="d-flex">
                                      <span>Delivery</span>
                                      <span>0.00</span>
                                  </p>
                                  <p class="d-flex">
                                      <span>Discount</span>
                                      <span>0.00</span>
                                  </p>
                                  <hr>
                                  <p class="d-flex total-price">
                                      <span>Total</span>
                                      <span>0.00</span>
                                  </p>
                                  </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-detail ftco-bg-dark p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Mode de Payement</h3>
                                      <div class="form-group">
                                          <div class="col-md-12">
                                              <div class="radio">
                                                 <label><input type="radio" name="optradio" class="mr-2"> Prelevement Banquaire</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-md-12">
                                              <div class="radio">
                                                 <label><input type="radio" name="optradio" class="mr-2">  payement mobile</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-md-12">
                                              <div class="radio">
                                                 <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-md-12">
                                              <div class="checkbox">
                                                 <label><input type="checkbox" value="" class="mr-2"> J'ai lu et j'accepte les conditions</label>
                                              </div>
                                          </div>
                                      </div>
                                      <p><a href="#"class="btn btn-primary py-3 px-4">Valider</a></p>
                                  </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->




            <div class="col-xl-4 sidebar ftco-animate">
              <div class="sidebar-box">
                <form action="#" class="search-form">
                  <div class="form-group">
                      <div class="icon">
                        <span class="icon-search"></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Search...">
                  </div>
                </form>
              </div>
              <div class="sidebar-box ftco-animate">
                <div class="categories">
                  <h3>Categories</h3>
                  <li><a href="#">Tour <span>(12)</span></a></li>
                  <li><a href="#">Hotel <span>(22)</span></a></li>
                  <li><a href="#">Coffee <span>(37)</span></a></li>
                  <li><a href="#">Drinks <span>(42)</span></a></li>
                  <li><a href="#">Foods <span>(14)</span></a></li>
                  <li><a href="#">Travel <span>(140)</span></a></li>
                </div>
              </div>

              <div class="sidebar-box ftco-animate">
                <h3>Blog</h3>
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div>
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                      <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                      <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="sidebar-box ftco-animate">
                <h3>Tag Cloud</h3>
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">dish</a>
                  <a href="#" class="tag-cloud-link">menu</a>
                  <a href="#" class="tag-cloud-link">food</a>
                  <a href="#" class="tag-cloud-link">sweet</a>
                  <a href="#" class="tag-cloud-link">tasty</a>
                  <a href="#" class="tag-cloud-link">delicious</a>
                  <a href="#" class="tag-cloud-link">desserts</a>
                  <a href="#" class="tag-cloud-link">drinks</a>
                </div>
              </div>


            </div>

          </div>
        </div>
      </section> <!-- .section -->
@endsection
