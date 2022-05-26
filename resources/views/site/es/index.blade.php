@extends('layouts.main')

@section('content')

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <!-- <h1><a href="index.html">Zmassage</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="" class="mr-auto">
        <img src="{{Storage::url($logo1)}}" alt="" class="img-fluid">
      </a>
      <h2 style="color: #fff; font-weight: bold;" class="w-50"> {{$textoresumo}} </h2>

      <nav id="navbar" class="navbar mx-auto">
        <ul>
          <li><a class="nav-link active" href="">{{$menu2}}</a></li>
          <li><a class="nav-link" href="#about">{{$menu3}}</a></li>
          <li><a class="nav-link" href="#agendamento">{{$menu4}}</a></li>
          <li><a class="nav-link" href="#services">{{$menu5}}</a></li>
          <li><a class="nav-link" href="#sructure">{{$menu6}}</a></li>
          <li><a class="nav-link" href="#portfolio">{{$menu7}}</a></li>
          <li><a class="nav-link" href="#contact">{{$menu8}}</a></li>
          <li>
            <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#idiomaModal"> 
              {{$menu9}}  
              <i class="bi bi-translate fs-5 pe-2"></i> 
            </a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <div class="social-links">
        <a target="_blank" href="{{$whatsapp}}"  class="linkedin">
          <i class="bi bi-linkedin"></i>
        </a>
        <a target="_blank" href="{{$facebook}}" class="linkedin">
          <i class="bi bi-facebook"></i>
        </a>
        <a target="_blank" href="{{$instagram}}" class="linkedin">
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
        <h2>{{$slide4}}</h2>
        <p>{{$slide5}}</p>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/about2.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$slide6}}</h3>
          <p>{{$slide7}}</p>
        </div>
      </div>

    </div><!-- End About Me -->
  </section>

  <!-- ======= AGENDAMENTOS ======= -->
  <section id="agendamento" class="agendamento">
    <div class="about-me container">

      <div class="section-title">
        <h2>{{$agendamento1}}</h2>
        <p>{{$agendamento2}}</p>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left">
          <div class="text-center">
            <a href="https://zmassage.simplybook.it/v2/" target="_blank">
              <button class="btn p-2"> {{$agendamentobotao}} </button>
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
        <h2>{{$estruturatitulo1}}</h2>
        <p>{{$estruturatitulo2}}</p>
      </div>

      <div class="container-fluid aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">
          <div class="row g-0 portfolio-container" style="position: relative; height: 1125.9px;">
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem1)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem2)}}" class="img-fluid" alt="">
            </div>
            <!-- <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure3.jpg" class="img-fluid" alt="">
            </div> -->
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem3)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem4)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem5)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem6)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem7)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem8)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem9)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem10)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem11)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem12)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem13)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($estruturaimagem14)}}" class="img-fluid" alt="">
            </div>

          </div>
        </div>

      </div>
  </section>

  <!-- ======= SERVIÇOS ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>{{$tituloPagina}}</h2>
        <p>{{$tituloPrincipal}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($servico1img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$servico1titulo}}</h4>
            <p>{{$servico1descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$servico1preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$servico1preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($servico2img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$servico2titulo}}</h4>
            <p>{{$servico2descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$servico2preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$servico2preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($servico3img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$servico3titulo}}</h4>
            <p>{{$servico3descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$servico3preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$servico3preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($servico4img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$servico4titulo}}</h4>
            <p>{{$servico4descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$servico4preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$servico4preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($servico5img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$servico5titulo}}</h4>
            <p>{{$servico5descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$servico5preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$servico5preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($servico6img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$servico6titulo}}</h4>
            <p>{{$servico6descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$servico6preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$servico6preco2}}</b></p>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($servico7img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$servico7titulo}}</h4>
            <p>{{$servico7descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$servico7preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$servico7preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($servico8img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$servico8titulo}}</h4>
            <p>{{$servico8descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$servico8preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$servico8preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($servico9img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$servico9titulo}}</h4>
            <p>{{$servico9descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$servico9preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$servico9preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($servico10img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$servico10titulo}}</h4>
            <p>{{$servico10descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$servico10preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$servico10preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($servico11img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$servico11titulo}}</h4>
            <p>{{$servico11descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$servico11preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$servico11preco2}}</b></p>
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
          <h2>{{$depoimento1}}</h2>
          <p>{{$depoimento2}}</p>
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
        <h2>{{$contatoTituloPagina}}</h2>
        <p>{{$contatoTituloPagina2}}</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>{{$contatoTituloEndereco}}</h3>
            <p> 
              <a style="color: #fff;" target="__blank" href="https://goo.gl/maps/rLJGjkhmnTUZ2RjM9"> 
              {{$contatoSubtTituloEndereco}}
              </a>
            </p>
          </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone"></i>
            <h3>{{$contatoTituloTelefone}}</h3>
            <p> 
              <a style="color: #fff;" href="tel:{{$contatoTelefone}}"> 
                {{$contatoTelefone}}
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
              <a target="_blank" href="{{$contatoLinkLinkedin}}"
                class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a target="_blank" href="{{$contatoLinkFacebook}}" class="linkedin"><i
                  class="bi bi-facebook"></i></a>
              <a target="_blank" href="{{$contatoLinkInstagram}}" class="linkedin"><i
                  class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>{{$contatoTituloemail}}</h3>
            <a style="color: #fff;" href="mailto:{{$contatoemail}}">{{$contatoemail}}</a>
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
              <img width="250px" src="{{Storage::url($modalimg)}}" alt="{{$modal1}}">
              <div class="row mt-3 d-flex justify-content-center">
                <p style="width: 300px; color: #05c4f1; font-weight: bold;">
                  {{$modal1}}
                </p>
              </div>
              <div class="row d-flex justify-content-center">
                <div style="width: 300px;">
                  <a target="__blank" href="https://zmassage.simplybook.it/v2/" class="btn d-flex btn-agendamento">
                    <i style="font-size: 32px;" class='bx bx-calendar'></i>
                    {{$modal2}}
                  </a>
                </div>
              </div>
              <br>
              <div class="row" style="display: inline-flex;">
                <div class="col-4">
                  <a href="tel:{{$modal3}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxs-phone'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$modal4}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 36px;" class='bx bxl-whatsapp'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="mailto:{{$modal5}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bx-envelope'></i>
                    </div>
                  </a>
                </div>
              </div>

              <div class="row mt-3 mb-3" style="display: inline-flex;">
                <div class="col-4">
                  <a target="__blank"
                    href="{{$modal6}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxs-map'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$modal7}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxl-instagram'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$modal8}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxl-facebook'></i>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row mt-3 d-flex justify-content-center">
                <p>
                  {{$modal9}}
                </p>
              </div>
              <img class="mb-3" width="64px" src="assets/img/ferramenta-de-mao.png" alt="" srcset="">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="idiomaModal" tabindex="-1" aria-labelledby="idiomaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <div class="mx-auto">
            <h5 class="modal-title" style="color: black;" id="idiomaModalLabel"> Wähle deine Sprache </h5>
          </div>
        </div>
        <div class="modal-body text-center">
          <a href="#">
            <img width="100px" src="assets/img/austria.png" alt="">
          </a>
          <a href="#">
            <img width="100px" src="assets/img/reino-unido.png" alt="">
          </a>
          <a href="#">
            <img width="100px" src="assets/img/brasil.png" alt="">
          </a>
          <a href="#">
            <img width="100px" src="assets/img/espanha.png" alt="">
          </a>
        </div>
        <div class="modal-footer">
          <div class="mx-auto">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Zurück zu gehen </button>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection