@extends('layouts.ecommerce')

@section('title')
    <title>Keranjang Belanja | Kedai Maru</title>
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

    <!--================Home Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<div class="col-lg-12 ftco-animate p-md-5 fadeInUp ftco-animated">
						<div class="col-md-12 nav-link-wrap mb-5 heading-section">
							<h2>Keranjang Belanja</h2>
							<div class="page_link">
		                        <a href="{{ url('/') }}">Home</a> |
		                        <a href="{{ route('front.list_cart') }}">Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Cart Area =================-->
	<section class="cart_area">
		<div class="container">
			<div class="cart_inner">
                
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr style="text-align: center;">
								<th scope="col"><h4 style="color: #fac564;">Makanan</h4></th>
								<th scope="col"><h4 style="color: #fac564;">Harga</h4></th>
								<th scope="col"><h4 style="color: #fac564;">Jumlah</h4></th>
								<th scope="col"><h4 style="color: #fac564;">Total</h4></th>
							</tr>
						</thead>
						<tbody>
               					 @forelse ($carts as $row)
							<tr style="color: white;">
								<td>
									<div class="media">
										<div class="d-flex">
                                            <img src="{{ asset('storage/products/' . $row['product_image']) }}" width="100px" height="100px" alt="{{ $row['product_name'] }}" style="display: block; -webkit-border-radius: 50%;">
										</div>
										<div class="media-body">
                                            <h5>{{ $row['product_name'] }}</h5>
										</div>
									</div>
								</td>
								<td style="text-align: center;">
                                    <h5>Rp {{ number_format($row['product_price']) }}</h5>
								</td>
								<td>
									<form action="{{ route('front.update_cart') }}" method="post">
                    @csrf
									<div class="form-group row">
                                        <input type="number" name="qty[]" id="sst{{ $row['product_id'] }}" maxlength="12" value="{{ $row['qty'] }}" title="Quantity:" class="input-text qty" style="width: 70px; margin-right: 10px; text-align: center;  ">
                                        <input type="hidden" name="product_id[]" value="{{ $row['product_id'] }}" class="form-control">
										<!-- <button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
										 class="increase items-count" type="button">
											<i class="lnr lnr-chevron-up"></i>
										</button>
										<button onclick="var result = document.getElementById('sst{{ $row['product_id'] }}'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
										 class="reduced items-count" type="button">
											<i class="lnr lnr-chevron-down"></i>
										</button> -->
										<button class="btn btn-secondary btn-sm" style="margin-right: 25px;"><i class="icon-edit"></i></button>
									</div>
									</form>
								</td>
								<td>
                                    <h5 style="text-align: center;">
                                    Rp {{ number_format($row['product_price'] * $row['qty']) }}</h5>
								</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">Tidak ada belanjaan</td>
                            </tr>
                            @endforelse
							<tr>
								<td>

								</td>
								<td>

								</td>
								<td>
									<h4 style="color: #fac564; text-align: center;">Subtotal</h4>
								</td>
								<td>
                                    <h5 style="text-align: center;">Rp {{ number_format($subtotal) }}</h5>
								</td>
							</tr>
							{{-- <tr class="shipping_area">
								<td></td>
								<td></td>
								<td>
									<h5>Shipping</h5>
								</td>
								<td>
									<div class="shipping_box">
										<ul class="list">
											<li>
												<a href="#">Flat Rate: $5.00</a>
											</li>
											<li>
												<a href="#">Free Shipping</a>
											</li>
											<li>
												<a href="#">Flat Rate: $10.00</a>
											</li>
											<li class="active">
												<a href="#">Local Delivery: $2.00</a>
											</li>
										</ul>
										<h6>Calculate Shipping
											<i class="fa fa-caret-down" aria-hidden="true"></i>
										</h6>
										<select class="shipping_select">
											<option value="1">Bangladesh</option>
											<option value="2">India</option>
											<option value="4">Pakistan</option>
										</select>
										<select class="shipping_select">
											<option value="1">Select a State</option>
											<option value="2">Select a State</option>
											<option value="4">Select a State</option>
										</select>
										<input type="text" placeholder="Postcode/Zipcode">
										<a class="gray_btn" href="#">Update Details</a>
									</div>
								</td>
							</tr> --}}
							<tr class="out_button_area">
								<td></td>
								<td></td>
								<td></td>
								<td>
									<div class="checkout_btn_inner">
										<a class="gray_btn" href="{{ route('front.product') }}">Continue Shopping</a>
										<a class="main_btn" href="{{ route('front.checkout') }}">Proceed to checkout</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Cart Area =================-->
@endsection