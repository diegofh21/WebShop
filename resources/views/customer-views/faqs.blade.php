@extends('layouts.base')

@section('title', 'Preguntas frecuentes')

@section('faqs_active', 'active')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb__text">
          <h4>Preguntas Frecuentes</h4>
          <div class="breadcrumb__links">
            <a href="/">Inicio</a>
            <span>Preguntas Frecuentes</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<section class="spad">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="text-center">Preguntas Frecuentes</h3>
      </div>
    </div>

    <div class="shop__sidebar__accordion mt-5">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-heading">
            <a data-toggle="collapse" data-target="#collapseOne" class="p-4 border rounded"><h4>PAGOS</h4></a>
          </div>
          <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
            <div class="card-body">
              <div class="shop__sidebar__categories">
                <ul class="nice-scroll p-4">
                  <li><span>¿Qué formas de pago puedo aprovechar para realizar mi compra?</span><br>
                  <span class="pl-2">Respuesta 1</span></li>
                  <li class="mt-2"><span>Pregunta 2</span><br>
                    <span class="pl-2">Respuesta 2</span></li>
                  <li class="mt-2"><span>Pregunta 3</span><br>
                    <span class="pl-2">Respuesta 3</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-heading">
            <a data-toggle="collapse" data-target="#collapseTwo" class="p-4 border rounded"><h4>ENVIOS</h4></a>
          </div>
          <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
            <div class="card-body">
              <div class="shop__sidebar__categories">
                <ul class="nice-scroll p-4">
                  <li><span>Pregunta 1</span><br>
                  <span class="pl-2">Respuesta 1</span></li>
                  <li class="mt-2"><span>Pregunta 2</span><br>
                    <span class="pl-2">Respuesta 2</span></li>
                  <li class="mt-2"><span>Pregunta 3</span><br>
                    <span class="pl-2">Respuesta 3</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-heading">
            <a data-toggle="collapse" data-target="#collapseFour" class="p-4 border rounded"><h4>CAMBIOS</h4></a>
          </div>
          <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
            <div class="card-body">
              <div class="shop__sidebar__categories">
                <ul class="nice-scroll p-4">
                  <li><span>Pregunta 1</span><br>
                  <span class="pl-2">Respuesta 1</span></li>
                  <li class="mt-2"><span>Pregunta 2</span><br>
                    <span class="pl-2">Respuesta 2</span></li>
                  <li class="mt-2"><span>Pregunta 3</span><br>
                    <span class="pl-2">Respuesta 3</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-heading">
            <a data-toggle="collapse" data-target="#collapseFive" class="p-4 border rounded"><h4>CONTACTO</h4></a>
          </div>
          <div id="collapseFive" class="collapse show" data-parent="#accordionExample">
            <div class="card-body">
              <div class="shop__sidebar__categories">
                <ul class="nice-scroll p-4">
                  <li><span>Instagram</span><br>
                  <span class="pl-2">Siguenos en <a href="https://www.instagram.com/kalon.oficial1/" class="text-primary">@kalon.oficial1</a></span></li>
                  <li class="mt-2"><span>Correo Eléctronico</span><br>
                    <span class="pl-2">kalon.val@gmail.com</span></li>
                  <li class="mt-2"><span>WhatsApp</span><br>
                    <span class="pl-2">Puedes escribirnos a nuestro WhatsApp haciendo click en el siguiente enlace: <a href="https://wa.link/ydeqw6" class="text-primary">wa.link/ydeqw6</a></span></li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection