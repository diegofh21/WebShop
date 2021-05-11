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

    {{-- QUIENES SOMOS, QUE HACEMOS Y POR QUÉ --}}
    <div class="col-sm-12">
      <div class="section-title">
        <span>Quienes somos, que hacemos y por qué</span>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="about__item">
          <h4>¿Quienes somos?</h4>
          <p>Kalon nace como una idea de negocio familiar en donde la idea principal es ofrecer la mejor relación calidad precio para que todas las personas tengan acceso a piezas de ropa de alta calidad y siempre siendo atendidos de la mejor manera posible.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="about__item">
          <h4>¿Que hacemos?</h4>
          <p>Nosotros en Kalon nos especializamos en importar ropa desde USA y Europa, con estilos acordes a las tendencias de la moda para traer a Venezuela todas esas marcas que quizás no están presentes del todo en nuestro país y así no quedarnos atrás.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="about__item">
          <h4>¿Por qué?</h4>
          <p>Vimos una oportunidad de negocio que a pesar de que hay mucha competencia sabemos que podemos resaltar con la idea que queremos desarrollar. Venezuela gracias a la situación que está viviendo actualmente, estamos cohibidos de muchas tendencias de moda que por una razón o otra no tocan Venezuela y nuestra misión es hacer que cualquier venezolano pueda vestirse con lo último de cada marca como en cualquier país, facilitando todos los procesos de importación ya que recibirán su artículo a la puerta de su casa.</p>
        </div>
      </div>
    </div>

    <div class="dropdown-divider pb-4"></div>

    {{-- MISION, VISION Y OBJETIVOS --}}
    <div class="col-sm-12">
      <div class="section-title">
        <span>Misión, visión y objetivos</span>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="about__item">
          <h4>Misión</h4>
          <p>La misión de Kalon es ofrecer el mejor servicio posible, sabemos que con una gran atención la experiencia de compra se lleva a otro nivel y queremos que nuestros clientes salgan con una sonrisa en la cara para así crear esa lealtad con la marca y poder ir creciendo poco a poco </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="about__item">
          <h4>Visión</h4>
          <p>Nuestra visión de Kalon es llegar a tener un gran catálogo de marcas que nos permitan ser la opción principal de cualquier persona a la hora de hacer una compra. Queremos ser reconocidos a nivel nacional como una plataforma segura y confiable donde los clientes se sienten cómodos de navegar entre los distintos modelos de ropa que tendremos y saber que una vez cierre la compra su mercancía llegará sana y salva. 
            <br>
          Queremos lograr que nuestros clientes una vez hagan su compra esperen con emoción su artículo y que podamos ser nosotros los que brindemos esa felicidad a miles de personas.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="about__item">
          <h4>Objetivos</h4>
          <p>Nuestro objetivo principal es innovar el mercado, queremos ser los pioneros de una plataforma en línea de venta de ropa importada y que nuestro consumidores vean que la era digital puede facilitarles mucho la vida y además obtener un gran producto ya en tierra nacional sin tener que pasar malos momentos tratando de comprar en el exterior.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- About Section End -->

<!-- Team Section Begin -->
{{-- <section class="team spad">
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
</section> --}}
<!-- Team Section End -->

<!-- Client Section Begin -->
<section class="clients spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          {{-- <span>Partner</span> --}}
          <h2>Marcas que disponemos</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4 col-6">
        <a href="#" class="client__item"><img src="storage/img/clients/hollister-logo-black-and-white.png" alt="" width="50%"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-6 mt-4">
        <a href="#" class="client__item"><img src="storage/img/clients/Zara-Logo.png" alt="" width="50%"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-6">
        <a href="#" class="client__item"><img src="storage/img/clients/abercrombie&fitch.png" alt="" width="50%"></a>
      </div>
      {{-- <div class="col-lg-3 col-md-4 col-sm-4 col-6">
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
      </div> --}}
    </div>
  </div>
</section>
<!-- Client Section End -->
@endsection