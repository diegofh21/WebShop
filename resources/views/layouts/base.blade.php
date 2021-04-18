<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Male_Fashion Template">
	<meta name="keywords" content="Male_Fashion, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="shortcut icon" href="storage/img/kalon-circle.ico" type="image/x-icon">

	<title>Kalon.val - @yield('title')</title>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
		rel="stylesheet">

	<!-- Css Styles -->
	<link rel="stylesheet" href="storage/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="storage/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="storage/css/elegant-icons.css" type="text/css">
	<link rel="stylesheet" href="storage/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="storage/css/nice-select.css" type="text/css">
	<link rel="stylesheet" href="storage/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="storage/css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" href="storage/css/style.css" type="text/css">

</head>

<body>
  <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

  <!-- Offcanvas Menu Begin -->
	<div class="offcanvas-menu-overlay"></div>
	<div class="offcanvas-menu-wrapper">
		<div class="offcanvas__option">
			<div class="offcanvas__links">
				@if (Route::has('login'))
					@auth
						<a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Perfil</a>
					@else
						<a href="{{ route('login') }}" class="">Iniciar Sesión</a>

						@if (Route::has('register'))
								<a href="{{ route('register') }}" class="">Registrarse</a>
						@endif
					@endauth
				@endif
			</div>
			<div class="offcanvas__top__hover">
				<span>Usd <i class="arrow_carrot-down"></i></span>
				<ul>
					<li>USD</li>
					<li>BSS</li>
				</ul>
			</div>
		</div>
		<div class="offcanvas__nav__option">
			<a href="#" class="search-switch"><img src="storage/img/icon/search.png" alt=""></a>
			<a href="#"><img src="storage/img/icon/heart.png" alt=""></a>
			<a href="/cart"><img src="storage/img/icon/cart.png" alt=""> <span>0</span></a>
			<div class="price">$0.00</div>
		</div>
		<div id="mobile-menu-wrap"></div>
		<div class="offcanvas__text">
			<p>Delivery gratis para toda la zona de Valencia norte y Naguanagua.</p>
		</div>
	</div>
	<!-- Offcanvas Menu End -->

  <!-- Header Section Begin -->
	<header class="header">
		<div class="header__top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-7">
						<div class="header__top__left">
							<p>Delivery gratis para toda la zona de Valencia norte y Naguanagua.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-5">
						<div class="header__top__right">
							<div class="header__top__links">
								@if (Route::has('login'))
                  @auth
                    <a href="{{ url('/profile') }}" class="text-sm text-gray-700 underline">{{ Auth::user()->name }}</a>
                  @else
                    <a href="{{ route('login') }}" class="">Iniciar Sesión</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="">Registrarse</a>
                    @endif
                  @endauth
                @endif
							</div>
							<div class="header__top__hover">
								<span>Usd <i class="arrow_carrot-down"></i></span>
								<ul>
									<li>USD</li>
									<li>BSS</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2">
					<div class="header__logo">
						<a class="mx-auto" href="/"><img src="storage/img/kalon-logo.png" alt=""></a>
					</div>
				</div>
				<div class="col-lg-7 col-md-7">
					<nav class="header__menu mobile-menu">
						<ul>
							<li class="@yield('index_active')"><a href="/">Inicio</a></li>
							<li class="@yield('shop_active')"><a href="/tienda">Tienda</a></li>
							<!-- <li><a href="#">Pages</a>
								<ul class="dropdown">
									<li><a href="./about.html">About Us</a></li>
									<li><a href="./shop-details.html">Shop Details</a></li>
									<li><a href="./shopping-cart.html">Shopping Cart</a></li>
									<li><a href="./checkout.html">Check Out</a></li>
									<li><a href="./blog-details.html">Blog Details</a></li>
								</ul>
							</li> -->
							<li class="@yield('about_active')"><a href="/sobre-nosotros">Sobre nosotros</a></li>
							<li class="@yield('contact_active')"><a href="/contacto">Contacto</a></li>
              <li class="@yield('faqs_active')"><a href="/faqs">FAQs</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-3 col-md-3">
					<div class="header__nav__option">
						<a href="#" class="search-switch"><img src="storage/img/icon/search.png" alt=""></a>
						<a href="#"><img src="storage/img/icon/heart.png" alt=""></a>
						<a href="#"><img src="storage/img/icon/cart.png" alt=""> <span>0</span></a>
						<div class="price">$0.00</div>
					</div>
				</div>
			</div>
			<div class="canvas__open"><i class="fa fa-bars"></i></div>
		</div>
	</header>
	<!-- Header Section End -->

  @yield('content')

  <!-- Footer Section Begin -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="footer__about">
						<div class="footer__logo">
							<a href="#"><img class="mx-auto rounded" src="storage/img/kalon-resize.png" alt=""></a>
						</div>
						<p class="text-light">¡La parte de tu outfit que no puede faltar!</p>
					</div>
				</div>
				<div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
					<div class="footer__widget">
						<h6>Tienda</h6>
						<ul>
							<li><a class="text-light" href="/shop">Ropa de hombres</a></li>
							<li><a class="text-light" href="/shop">Ropa de mujeres</a></li>
							<li><a class="text-light" href="/shop">Promociones</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer__widget">
						<h6>Navegación</h6>
						<ul>
							<li><a class="text-light" href="/">Inicio</a></li>
							<li><a class="text-light" href="/contacto">Contacto</a></li>
							<li><a class="text-light" data-toggle="modal" data-target="#metodosModal" style="cursor: pointer;">Métodos de Pago</a></li>
							<li><a class="text-light" data-toggle="modal" data-target="#deliveryModal" style="cursor: pointer;" >Delivery & Pickup</a></li>
						</ul>
					</div>

					<!-- Modal de metodos de pago -->
					<div class="modal fade" id="metodosModal" tabindex="-1" role="dialog" aria-labelledby="metodosModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title text-center" id="exampleModalLabel"><strong>Métodos de pago</strong></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>Nuestros métodos de pago son los siguientes:</p>
									<ul class="ml-3">
										<li>
											<p>Zelle</p>
										</li>
										<li>
											<p>Dólares ó Euros en efectivo (Solo Valencia)</p>
										</li>
										<li>
											<p>Dólares ó Euros por transferencia</p>
										</li>
										<li>
											<p>Transferencia nacional (Bs al cambio de la tasa del día por <a href="https://www.instagram.com/enparalelovzla/" class="text-primary">@enparalelovzla</a>)</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Modal de delivery -->
					<div class="modal fade" id="deliveryModal" tabindex="-1" role="dialog" aria-labelledby="deliveryModalLabel"
						aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title text-center" id="exampleModalLabel"><strong>Delivery</strong></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<img src="storage/img/kalon-ig/delivery.jpg" alt="">
								</div>
							</div>
						</div>
					</div>

				</div>

        {{-- Publicidad --}}
				<div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
					<div class="footer__widget">
						<h6>Publicidad</h6>
						<div class="footer__newslatter">
							<img class="rounded" src="storage/img/example600x400.png" alt="">
						</div>
					</div>
				</div>

			</div>
			<div class="row">
        {{-- Copyright --}}
				<div class="col-lg-12 text-center">
					<div class="footer__copyright__text">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<p class="text-light">Copyright ©
							<script>
								document.write(new Date().getFullYear());
							</script>
							Todos los derechos reservados | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
								href="https://colorlib.com" target="_blank">Colorlib</a>
						</p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>

			</div>
		</div>
	</footer>
	<!-- Footer Section End -->

	<!-- Búsqueda -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="¿Que quieres buscar?">
			</form>
		</div>
	</div>
	<!-- Búsqueda-->

	<!-- Js Plugins -->
	<script src="storage/js/jquery-3.3.1.min.js"></script>
	<script src="storage/js/bootstrap.min.js"></script>
	<script src="storage/js/jquery.nice-select.min.js"></script>
	<script src="storage/js/jquery.nicescroll.min.js"></script>
	<script src="storage/js/jquery.magnific-popup.min.js"></script>
	<script src="storage/js/jquery.countdown.min.js"></script>
	<script src="storage/js/jquery.slicknav.js"></script>
	<script src="storage/js/mixitup.min.js"></script>
	<script src="storage/js/owl.carousel.min.js"></script>
	<script src="storage/js/main.js"></script>
</body>