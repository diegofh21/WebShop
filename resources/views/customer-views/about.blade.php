@extends('layouts.base')

@section('title', 'Sobre nosotros')

@section('about_active', 'active')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb__text">
          <h4>Sobre nosotros</h4>
          <div class="breadcrumb__links">
            <a href="/">Inicio</a>
            <span>Sobre nosotros</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- About Section Begin -->
<section class="about spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="about__pic d-flex">
          <img src="storage/img/about/kalon.jpg" alt="" class="mx-auto">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="about__item">
          <h4>¿Quienes somos?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, corrupti odit? Eum, quaerat laudantium. Rem, reprehenderit? Numquam, a nisi? Ipsum aperiam perspiciatis minima ducimus excepturi consequatur voluptatum molestiae illum rerum?</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="about__item">
          <h4>¿Que hacemos?</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, corrupti odit? Eum, quaerat laudantium. Rem, reprehenderit? Numquam, a nisi? Ipsum aperiam perspiciatis minima ducimus excepturi consequatur voluptatum molestiae illum rerum?</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
        <div class="about__item">
          <h4>Otra pregunta acá</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, corrupti odit? Eum, quaerat laudantium. Rem, reprehenderit? Numquam, a nisi? Ipsum aperiam perspiciatis minima ducimus excepturi consequatur voluptatum molestiae illum rerum?</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section End -->

<!-- Team Section Begin -->
<section class="team spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span>Equipo</span>
          <h2>Conoce a nuestro equipo</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="team__item">
          <img src="storage/img/about/team-1.jpg" alt="">
          <h4>John Smith</h4>
          <span>Fashion Design</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="team__item">
          <img src="storage/img/about/team-2.jpg" alt="">
          <h4>Christine Wise</h4>
          <span>C.E.O</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="team__item">
          <img src="storage/img/about/team-3.jpg" alt="">
          <h4>Sean Robbins</h4>
          <span>Manager</span>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="team__item">
          <img src="storage/img/about/team-4.jpg" alt="">
          <h4>Lucy Myers</h4>
          <span>Delivery</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Team Section End -->

<!-- Client Section Begin -->
<section class="clients spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span>Partner</span>
          <h2>Happy Clients</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-4 col-6">
        <a href="#" class="client__item"><img src="storage/img/clients/client-1.png" alt=""></a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-6">
        <a href="#" class="client__item"><img src="storage/img/clients/client-2.png" alt=""></a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-6">
        <a href="#" class="client__item"><img src="storage/img/clients/client-3.png" alt=""></a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-6">
        <a href="#" class="client__item"><img src="storage/img/clients/client-4.png" alt=""></a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-6">
        <a href="#" class="client__item"><img src="storage/img/clients/client-5.png" alt=""></a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-6">
        <a href="#" class="client__item"><img src="storage/img/clients/client-6.png" alt=""></a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-6">
        <a href="#" class="client__item"><img src="storage/img/clients/client-7.png" alt=""></a>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4 col-6">
        <a href="#" class="client__item"><img src="storage/img/clients/client-8.png" alt=""></a>
      </div>
    </div>
  </div>
</section>
<!-- Client Section End -->
@endsection