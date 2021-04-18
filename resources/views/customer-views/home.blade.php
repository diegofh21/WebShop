@extends('layouts.base')

@section('title', 'Inicio')

@section('index_active', 'active')

@section('content')

  <!-- Hero Section Begin -->
	<section class="hero">
		<div class="hero__slider owl-carousel">
			<div class="hero__items set-bg" data-setbg="storage/img/hero/hero-1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-7 col-md-8">
							<div class="hero__text">
								<h6>Collection Title</h6>
								<h2>Fall - Winter Collections 2030</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores pariatur voluptatum vitae sapiente quae saepe nesciunt est minima libero aliquam corrupti, recusandae enim. Eaque laboriosam libero soluta, id veniam perspiciatis!</p>
								<a href="#" class="primary-btn">Ver ahora <span class="arrow_right"></span></a>
								<div class="hero__social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hero__items set-bg" data-setbg="storage/img/hero/hero-2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-7 col-md-8">
							<div class="hero__text">
								<h6>Collection Title</h6>
								<h2>Fall - Winter Collections 2030</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nihil consectetur distinctio aliquid, facilis, earum aspernatur dolor temporibus consequatur mollitia quae odio voluptate odit recusandae corporis perferendis expedita facere explicabo.</p>
								<a href="#" class="primary-btn">Ver ahora <span class="arrow_right"></span></a>
								<div class="hero__social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero Section End -->

	<!-- Banner Section Begin -->
	<section class="banner spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 offset-lg-4">
					<div class="banner__item">
						<div class="banner__item__pic">
							<img src="storage/img/banner/banner-1.jpg" alt="">
						</div>
						<div class="banner__item__text">
							<h2>Colección Hollister 2021</h2>
							<a href="/shop">Ver ahora</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner Section End -->

	<!-- Product Section Begin -->
	<section class="product spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ul class="filter__controls">
						<li class="active" data-filter="*">Lo más vendidos</li>
						<li data-filter=".new-arrivals">Recien llegado</li>
						<li data-filter=".hot-sales">Promociones</li>
					</ul>
				</div>
			</div>
			<div class="row product__filter">
				<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
					<div class="product__item">
						<div class="product__item__pic set-bg" data-setbg="storage/img/product/product-1.jpg">
							<span class="label">Nuevo 🆕</span>
							<ul class="product__hover">
								<li><a href="#"><img src="storage/img/icon/heart.png" alt=""></a></li>
								<li><a href="#"><img src="storage/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
								<li><a href="#"><img src="storage/img/icon/search.png" alt=""></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6>Piqué Biker Jacket</h6>
							<a href="#" class="add-cart">+ Añadir al carrito</a>
							<!-- <div class="rating">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div> -->
							<h5>$67.24</h5>
							<div class="product__color__select">
								<label for="pc-1">
									<input type="radio" id="pc-1">
								</label>
								<label class="active black" for="pc-2">
									<input type="radio" id="pc-2">
								</label>
								<label class="grey" for="pc-3">
									<input type="radio" id="pc-3">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
					<div class="product__item">
						<div class="product__item__pic set-bg" data-setbg="storage/img/product/product-2.jpg">
							<ul class="product__hover">
								<li><a href="#"><img src="storage/img/icon/heart.png" alt=""></a></li>
								<li><a href="#"><img src="storage/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
								<li><a href="#"><img src="storage/img/icon/search.png" alt=""></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6>Piqué Biker Jacket</h6>
							<a href="#" class="add-cart">+ Añadir al carrito</a>
							<!-- <div class="rating">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div> -->
							<h5>$67.24</h5>
							<div class="product__color__select">
								<label for="pc-4">
									<input type="radio" id="pc-4">
								</label>
								<label class="active black" for="pc-5">
									<input type="radio" id="pc-5">
								</label>
								<label class="grey" for="pc-6">
									<input type="radio" id="pc-6">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
					<div class="product__item sale">
						<div class="product__item__pic set-bg" data-setbg="storage/img/product/product-3.jpg">
							<span class="label">20% Descuento 🔥</span>
							<ul class="product__hover">
								<li><a href="#"><img src="storage/img/icon/heart.png" alt=""></a></li>
								<li><a href="#"><img src="storage/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
								<li><a href="#"><img src="storage/img/icon/search.png" alt=""></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6>Multi-pocket Chest Bag</h6>
							<a href="#" class="add-cart">+ Añadir al carrito</a>
							<!-- <div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
							</div> -->
							<h5 style="text-decoration: line-through;">$43.48</h5>
							<h5 class="mt-2" style="color: red;">$34,78</h5>
							<div class="product__color__select">
								<label for="pc-7">
									<input type="radio" id="pc-7">
								</label>
								<label class="active black" for="pc-8">
									<input type="radio" id="pc-8">
								</label>
								<label class="grey" for="pc-9">
									<input type="radio" id="pc-9">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
					<div class="product__item">
						<div class="product__item__pic set-bg" data-setbg="storage/img/product/product-4.jpg">
							<ul class="product__hover">
								<li><a href="#"><img src="storage/img/icon/heart.png" alt=""></a></li>
								<li><a href="#"><img src="storage/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
								<li><a href="#"><img src="storage/img/icon/search.png" alt=""></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6>Diagonal Textured Cap</h6>
							<a href="#" class="add-cart">+ Añadir al carrito</a>
							<!-- <div class="rating">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div> -->
							<h5>$60.9</h5>
							<div class="product__color__select">
								<label for="pc-10">
									<input type="radio" id="pc-10">
								</label>
								<label class="active black" for="pc-11">
									<input type="radio" id="pc-11">
								</label>
								<label class="grey" for="pc-12">
									<input type="radio" id="pc-12">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
					<div class="product__item">
						<div class="product__item__pic set-bg" data-setbg="storage/img/product/product-5.jpg">
							<span class="label">Nuevo 🆕</span>
							<ul class="product__hover">
								<li><a href="#"><img src="storage/img/icon/heart.png" alt=""></a></li>
								<li><a href="#"><img src="storage/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
								<li><a href="#"><img src="storage/img/icon/search.png" alt=""></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6>Lether Backpack</h6>
							<a href="#" class="add-cart">+ Añadir al carrito</a>
							<!-- <div class="rating">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div> -->
							<h5>$31.37</h5>
							<div class="product__color__select">
								<label for="pc-13">
									<input type="radio" id="pc-13">
								</label>
								<label class="active black" for="pc-14">
									<input type="radio" id="pc-14">
								</label>
								<label class="grey" for="pc-15">
									<input type="radio" id="pc-15">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
					<div class="product__item">
						<div class="product__item__pic set-bg" data-setbg="storage/img/product/product-6.jpg">
							<span class="label">Nuevo 🆕</span>
							<ul class="product__hover">
								<li><a href="#"><img src="storage/img/icon/heart.png" alt=""></a></li>
								<li><a href="#"><img src="storage/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
								<li><a href="#"><img src="storage/img/icon/search.png" alt=""></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6>Ankle Boots</h6>
							<a href="#" class="add-cart">+ Añadir al carrito</a>
							<!-- <div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
							</div> -->
							<h5>$98.49</h5>
							<div class="product__color__select">
								<label for="pc-16">
									<input type="radio" id="pc-16">
								</label>
								<label class="active black" for="pc-17">
									<input type="radio" id="pc-17">
								</label>
								<label class="grey" for="pc-18">
									<input type="radio" id="pc-18">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
					<div class="product__item">
						<div class="product__item__pic set-bg" data-setbg="storage/img/product/product-7.jpg">
							<span class="label">Nuevo 🆕</span>
							<ul class="product__hover">
								<li><a href="#"><img src="storage/img/icon/heart.png" alt=""></a></li>
								<li><a href="#"><img src="storage/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
								<li><a href="#"><img src="storage/img/icon/search.png" alt=""></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6>T-shirt Contrast Pocket</h6>
							<a href="#" class="add-cart">+ Añadir al carrito</a>
							<!-- <div class="rating">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div> -->
							<h5>$49.66</h5>
							<div class="product__color__select">
								<label for="pc-19">
									<input type="radio" id="pc-19">
								</label>
								<label class="active black" for="pc-20">
									<input type="radio" id="pc-20">
								</label>
								<label class="grey" for="pc-21">
									<input type="radio" id="pc-21">
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
					<div class="product__item sale">
						<div class="product__item__pic set-bg" data-setbg="storage/img/product/product-8.jpg">
							<span class="label">15% Descuento 🔥</span>
							<ul class="product__hover">
								<li><a href="#"><img src="storage/img/icon/heart.png" alt=""></a></li>
								<li><a href="#"><img src="storage/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
								<li><a href="#"><img src="storage/img/icon/search.png" alt=""></a></li>
							</ul>
						</div>
						<div class="product__item__text">
							<h6>Basic Flowing Scarf</h6>
							<a href="#" class="add-cart">+ Añadir al carrito</a>
							<!-- <div class="rating">
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
							</div> -->
							<h5 style="text-decoration: line-through;">$26,28</h5>
							<h5 class="mt-2" style="color: red;">$22,33</h5>
							<div class="product__color__select">
								<label for="pc-22">
									<input type="radio" id="pc-22">
								</label>
								<label class="active black" for="pc-23">
									<input type="radio" id="pc-23">
								</label>
								<label class="grey" for="pc-24">
									<input type="radio" id="pc-24">
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Product Section End -->

	<!-- Categories Section Begin -->
	<section class="categories spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="categories__text">
						<h2><span>Colección de Ropa</span></h2>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="categories__hot__deal rounded">
						<img class="rounded" src="https://scontent-mia3-1.cdninstagram.com/v/t51.2885-15/e35/158841248_119476870138607_8696159526121278169_n.jpg?tp=1&_nc_ht=scontent-mia3-1.cdninstagram.com&_nc_cat=111&_nc_ohc=gdLbBRNTETwAX-d5C4x&ccb=7-4&oh=dbbdcaaac04903bbd396360c468acfd2&oe=60830093&_nc_sid=5eceaa" alt="">
						<div class="hot__deal__sticker">
							<span>En venta</span>
							<h5>$15</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1">
					<div class="categories__deal__countdown">
						<span>Oferta de la semana</span>
						<h2>T-shirt Contrast Pocket</h2>
						<div class="categories__deal__countdown__timer" id="countdown">
							<div class="cd-item">
								<span>3</span>
								<p>Días</p>
							</div>
							<div class="cd-item">
								<span>1</span>
								<p>Horas</p>
							</div>
							<div class="cd-item">
								<span>50</span>
								<p>Minutos</p>
							</div>
							<div class="cd-item">
								<span>18</span>
								<p>Segundos</p>
							</div>
						</div>
						<a href="#" class="primary-btn">Ver ahora</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Categories Section End -->

	<!-- Instagram Section Begin -->
	<section class="instagram spad mb-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="instagram__pic">
						<div class="instagram__pic__item set-bg rounded-top-left" data-setbg="https://scontent-mia3-2.cdninstagram.com/v/t51.2885-15/e35/163324307_439227197333686_4643051142276120073_n.jpg?tp=1&_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_cat=110&_nc_ohc=xGusov7QN8EAX_g_rZf&ccb=7-4&oh=d51c4e812e442064dcab48afa3de796f&oe=60835D11&_nc_sid=5eceaa"></div>

						<div class="instagram__pic__item set-bg" data-setbg="https://scontent-mia3-1.cdninstagram.com/v/t51.2885-15/e35/160817289_434081367664964_5044523738808435259_n.jpg?tp=1&_nc_ht=scontent-mia3-1.cdninstagram.com&_nc_cat=108&_nc_ohc=mXS-InZhHxAAX_PgNNP&ccb=7-4&oh=c07771c6ea45362c2e9daa83458c5241&oe=60833512&_nc_sid=5eceaa"></div>

						<div class="instagram__pic__item set-bg rounded-top-right" data-setbg="https://scontent-mia3-2.cdninstagram.com/v/t51.2885-15/e35/158279490_382326476190305_3477463059266165182_n.jpg?tp=1&_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_cat=105&_nc_ohc=7ppQ0RHRsoUAX_9xKnG&ccb=7-4&oh=ce65fe18d6a7d2759c95ab1897038b87&oe=6082D7AB&_nc_sid=5eceaa"></div>

						<div class="instagram__pic__item set-bg rounded-bot-left" data-setbg="https://scontent-mia3-2.cdninstagram.com/v/t51.2885-15/e35/158989207_134489945176445_755634530365022583_n.jpg?tp=1&_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_cat=105&_nc_ohc=ql7MUyATbEIAX80d9RD&ccb=7-4&oh=34d62129f7c657545781789908ab54cd&oe=6082FEA3&_nc_sid=5eceaa"></div>

						<div class="instagram__pic__item set-bg" data-setbg="https://scontent-mia3-2.cdninstagram.com/v/t51.2885-15/e35/162408069_458940965345246_4369338505053133235_n.jpg?tp=1&_nc_ht=scontent-mia3-2.cdninstagram.com&_nc_cat=102&_nc_ohc=05JLdzWvU3kAX_Feerm&ccb=7-4&oh=7ad474b550e34d847b110e9a2375bca9&oe=60810385&_nc_sid=5eceaa"></div>

						<div class="instagram__pic__item set-bg rounded-bot-right" data-setbg="https://scontent-mia3-1.cdninstagram.com/v/t51.2885-15/e35/161478040_145041480845508_1946055244897909275_n.jpg?tp=1&_nc_ht=scontent-mia3-1.cdninstagram.com&_nc_cat=100&_nc_ohc=pVn5i-2qov0AX9buVCS&ccb=7-4&oh=fda692ad96e5afcc758bca199a140d18&oe=6081D9BD&_nc_sid=5eceaa"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="instagram__text">
						<h2><a class="text-dark" href="https://www.instagram.com/kalon.val/">Kalon.val</a></h2>
						<p>Visitanos en nuestro instagram para seguir más de cerca nuestro contenido y actualizaciones!</p>
						<h3>#ClassyAndFabulous✨</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Instagram Section End -->

@endsection