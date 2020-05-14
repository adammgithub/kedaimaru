<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
		      <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Sushi<br><small>House</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{ route('front.index') }}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{ route('front.product') }}" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{ route('front.list_cart') }}" class="nav-link">Cart</a></li>
             <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fa fa-lock"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form></li>

	        </ul>
	      </div>
		  </div>
	  </nav>