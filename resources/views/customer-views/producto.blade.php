@extends('layouts.base')

@section('title', 'Tienda')

@section('shop_active', 'active')

@section('content')
<!-- Shop Details Section Begin -->
<section class="shop-details">
  <div class="product__details__pic">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="product__details__breadcrumb">
            <a href="/">Inicio</a>
            <a href="/shop">Tienda</a>
            <span>--Product_name--</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                <div class="product__thumb__pic set-bg" data-setbg="storage/img/shop-details/thumb-1.png">
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                <div class="product__thumb__pic set-bg" data-setbg="storage/img/shop-details/thumb-2.png">
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                <div class="product__thumb__pic set-bg" data-setbg="storage/img/shop-details/thumb-3.png">
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                <div class="product__thumb__pic set-bg" data-setbg="storage/img/shop-details/thumb-4.png">
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="tabs-1" role="tabpanel">
              <div class="product__details__pic__item">
                <img src="storage/img/shop-details/product-big-2.png" alt="">
              </div>
            </div>
            <div class="tab-pane" id="tabs-2" role="tabpanel">
              <div class="product__details__pic__item">
                <img src="storage/img/shop-details/product-big-3.png" alt="">
              </div>
            </div>
            <div class="tab-pane" id="tabs-3" role="tabpanel">
              <div class="product__details__pic__item">
                <img src="storage/img/shop-details/product-big.png" alt="">
              </div>
            </div>
            <div class="tab-pane" id="tabs-4" role="tabpanel">
              <div class="product__details__pic__item">
                <img src="storage/img/shop-details/product-big-4.png" alt="">
              </div>
            </div>
            <!-- <div class="tab-pane" id="tabs-4" role="tabpanel">
              <div class="product__details__pic__item">
                <img src="img/shop-details/product-big-4.png" alt="">
                <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1"
                  class="video-popup"><i class="fa fa-play"></i></a>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product__details__content">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <div class="product__details__text">
            <h4>Hooded thermal anorak</h4>
            <!-- <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-o"></i>
              <span> - 5 Reviews</span>
            </div> -->
            <h3>$15.00 <span>$20.00</span></h3>
            <p>--Descripción del producto--</p>
            <div class="product__details__option">
              <div class="product__details__option__size">
                <span>Tamaño:</span>
                <label for="xxl">xxl
                  <input type="radio" id="xxl">
                </label>
                <label class="active" for="xl">xl
                  <input type="radio" id="xl">
                </label>
                <label for="l">l
                  <input type="radio" id="l">
                </label>
                <label for="sm">s
                  <input type="radio" id="sm">
                </label>
              </div>
              <div class="product__details__option__color">
                <span>Color:</span>
                <label class="c-1" for="sp-1">
                  <input type="radio" id="sp-1">
                </label>
                <label class="c-2" for="sp-2">
                  <input type="radio" id="sp-2">
                </label>
                <label class="c-3" for="sp-3">
                  <input type="radio" id="sp-3">
                </label>
                <label class="c-4" for="sp-4">
                  <input type="radio" id="sp-4">
                </label>
                <label class="c-9" for="sp-9">
                  <input type="radio" id="sp-9">
                </label>
              </div>
            </div>
            <div class="product__details__cart__option">
              <div class="quantity">
                <div class="pro-qty">
                  <input type="text" value="1">
                </div>
              </div>
              <a href="#" class="primary-btn">Añadir al carrito</a>
            </div>
            <!-- <div class="product__details__btns__option">
              <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
              <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>
            </div> -->
            <div class="product__details__last__option">
              <!-- <h5><span>Guaranteed Safe Checkout</span></h5>
              <img src="img/shop-details/details-payment.png" alt=""> -->
              <ul>
                <!-- <li><span>SKU:</span> 3812912</li> -->
                <li><span>Categoría:</span> Hombres</li>
                <li><span>Etiquetas:</span> Ropa, Skin, Body</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="product__details__tab">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">Descripción</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Información Adicional</a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tabs-5" role="tabpanel">
                <div class="product__details__tab__content">
                  <p class="note">Nam tempus turpis at metus scelerisque placerat nulla deumantos
                    solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis
                    ut risus. Sedcus faucibus an sullamcorper mattis drostique des commodo
                    pharetras loremos.</p>
                  <div class="product__details__tab__content__item">
                    <h5>Información del Producto</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, esse, quia in sequi laboriosam
                      doloribus sint nam vero aut vel eveniet iure omnis! Dolorum placeat iste dolor dolore! Facere,
                      dolorum!</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel consequuntur corrupti sint
                      nostrum repellendus maiores voluptatibus saepe. Quae saepe maiores accusamus architecto
                      voluptate blanditiis illo veritatis nihil, dolore enim asperiores.</p>
                  </div>
                  <div class="product__details__tab__content__item">
                    <h5>Material usado</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem dignissimos unde
                      aperiam nam dolore culpa in consequuntur aspernatur eligendi perspiciatis illum quaerat illo sed
                      quasi repellat amet, quos quisquam alias?</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tabs-6" role="tabpanel">
                <div class="product__details__tab__content">
                  <div class="product__details__tab__content__item">
                    <h5>Información adicional del producto</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus molestiae iusto error
                      aliquam molestias eaque velit dolores temporibus deserunt nobis, quidem eius id consectetur aut
                      inventore quis impedit architecto repudiandae!</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis quas hic aut tempore eos
                      impedit ratione molestiae! Voluptatum maxime omnis error fugiat sint, cumque, asperiores
                      mollitia, molestias consequatur officiis provident.</p>
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
<!-- Shop Details Section End -->

<!-- Related Section Begin -->
<section class="related spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="related-title">Productos que te puedan interesar</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
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
      <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
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
      <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
        <div class="product__item sale">
          <div class="product__item__pic set-bg" data-setbg="storage/img/product/product-3.jpg">
            <span class="label">#% Promoción 🔥</span>
            <ul class="product__hover">
              <li><a href="#"><img src="storage/img/icon/heart.png" alt=""></a></li>
              <li><a href="#"><img src="storage/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
              <li><a href="#"><img src="storage/img/icon/search.png" alt=""></a></li>
            </ul>
          </div>
          <div class="product__item__text">
            <h6>Multi-pocket Chest Bag</h6>
            <a href="#" class="add-cart">+ Añadir al carrito</a>
            <h5>$43.48</h5>
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
      <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
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
    </div>
  </div>
</section>
<!-- Related Section End -->
@endsection