@extends('layouts.base')

@section('title', 'Contacto')

@section('contact_active', 'active')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb__text">
          <h4>Contacto</h4>
          <div class="breadcrumb__links">
            <a href="/">Inicio</a>
            <span>Contacto</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Map Begin -->
<div class="map">
  <!-- <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111551.9926412813!2d-90.27317134641879!3d38.606612219170856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1597926938024!5m2!1sen!2sbd"
    height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44417.40037805798!2d-68.04504962412786!3d10.263144336881897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e805c5adca7bc33%3A0x50229899f4ea4de9!2sNaguanagua%202005%2C%20Carabobo!5e0!3m2!1ses!2sve!4v1616448371153!5m2!1ses!2sve" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="contact__text">
          <div class="section-title">
            <span>Información</span>
            <h2>Contactanos</h2>
            <p>Consulta nuestros horarios de atención al cliente y contactanos a tráves de nuestras redes sociales, con gusto te atenderemos!</p>
          </div>
          <ul>
            <li>
              <h4>Horario de atención</h4>
              <p>Lunes a Viernes de 10:00 A.M a 6:00 P.M <br />Sábados de 10:00 A.M a 2:00 P.M </p>
            </li>
            <li>
              <h4>Redes sociales</h4>
              <p><strong>WhatsApp:</strong> <a class="text-primary" href="https://wa.link/ydeqw6" target="_blank">+58 424-4029098</a> <br> <strong>Link directo a nuestro chat de WhatsApp:</strong> <a class="text-primary" href="https://wa.link/ydeqw6" target="_blank">wa.link/ydeqw6</a></p>

              <p><strong>Instagram:</strong> <a class="text-primary" href="https://www.instagram.com/kalon.val/" target="_blank">Kalon.val</a></p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="contact__form">
          <img class="border border-secondary rounded" src="storage/img/kalon-ig/horario-atencion.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact Section End -->
@endsection