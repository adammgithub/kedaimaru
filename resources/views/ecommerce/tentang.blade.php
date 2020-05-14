@extends('layouts.ecommerce')

@section('title')
    <title>Tentang | Kedai Maru</title>
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
            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">BERANDA</a></li>
            <li class="nav-item"><a href="{{ url('product') }}" class="nav-link">MENU</a></li>
            <li class="nav-item active"><a href="{{ url('tentang') }}" class="nav-link">TENTANG</a></li>
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

<!-- Section 1 -->
    <section class="home-slider owl-carousel img" style="background-image: url(temp/images/bg_3a.jpg);">
        <div class="slider-item" style="background-image: url(images/bg_3a.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Tentang</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tentang</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- End Section 1 -->

<!-- Section 2 -->
	<section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon">
	    						<span class="icon-phone"></span>
	    					</div>
	    					<div class="text">
	    						<h3>+62 853 4983 8388</h3>
	    						<p>Hubungi untuk pemesanan</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Samarinda</h3>
	    						<p>Jln. Cipto Mangunkusumo Kalimantan Timur</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Buka Senin-Jum'at</h3>
	    						<p>9:00 AM - 21:00 PM</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
            			<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            			<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            			<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-google"></span></a></li>
            		</ul>
	    		</div>
    		</div>
    	</div>
    </section>
    <!-- End Section 2 -->

    <!-- Section 3 -->
    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(temp/images/resto-1.jpg);"></div>
    	<div class="one-half ftco-animate">
        	<div class="heading-section ftco-animate ">
          		<h2 class="mb-4"><span class="flaticon-pizza"> SUSHI HOUSE</span> Restaurant</h2>
        	</div>
        	<div>
  				<p>Sushi House menyediakan berbagai macam masakan Jepang yang 100 % HALAL dengan citarasa Indonesia. Dengan banyak variasi menu serta tingkat kepedasan yang cocok untuk siapapun, kamu bisa menikmati makanan yang lezat ini dengan harga yang bersahabat.</p>
  			</div>
    	</div>
    </section>
<!-- End Section 3 -->

<!-- Section 4 -->
    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">PHP Pixie Team</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(temp/images/123.jpg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Muhammad Adam</a></h3>
      					<span class="position">Hair Specialist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" style="background-image: url(temp/images/wulan.jpeg);"></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Wulan Pratiwi</a></h3>
      					<span class="position">Beard Specialist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>
<!-- End Section 4 -->

<!-- Section 5 -->
<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
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
		              	<span>Pizza Branches</span>
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
<!-- End Section 5 -->
@endsection