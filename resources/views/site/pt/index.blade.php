@extends('layouts.main')

@section('content')

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <!-- <h1><a href="index.html">Zmassage</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="" class="mr-auto">
        <img src="{{Storage::url($portugueslogo1)}}" alt="" class="img-fluid">
      </a>
      <h2 style="color: #fff; font-weight: bold;" class="w-50"> {{$portuguestextoresumo}} </h2>

      <nav id="navbar" class="navbar mx-auto">
        <ul>
          <li><a class="nav-link active" href="">{{$portuguesmenu2}}</a></li>
          <li><a class="nav-link" href="#about">{{$portuguesmenu3}}</a></li>
          <li><a class="nav-link" href="#agendamento">{{$portuguesmenu4}}</a></li>
          <li><a class="nav-link" href="#services">{{$portuguesmenu5}}</a></li>
          <li><a class="nav-link" href="#sructure">{{$portuguesmenu6}}</a></li>
          <li><a class="nav-link" href="#portfolio">{{$portuguesmenu7}}</a></li>
          <li><a class="nav-link" href="#contact">{{$portuguesmenu8}}</a></li>
          <li>
            <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#idiomaModal"> 
              {{$portuguesmenu9}}  
              <i class="bi bi-translate fs-5 pe-2"></i> 
            </a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <div class="social-links">
        <a target="_blank" href="{{$portugueswhatsapp}}"  class="linkedin">
          <i class="bi bi-linkedin"></i>
        </a>
        <a target="_blank" href="{{$portuguesfacebook}}" class="linkedin">
          <i class="bi bi-facebook"></i>
        </a>
        <a target="_blank" href="{{$portuguesinstagram}}" class="linkedin">
          <i class="bi bi-instagram"></i>
        </a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= SOBRE ======= -->
  <section id="about" class="about">

    <!-- ======= About ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>{{$portuguesslide4}}</h2>
        <p>{{$portuguesslide5}}</p>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{Storage::url($portuguesslide1)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$portuguesslide6}}</h3>
          <p>{{$portuguesslide7}}</p>
        </div>
      </div>

    </div><!-- End About Me -->
  </section>

  <!-- ======= AGENDAMENTOS ======= -->
  <section id="agendamento" class="agendamento">
    <div class="about-me container">

      <div class="section-title">
        <h2>{{$portuguesagendamento1}}</h2>
        <p>{{$portuguesagendamento2}}</p>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left">
          <div class="text-center">
            <a href="https://zmassage.simplybook.it/v2/" target="_blank">
              <button class="btn p-2"> {{$portuguesagendamentobotao}} </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= ESTRUTURA ======= -->
  <section id="sructure" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>{{$portuguesestruturatitulo1}}</h2>
        <p>{{$portuguesestruturatitulo2}}</p>
      </div>

      <div class="container-fluid aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">
          <div class="row g-0 portfolio-container" style="position: relative; height: 1125.9px;">
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem1)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem2)}}" class="img-fluid" alt="">
            </div>
            <!-- <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure3.jpg" class="img-fluid" alt="">
            </div> -->
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem3)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem4)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem5)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem6)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem7)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem8)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem9)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem10)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem11)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem12)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem13)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($portuguesestruturaimagem14)}}" class="img-fluid" alt="">
            </div>

          </div>
        </div>

      </div>
  </section>

  <!-- ======= SERVIÇOS ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>{{$portuguestituloPagina}}</h2>
        <p>{{$portuguestituloPrincipal}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($portuguesservico1img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$portuguesservico1titulo}}</h4>
            <p>{{$portuguesservico1descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$portuguesservico1preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$portuguesservico1preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($portuguesservico2img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$portuguesservico2titulo}}</h4>
            <p>{{$portuguesservico2descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$portuguesservico2preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$portuguesservico2preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($portuguesservico3img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$portuguesservico3titulo}}</h4>
            <p>{{$portuguesservico3descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$portuguesservico3preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$portuguesservico3preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($portuguesservico4img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$portuguesservico4titulo}}</h4>
            <p>{{$portuguesservico4descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$portuguesservico4preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$portuguesservico4preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($portuguesservico5img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$portuguesservico5titulo}}</h4>
            <p>{{$portuguesservico5descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$portuguesservico5preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$portuguesservico5preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($portuguesservico6img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$portuguesservico6titulo}}</h4>
            <p>{{$portuguesservico6descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$portuguesservico6preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$portuguesservico6preco2}}</b></p>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($portuguesservico7img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$portuguesservico7titulo}}</h4>
            <p>{{$portuguesservico7descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$portuguesservico7preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$portuguesservico7preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($portuguesservico8img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$portuguesservico8titulo}}</h4>
            <p>{{$portuguesservico8descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$portuguesservico8preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$portuguesservico8preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($portuguesservico9img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$portuguesservico9titulo}}</h4>
            <p>{{$portuguesservico9descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$portuguesservico9preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$portuguesservico9preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($portuguesservico10img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$portuguesservico10titulo}}</h4>
            <p>{{$portuguesservico10descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$portuguesservico10preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$portuguesservico10preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($portuguesservico11img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$portuguesservico11titulo}}</h4>
            <p>{{$portuguesservico11descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$portuguesservico11preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$portuguesservico11preco2}}</b></p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ======= DEPOIMENTOS ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <!-- ======= Testimonials ======= -->
      <div class="testimonials container">

        <div class="section-title">
          <h2>{{$portuguesdepoimento1}}</h2>
          <p>{{$portuguesdepoimento2}}</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="elfsight-app-60cb96c2-4bcb-4857-960f-2468cb0be41b"></div>
        </div>

        <div class="owl-carousel testimonials-carousel">

        </div>

      </div><!-- End Testimonials  -->

    </div>
  </section><!-- FIM DEPOIMENTOS -->

  <!-- ======= CONTATO ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>{{$portuguescontatoTituloPagina}}</h2>
        <p>{{$portuguescontatoTituloPagina2}}</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>{{$portuguescontatoTituloEndereco}}</h3>
            <p> 
              <a style="color: #fff;" target="__blank" href="https://goo.gl/maps/rLJGjkhmnTUZ2RjM9"> 
              {{$portuguescontatoSubtTituloEndereco}}
              </a>
            </p>
          </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone"></i>
            <h3>{{$portuguescontatoTituloTelefone}}</h3>
            <p> 
              <a style="color: #fff;" href="tel:{{$portuguescontatoTelefone}}"> 
                {{$portuguescontatoTelefone}}
              </a>
            </p>
          </div>
        </div>

        <div class="col-md-12 col-12 mt-4 d-flex align-items-stretch mb-2">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2660.6305690195454!2d16.32651481587353!3d48.175200956518395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476da9ea936a7595%3A0xcb0e7f005ea9b107!2sZmassage!5e0!3m2!1sde!2sbr!4v1650479445730!5m2!1sde!2sbr" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <br>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <!-- <a target="_blank" href="https://twitter.com/Zmassage1" class="twitter"><i class="bi bi-twitter"></i></a> -->
              <a target="_blank" href="{{$portuguescontatoLinkLinkedin}}"
                class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a target="_blank" href="{{$portuguescontatoLinkFacebook}}" class="linkedin"><i
                  class="bi bi-facebook"></i></a>
              <a target="_blank" href="{{$portuguescontatoLinkInstagram}}" class="linkedin"><i
                  class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>{{$portuguescontatoTituloemail}}</h3>
            <a style="color: #fff;" href="mailto:{{$portuguescontatoemail}}">{{$portuguescontatoemail}}</a>
          </div>
        </div>
        <!-- <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div> -->
      </div>

    </div>
  </section>

  <!-- CREDITS -->
  <div class="credits me-2" style="color: rgb(29, 29, 29);"> Designed by <b> <a
        href="https://instagram.com/matapimkt?igshid=YmMyMTA2M2Y=" target="_blank" style="color: black;">@matapimkt</a>
    </b> 
  </div>
  
  <!-- MODAL DE INICIALIZAÇÃO -->
  <div class="modal fade" id="cartao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background: none; border: none;">
        <div class="modal-header mx-auto" style="border-bottom: none;">
          <button type="button" class="btn-close" style="color: #fff; background: none; font-size: 32px;"
            data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i>
          </button>
        </div>
        <div id="imagem-modal" class="modal-body text-center">
          <div class="row">
            <div class="col-12">
              <img width="250px" src="{{Storage::url($portuguesmodalimg)}}" alt="{{$portuguesmodal1}}">
              <div class="row mt-3 d-flex justify-content-center">
                <p style="width: 300px; color: #05c4f1; font-weight: bold;">
                  {{$portuguesmodal1}}
                </p>
              </div>
              <div class="row d-flex justify-content-center">
                <div style="width: 300px;">
                  <a target="__blank" href="https://zmassage.simplybook.it/v2/" class="btn d-flex btn-agendamento">
                    <i style="font-size: 32px;" class='bx bx-calendar'></i>
                    {{$portuguesmodal2}}
                  </a>
                </div>
              </div>
              <br>
              <div class="row" style="display: inline-flex;">
                <div class="col-4">
                  <a href="tel:{{$portuguesmodal3}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxs-phone'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$portuguesmodal4}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 36px;" class='bx bxl-whatsapp'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="mailto:{{$portuguesmodal5}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bx-envelope'></i>
                    </div>
                  </a>
                </div>
              </div>

              <div class="row mt-3 mb-3" style="display: inline-flex;">
                <div class="col-4">
                  <a target="__blank"
                    href="{{$portuguesmodal6}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxs-map'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$portuguesmodal7}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxl-instagram'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$portuguesmodal8}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxl-facebook'></i>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row mt-3 d-flex justify-content-center">
                <p>
                  {{$portuguesmodal9}}
                </p>
              </div>
              <img class="mb-3" width="64px" src="assets/img/ferramenta-de-mao.png" alt="" srcset="">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL IDIOMAS -->
  @component('components.site.modal-idiomas')
  @endcomponent


@endsection