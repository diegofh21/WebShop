@extends('layouts.base')

@section('title', 'Tienda')

@section('shop_active', 'active')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb__text">
          <h4>Pagar factura</h4>
          <div class="breadcrumb__links">
            <a href="/">Inicio</a>
            <a href="/shop">Tienda</a>
            <span>Pagar factura</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
  <div class="container">
    <div class="checkout__form">
      <form action="#">
        <div class="row">
          <div class="col-lg-8 col-md-6">
            <!-- <h6 class="coupon__code"><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click
                here</a> to enter your code</h6> -->
            <h6 class="checkout__title">Métodos de pago</h6>
            <!-- <div class="row">
              <div class="col-lg-6">
                <div class="checkout__input">
                  <p>Fist Name<span>*</span></p>
                  <input type="text">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="checkout__input">
                  <p>Last Name<span>*</span></p>
                  <input type="text">
                </div>
              </div>
            </div>
            <div class="checkout__input">
              <p>Country<span>*</span></p>
              <input type="text">
            </div>
            <div class="checkout__input">
              <p>Address<span>*</span></p>
              <input type="text" placeholder="Street Address" class="checkout__input__add">
              <input type="text" placeholder="Apartment, suite, unite ect (optinal)">
            </div>
            <div class="checkout__input">
              <p>Town/City<span>*</span></p>
              <input type="text">
            </div>
            <div class="checkout__input">
              <p>Country/State<span>*</span></p>
              <input type="text">
            </div>
            <div class="checkout__input">
              <p>Postcode / ZIP<span>*</span></p>
              <input type="text">
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="checkout__input">
                  <p>Phone<span>*</span></p>
                  <input type="text">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="checkout__input">
                  <p>Email<span>*</span></p>
                  <input type="text">
                </div>
              </div>
            </div>
            <div class="checkout__input__checkbox">
              <label for="acc">
                Create an account?
                <input type="checkbox" id="acc">
                <span class="checkmark"></span>
              </label>
              <p>Create an account by entering the information below. If you are a returning customer
                please login at the top of the page</p>
            </div>
            <div class="checkout__input">
              <p>Account Password<span>*</span></p>
              <input type="text">
            </div>
            <div class="checkout__input__checkbox">
              <label for="diff-acc">
                Note about your order, e.g, special noe for delivery
                <input type="checkbox" id="diff-acc">
                <span class="checkmark"></span>
              </label>
            </div>
            <div class="checkout__input">
              <p>Order notes<span>*</span></p>
              <input type="text" placeholder="Notes about your order, e.g. special notes for delivery.">
            </div> -->

            <div class="container" id="OpcionesPago">
              <h5 class="text-center mt-3 mb-3">Puedes pagar usando las siguientes opciones:</h5>
              <div class="row">
                <div class="mx-auto col-sm-12">
                  <!-- <p class="text-center">Paypal</p> -->
                  <img src="img/png/paypal-logo.png" alt="Paypal" width="175px"
                    class="d-flex mx-auto border rounded p-3 border-secondary" style="cursor: pointer;"
                    data-toggle="collapse" data-target="#collapsePaypal" aria-expanded="false"
                    aria-controls="collapsePaypal">

                  <div class="collapse col-sm-12 mt-2" id="collapsePaypal">
                    <div class="card card-body border-secondary border rounded">
                      <div id="paypal-button-container"></div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row mt-3">
                <div class="mx-auto col-sm-12">
                  <img src="storage/img/png/zellepng.png" alt="Zelle" width="175px"
                    class="d-flex mx-auto border rounded p-3 border-secondary" style="cursor: pointer;"
                    data-toggle="collapse" data-target="#collapseZelle" aria-expanded="false"
                    aria-controls="collapseZelle">

                  <div class="collapse col-sm-12 mt-2" id="collapseZelle">
                    <div class="card card-body border-secondary border rounded">
                      <p class="text-dark text-center align-middle"><strong>Realiza tu pago y reportalo a los
                          administradores siguiendo los pasos a continuación</strong></p>
                      <p class="text-dark"><strong>1. Escoge el banco de tu preferencia</strong></p>
                      <p class="text-dark"><strong>2. Agrega al beneficiario, transfiere el monto
                          correspondiente</strong></p>
                      <p class="text-dark"><strong>3. Toma una captura de pantalla del pago y guardala para subirla en
                          el reporte de pago.</strong></p>
                      <p class="text-dark"><strong>4. Da click en "Ya realicé el pago" para continuar al
                          reporte.</strong></p>
                      <p class="text-dark text-center align-middle mt-3"><strong>Datos de Zelle</strong></p>

                      <div class="row ml-3 mt-4 mx-auto text-center">
                        <h5>Total a pagar: US$ monto </h5>
                      </div>
                      <button class="btn btn-info mt-3 col-sm-12" onclick="ReportarPago('Zelle')">Ya realicé el
                        pago</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <div class="mx-auto col-sm-12">
                  <img src="storage/img/png/transferencialogo.png" alt="Transferencia Nacional" width="175px"
                    class="d-flex mx-auto border rounded p-3 border-secondary" style="cursor: pointer;"
                    data-toggle="collapse" data-target="#collapseTransfNacional" aria-expanded="false"
                    aria-controls="collapseTransfNacional">

                  <div class="collapse col-sm-12 mt-2" id="collapseTransfNacional">
                    <div class="card card-body border-secondary border rounded">
                      <p class="text-dark text-center align-middle"><strong>Realiza tu pago y reportalo a los
                          administradores siguiendo los pasos a continuación</strong></p>
                      <p class="text-dark"><strong>1. Escoge el banco de tu preferencia</strong></p>
                      <p class="text-dark"><strong>2. Agrega al beneficiario, transfiere el monto
                          correspondiente</strong></p>
                      <p class="text-dark"><strong>3. Toma una captura de pantalla del pago y guardala para subirla en
                          el reporte de pago.</strong></p>
                      <p class="text-dark"><strong>4. Da click en "Ya realicé el pago" para continuar al
                          reporte.</strong></p>
                      <p class="text-dark"><strong>NOTA: El reporte y la transferencia puede tardar un estimado de 24
                          a 48 horas en ser revisados por la administración del edificio dependiendo si la
                          transferencia fue realizada de bancos iguales (Ejemplo: Banesco a Banesco) o si la realiza
                          desde otro banco (Ejemplo: Banesco a BOD)</strong></p>

                      <!-- PRIMERA LISTA DE BANCOS -->
                      <div class="row ml-3 mx-auto">
                        <!-- IMAGENES DE BANCOS -->
                        <img class="col-sm-4" src="storage/img/png/banesco-logo.jpg" alt="" width="175px"
                          style="cursor: pointer;" data-toggle="collapse" data-target="#collapseBanesco"
                          aria-expanded="false" aria-controls="collapseBanesco">

                        <img class="col-sm-4" src="storage/img/png/bdv-logo.jpg" alt="" width="175px"
                          style="cursor: pointer;" data-toggle="collapse" data-target="#collapseBdv"
                          aria-expanded="false" aria-controls="collapseBdv">

                        <img class="col-sm-4" src="storage/img/png/bbva.png" alt="" width="175px" height="10%"
                          style="cursor: pointer;" data-toggle="collapse" data-target="#collapseBbva"
                          aria-expanded="false" aria-controls="collapseBbva">
                      </div>

                      <!-- SEGUNDA LISTA DE BANCOS -->
                      <div class="row ml-3 mx-auto">
                        <!-- IMAGENES DE BANCOS -->
                        <img class="col-sm-4 my-auto" src="storage/img/png/bod-logo.png" alt="" width="175px"
                          height="10%" style="cursor: pointer;" data-toggle="collapse" data-target="#collapseBOD"
                          aria-expanded="false" aria-controls="collapseBOD">

                        <img class="col-sm-4 my-auto" src="storage/img/png/banco-tesoro-logo.png" alt=""
                          width="175px" height="10%" style="cursor: pointer;" data-toggle="collapse"
                          data-target="#collapseTesoro" aria-expanded="false" aria-controls="collapseTesoro">

                        <img class="col-sm-4 my-auto" src="storage/img/png/bnc-logo1.jpg" alt="" width="175px"
                          height="10%" style="cursor: pointer;" data-toggle="collapse" data-target="#collapseBNC"
                          aria-expanded="false" aria-controls="collapseBNC">
                      </div>


                      <div class="row ml-3 mx-auto">
                        <!-- PRIMERA LISTA DE DATOS DE BANCOS -->
                        <div class="collapse col-sm-12 mt-2" id="collapseBanesco">
                          <div class="row text-center mx-auto">
                            <h4 class="col-sm-12 ml-3">Banesco</h4>
                            <p class="col-sm-12 ml-3"><strong>Nombre del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Cedula del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Número de telefono del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>0134-xxxx-xx-xxxxxxxxxx</strong></p>
                          </div>
                        </div>

                        <div class="collapse col-sm-12 mt-2" id="collapseBdv">
                          <div class="row text-center mx-auto">
                            <h4 class="col-sm-12 ml-3">Banco de Venezuela</h4>
                            <p class="col-sm-12 ml-3"><strong>Nombre del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Cedula del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Número de telefono del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>0134-xxxx-xx-xxxxxxxxxx</strong></p>
                          </div>
                        </div>

                        <div class="collapse col-sm-12 mt-2" id="collapseBbva">
                          <div class="row text-center mx-auto">
                            <h4 class="col-sm-12 ml-3">BBVA Provincial</h4>
                            <p class="col-sm-12 ml-3"><strong>Nombre del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Cedula del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Número de telefono del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>0134-xxxx-xx-xxxxxxxxxx</strong></p>
                          </div>
                        </div>

                        <!-- SEGUNDA LISTA DE DATOS DE BANCOS -->
                        <div class="collapse col-sm-12 mt-2" id="collapseBOD">
                          <div class="row text-center mx-auto">
                            <h4 class="col-sm-12 ml-3">BOD</h4>
                            <p class="col-sm-12 ml-3"><strong>Nombre del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Cedula del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Número de telefono del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>0134-xxxx-xx-xxxxxxxxxx</strong></p>
                          </div>
                        </div>

                        <div class="collapse col-sm-12 mt-2" id="collapseTesoro">
                          <div class="row text-center mx-auto">
                            <h4 class="col-sm-12 ml-3">Banco del Tesoro</h4>
                            <p class="col-sm-12 ml-3"><strong>Nombre del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Cedula del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Número de telefono del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>0134-xxxx-xx-xxxxxxxxxx</strong></p>
                          </div>
                        </div>

                        <div class="collapse col-sm-12 mt-2" id="collapseBNC">
                          <div class="row text-center mx-auto">
                            <h4 class="col-sm-12 ml-3">Banco Nacional de Crédito</h4>
                            <p class="col-sm-12 ml-3"><strong>Nombre del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Cedula del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>Número de telefono del titular</strong></p>
                            <p class="col-sm-12 ml-3"><strong>0134-xxxx-xx-xxxxxxxxxx</strong></p>
                          </div>
                        </div>

                      </div>

                      <div class="row ml-3 mt-4 mx-auto text-center">
                        <h5>Total a pagar: monto Bs</h5>
                      </div>
                      <button class="btn btn-info mt-3 col-sm-12" onclick="ReportarPago('Nacional')">Ya realicé el
                        pago</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="checkout__order">
              <h4 class="order__title">Tu factura</h4>
              <div class="checkout__order__products">Productos <span>Total</span></div>
              <ul class="checkout__total__products">
                <li>01. Vanilla salted caramel <span>$ 300.0</span></li>
                <li>02. German chocolate <span>$ 170.0</span></li>
                <li>03. Sweet autumn <span>$ 170.0</span></li>
                <li>04. Cluten free mini dozen <span>$ 110.0</span></li>
              </ul>
              <ul class="checkout__total__all">
                <li>Subtotal <span>$750.99</span></li>
                <li>Total <span>$750.99</span></li>
              </ul>
              <div class="checkout__input__checkbox">
                <label for="acc-or">
                  Create an account?
                  <input type="checkbox" id="acc-or">
                  <span class="checkmark"></span>
                </label>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua.</p>
              <div class="checkout__input__checkbox">
                <label for="payment">
                  Verificar pago
                  <input type="checkbox" id="payment">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="checkout__input__checkbox">
                <label for="paypal">
                  Paypal
                  <input type="checkbox" id="paypal">
                  <span class="checkmark"></span>
                </label>
              </div>
              <button type="submit" class="site-btn">PAGAR FACTURA</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- Checkout Section End -->
@endsection