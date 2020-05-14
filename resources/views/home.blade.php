@extends('layouts.ecommerce')
@extends('layouts.module.navbaruser')

@section('title')
    <title>Kedai Sushi</title>
@endsection

@section('content')

    <section class="home-slider owl-carousel img" style="background-image: url(temp/images/bg_3a.jpg);">
      <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
                <span class="subheading">Delicious</span>
              <h1 class="mb-4">Japanese Sushi</h1>
              <p class="mb-4 mb-md-5">A Japanese dish consisting of small balls or rolls of vinegar-flavored cold cooked rice served with a garnish of raw fish, vegetables, or egg.</p>
              <p><a href="loginregister.html" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
                <img src="temp/images/bg_6.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
                <span class="subheading">Juicy</span>
              <h1 class="mb-4">Japanese Ramen</h1>
              <p class="mb-4 mb-md-5">A Japanese dish consisting of a clear broth containing thin white noodles and sometimes vegetables, meat, etc.</p>
              <p><a href="loginregister.html" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
                <img src="temp/images/bg_7.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(temp/images/bg_3a.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
                <span class="subheading">Welcome</span>
              <h1 class="mb-4">We Know How To Cook</h1>
              <p class="mb-4 mb-md-5">A Japanese Sushi House made for the final project.</p>
              <p><a href="loginregister.html" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
        <div class="container-wrap">
            <div class="wrap d-md-flex">
                <div class="info">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-phone"></span></div>
                            <div class="text">
                                <h3>+62 8950 1408 877</h3>
                                <p>Adam</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-my_location"></span></div>
                            <div class="text">
                                <h3>Jl. Ciptomagunkusumo Harapan baru</h3>
                                <p>Gang Kebangsaan No. 14</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="icon"><span class="icon-clock-o"></span></div>
                            <div class="text">
                                <h3>Open Monday-Friday</h3>
                                <p>8:00am - 9:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-md-flex pl-md-5 p-4 align-items-center">
                    <ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url(temp/images/about.jpg);"></div>
        <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Welcome to <span class="flaticon-pizza">Sushi</span> House</h2>
        </div>
        <div>
                <p>On behalf of Sushi House, we welcome you to our family of restaurants. At Sushi House, we have created a sophisticated, yet welcoming, atmosphere in which we create exceptional sushi, sashimi, nigrinizushi, cooked Asian dishes and more for your enjoyment. Dedicated to complete customer satisfaction, we hope that you will think of us as your favorite, local restaurant destination, no matter what the occasion!</p>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-services">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
            <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Healthy Foods</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Fastest Delivery</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Original Recipes</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Best Sellers</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters d-flex">
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/sushi-1.jpg);"></a>
                        <div class="text p-4">
                            <h3>California Roll</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/ramen-2.jpg);"></a>
                        <div class="text p-4">
                            <h3>Katsu Ramen</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img" style="background-image: url(temp/images/sushi-3.jpg);"></a>
                        <div class="text p-4">
                            <h3>Sake Nigiri</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/ramen-1.jpg);"></a>
                        <div class="text p-4">
                            <h3>Tonkotsu Ramen</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia </p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/sushi-2.jpg);"></a>
                        <div class="text p-4">
                            <h3>Hamachii Nigiri</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex ftco-animate">
                    <div class="services-wrap d-flex">
                        <a href="#" class="img order-lg-last" style="background-image: url(temp/images/ramen-3.jpg);"></a>
                        <div class="text p-4">
                            <h3>Shio Ramen</h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                            <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                    <div class="col-md-3 ftco-animate">
                        <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(temp/images/foto-1.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(temp/images/foto-2.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(temp/images/foto-3.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 ftco-animate">
                        <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(temp/images/foto-4.jpg);">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-search"></span>
                        </div>
                        </a>
                    </div>
        </div>
        </div>
    </section>


        <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(temp/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon"><span class="flaticon-pizza-1"></span></div>
                        <strong class="number" data-number="100">0</strong>
                        <span>Sushi House Branches</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon"><span class="flaticon-medal"></span></div>
                        <strong class="number" data-number="85">0</strong>
                        <span>Number of Awards</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon"><span class="flaticon-laugh"></span></div>
                        <strong class="number" data-number="10567">0</strong>
                        <span>Happy Customer</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <div class="icon"><span class="flaticon-chef"></span></div>
                        <strong class="number" data-number="900">0</strong>
                        <span>Staff</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </section>

        
        <section class="ftco-appointment">
            <div class="overlay"></div>
        <div class="container-wrap">
            <div class="row no-gutters d-md-flex align-items-center">
                <div class="col-md-6 d-flex align-self-stretch">
                    <div id="map"></div>
                </div>
                <div class="col-md-6 appointment ftco-animate">
                    <h3 class="mb-3">Contact Us</h3>
                    <form action="#" class="appointment-form">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="d-me-flex">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                  <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send" class="btn btn-primary py-3 px-4">
                </div>
                    </form>
                </div>              
            </div>
        </div>
    </section>

@endsection