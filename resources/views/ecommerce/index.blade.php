@extends('layouts.ecommerce')

@section('title')
	<title>Kedai Sushi</title>
@endsection

@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="/">
      <span></span>KEDAI<br><small>MARU</small>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        @if (Route::has('login'))
          @auth
            <li class="nav-item"><a href="{{ url('product') }}" class="nav-link">MENU</a></li>
            <li class="nav-item"><a href="{{ url('tentang') }}" class="nav-link">TENTANG</a></li>
            <li class="nav-item"><a href="{{ route('front.list_cart') }}" class="nav-link"><span class="icon-shopping-cart"></span></a></li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: yellow;">
                <span class="icon-user"></span> PROFILE<span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Keluar') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
            </li>
            @else
              <li class="nav-item"><a href="login" class="nav-link">MENU</a></li>
              <li class="nav-item"><a href="login" class="nav-link">TENTANG</a></li>
              <li class="nav-item active"><a href="{{ route('login') }}" class="nav-link"><span class="icon-unlock-alt"></span>  MASUK</a>
              <li class="nav-item active"><a href="{{ route('register') }}" class="nav-link"><span class="icon-users"></span>  DAFTAR</a>
          @endauth
        @endif
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Slider -->
  <section class="home-slider owl-carousel img" style="background-image: url(temp/images/bg_3a.jpg);">
    <div class="slider-item">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text align-items-center" data-scrollax-parent="true">
          <div class="col-md-6 col-sm-12 ftco-animate">
            <span class="subheading">Datang dan nikmati !</span>
            <h1 class="mb-4">Sushi</h1>
            <p class="mb-4 mb-md-5">Makanan asal khas Jepang, yang terdiri dari nasi yang dibentuk dengan unik bersama lauk yang berupa makanan laut, daging, serta sayuran mentah atau yang sudah dimasak.</p>
            <p>
              @if (Route::has('login'))
                                @auth
                                    <a href="keranjang" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                    <a href="menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                    @else
                                        <a href="login" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                        <a href="login" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                @endauth
                            @endif
            </p>
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
                    <span class="subheading">Datang dan nikmati !</span>
                    <h1 class="mb-4">Ramen</h1>
                    <p class="mb-4 mb-md-5">Mie halus yang disajikan dengan kuah dan topping khas, akan membuat selera makan anda menjadi nikmat.</p>
                    <p>
                          @if (Route::has('login'))
                                    @auth
                                        <a href="keranjang" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                        <a href="menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                        @else
                                            <a href="login" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                            <a href="login" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                    @endauth
                                @endif
                    </p>
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
                    <span class="subheading">Selamat Datang <dir></dir></span>
                    <h1 class="mb-4">KEDAI MARU</h1>
                    <p class="mb-4 mb-md-5">Kami menyediakan berbagai olahan makanan khas jepang yang dapat anda nikmati bersama teman serta keluarga.</p>
                    <p>
                                @if (Route::has('login'))
                                    @auth
                                        <a href="keranjang" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                        <a href="menu" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                        @else
                                            <a href="login" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan</a>
                                            <a href="login" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a>
                                    @endauth
                                @endif
                            </p>
                  </div>
              </div>
            </div>
      </div>
    </section>
  <!-- End Slider -->

    <section class="ftco-intro">
      <div class="container-wrap">
        <div class="wrap d-md-flex">
          <div class="info">
            <div class="row no-gutters">
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-phone"></span></div>
                <div class="text">
                  <h3>+62 8950 1408 877</h3>
                  <p>Customer Service</p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-my_location"></span></div>
                <div class="text">
                  <h3>Jl. Ciptomagunkusumo Harapan baru</h3>
                  <p>(Depan Kampus POLNES)</p>
                </div>
              </div>
              <div class="col-md-4 d-flex ftco-animate">
                <div class="icon"><span class="icon-clock-o"></span></div>
                <div class="text">
                  <h3>Buka Senin-Jumat</h3>
                  <p>8:00am - 21:00pm</p>
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
      <div class="one-half img" style="background-image: url(temp/images/resto-1.jpg);"></div>
      <div class="one-half ftco-animate">
          <div class="heading-section ftco-animate ">
              <h2 class="mb-4"><span> KEDAI MARU</span> Restaurant</h2>
          </div>
          <div>
          <p>Sushi House menyediakan berbagai macam masakan Jepang yang 100 % HALAL dengan citarasa Indonesia. Dengan banyak variasi menu serta tingkat kepedasan yang cocok untuk siapapun, kamu bisa menikmati makanan yang lezat ini dengan harga yang bersahabat.</p>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-services">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Layanan</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Makanan Sehat</h3>
                <p>Bahan yang digunakan merupakan 100 % sehat dan tidak mengandung bahan berbahaya.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
                <span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pengantaran Cepat</h3>
                <p>Pengantaran cepat untuk anda yang melakukan pemesanan secara online, dan terpercaya.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Resep Asli</h3>
                <p>Menggunakan bahan asli dan resep original.</p>
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
            <h2 class="mb-4">Menu Favorit</h2>
            <p class="flip">
              <span class="deg1"></span>
              <span class="deg2"></span>
              <span class="deg3"></span>
            </p>
          </div>
        </div>
      </div>
      <div class="container-wrap">
        <div class="row no-gutters d-flex">
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img" style="background-image: url(temp/images/ChickenKatsu.jpg);"></a>
              <div class="text p-4">
                <h3>Chicken Katsu</h3>
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
              <a href="#" class="img" style="background-image: url(temp/images/sushi_salmon.jpeg);"></a>
              <div class="text p-4">
                <h3>Sushi Salmon</h3>
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
              <a href="#" class="img order-lg-last" style="background-image: url(temp/images/Tempura-Miso-Ramen.jpg);"></a>
              <div class="text p-4">
                <h3>Tempura Miso Ramen</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                <p class="price"><span>$2.90</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Order</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 d-flex ftco-animate">
            <div class="services-wrap d-flex">
              <a href="#" class="img order-lg-last" style="background-image: url(temp/images/ChickenTeriyaki.jpg);"></a>
              <div class="text p-4">
                <h3>Chicken Teriyaki</h3>
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
            <a class="gallery img d-flex align-items-center" style="background-image: url(temp/images/foto-1.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a class="gallery img d-flex align-items-center" style="background-image: url(temp/images/foto-2.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a class="gallery img d-flex align-items-center" style="background-image: url(temp/images/foto-3.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a class="gallery img d-flex align-items-center" style="background-image: url(temp/images/foto-4.jpg);">
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
            <h3 class="mb-3">Hubungi Kami</h3>
            <form action="#" class="appointment-form">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Masukkan Nama Anda">
                </div>
              </div>
              <div class="d-me-flex">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Masukkan E-Mail Anda">
                </div>
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Pesan Anda"></textarea>
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