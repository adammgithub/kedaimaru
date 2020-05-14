@extends('layouts.ecommerce')

@section('title')
    <title>Menu | Kedai Maru</title>
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
            <li class="nav-item active"><a href="{{ url('product') }}" class="nav-link">MENU</a></li>
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

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_gap">
        <div class="container-fluid">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="col-lg-12 ftco-animate p-md-5 fadeInUp ftco-animated">
                        <div class="col-md-12 nav-link-wrap mb-5 heading-section">
                            <h2 class="mb-4" style="text-align: center;">Menu Kami</h2>
                            <p class="flip">
                                <span class="deg1"></span>
                                <span class="deg2"></span>
                                <span class="deg3"></span>
                            </p>
                        </div>
                    </div>
                    <div class="product_top_bar">
                        <!-- <div class="left_dorp">
                            <select class="sorting">
                                <option value="1">Default sorting</option>
                                <option value="2">Default sorting 01</option>
                                <option value="4">Default sorting 02</option>
                            </select>
                            <select class="show">
                                <option value="1">Show 12</option>
                                <option value="2">Show 14</option>
                                <option value="4">Show 16</option>
                            </select>
                        </div> -->
                        
                    </div>
                    <div class="latest_product_inner row">
                      
                      	<!-- PROSES LOOPING DATA PRODUK, SAMA DENGAN CODE YANG ADDA DIHALAMAN HOME -->
                        @forelse ($products as $row)
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="f_p_item">
                                <div class="f_p_img">
                                    <div class="card" style="margin-bottom: 20px; height: auto; background-position: center center; background-size: cover; border-radius: 50%;">
                                        <img src="{{ asset('storage/products/' . $row->image) }}" alt="{{ $row->name }}" class="card-img-top mx-auto" style="height: 200px;display: block; -webkit-border-radius: 50%;">
                                        <div class="p_icon">
                                            <a href="{{ url('/product/' . $row->slug) }}">
                                                <i class="lnr lnr-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                <a href="{{ url('/product/' . $row->slug) }}">
                                    <h5 style="text-align: center;">{{ $row->name }}</h5>
                                </a>
                                <h6 style="text-align: center; font-size: 15px;">{{ $row->description }}</h6>
                                <p class="price" style="text-align: center;">
                                    <span>Rp {{ number_format($row->price) }}</span>
                                </p>
                            </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-md-12">
                             <h3 class="text-center">Tidak ada produk</h3>
                        </div>
                        @endforelse
                      <!-- PROSES LOOPING DATA PRODUK, SAMA DENGAN CODE YANG ADDA DIHALAMAN HOME -->
                    </div>
                    <div class="right_page ml-auto">
                        {{ $products->links() }}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets cat_widgets">
                            <div class="l_w_title">
                                <div class="col-lg-12 ftco-animate p-md-5 fadeInUp ftco-animated">
                                    <div class="col-md-12 nav-link-wrap mb-5 heading-section">
                                        <h4 class="mb-4" style="text-align: center;">Kategori Produk</h4>
                                        <p class="flip">
                                            <span class="deg1"></span>
                                            <span class="deg2"></span>
                                            <span class="deg3"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                  
                                    <!-- PROSES LOOPING DATA KATEGORI -->
                                    @foreach ($categories as $category)
                                    <li>
                                        <!-- JIKA CHILDNYA ADA, MAKA KATEGORI INI AKAN MENG-EXPAND DATA DIBAWAHNYA -->
                                         <strong><a class="navbar" href="{{ url('/category/' . $category->slug) }}">{{ $category->name }}</a></strong>
                                        
                                        <!-- PROSES LOOPING DATA CHILD KATEGORI -->
                                        @foreach ($category->child as $child)
                                          <ul class="list" style="display: block">
                                            <li>
                                                 <a href="{{ url('/category/' . $child->slug) }}">{{ $child->name }}</a>
                                            </li>
                                        </ul>
                                        @endforeach
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>

            <!-- GENERATE PAGINATION PRODUK -->
            <!-- <div class="row">
                {{ $products->links() }}
            </div> -->
        </div>
    </section>
    <!--================End Category Product Area =================-->
@endsection