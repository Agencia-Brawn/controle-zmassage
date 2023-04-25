@extends('layouts.main')

@section('content')

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <!-- <h1><a href="index.html">Zmassage</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="" class="mr-auto">
        <img src="{{Storage::url($englishlogo1)}}" alt="" class="img-fluid">
      </a>
      <h2 style="color: #fff; font-weight: bold;" class="w-50"> {{$englishtextoresumo}} </h2>

      <nav id="navbar" class="navbar mx-auto">
        <ul>
          <li><a class="nav-link" href="#about">{{$englishmenu3}}</a></li>
          {{-- <li><a class="nav-link" href="#agendamento">{{$englishmenu4}}</a></li> --}}
          <li><a class="nav-link" href="#services">{{$englishmenu5}}</a></li>
          <li><a class="nav-link" href="#sructure">{{$englishmenu6}}</a></li>
          <li><a class="nav-link" href="#portfolio">{{$englishmenu7}}</a></li>
          <li><a class="nav-link" href="#contact">{{$englishmenu8}}</a></li>
          <li><a class="nav-link active" href="">{{$englishmenu2}}</a></li>
          <li>
            <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#idiomaModal"> 
              {{$englishmenu9}}  
              <i class="bi bi-translate fs-5 pe-2"></i> 
            </a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <div class="social-links">
        <a target="_blank" href="{{$englishwhatsapp}}"  class="linkedin">
          <i class="bi bi-linkedin"></i>
        </a>
        <a target="_blank" href="{{$englishfacebook}}" class="linkedin">
          <i class="bi bi-facebook"></i>
        </a>
        <a target="_blank" href="{{$englishinstagram}}" class="linkedin">
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
        <h2>{{$englishslide4}}</h2>
        <p>{{$englishslide5}}</p>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{Storage::url($englishslide1)}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$englishslide6}}</h3>
          <p style="line-height: 32px;">{{$englishslide7}}</p>
        </div>
      </div>

    </div><!-- End About Me -->
  </section>

  <!-- ======= AGENDAMENTOS ======= -->
  <section id="agendamento" class="agendamento">
    <div class="about-me container">

      <div class="section-title">
        <h2>{{$englishagendamento1}}</h2>
        <p>{{$englishagendamento2}}</p>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left">
            <div class="text-center">
                <script src="//widget.simplybook.it/v2/widget/widget.js"></script>
                <script>
                    var widget = new SimplybookWidget({
                        "widget_type": "button",
                        "url": "https:\/\/zmassage.simplybook.it",
                        "theme": "default",
                        "theme_settings": {
                            "timeline_hide_unavailable": "1",
                            "hide_past_days": "0",
                            "timeline_show_end_time": "0",
                            "timeline_modern_display": "as_slots",
                            "sb_base_color": "#33bb60",
                            "display_item_mode": "block",
                            "booking_nav_bg_color": "#d1e9c6",
                            "body_bg_color": "#f7f7f7",
                            "sb_review_image": "",
                            "dark_font_color": "#494949",
                            "light_font_color": "#ffffff",
                            "btn_color_1": "#5e7da7",
                            "sb_company_label_color": "#ffffff",
                            "hide_img_mode": "0",
                            "show_sidebar": "1",
                            "sb_busy": "#dad2ce",
                            "sb_available": "#d3e0f1"
                        },
                        "timeline": "modern_week",
                        "datepicker": "top_calendar",
                        "is_rtl": false,
                        "app_config": {
                            "clear_session": 0,
                            "allow_switch_to_ada": 0,
                            "predefined": []
                        },
                        "button_title": "Jetzt buchen",
                        "button_background_color": "#0FC0EC",
                        "button_text_color": "#ffffff",
                        "button_position": "bottom",
                        "button_position_offset": "45%"
                    });
                </script>
              
                {{-- <iframe src="https://zmassage.simplybook.it/v2/" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                {{-- <a href="https://zmassage.simplybook.it/v2/" target="_blank">
      <button class="btn p-2"> {{$agendamentobotao}} </button>
    </a> --}}
            </div>
        </div>
    </div>
    </div>
  </section>

  <!-- ======= ESTRUTURA ======= -->
  <section id="sructure" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>{{$englishestruturatitulo1}}</h2>
        <p>{{$englishestruturatitulo2}}</p>
      </div>

      <div class="container-fluid aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">
          <div class="row g-0 portfolio-container" style="position: relative; height: 1125.9px;">
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem1)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem2)}}" class="img-fluid" alt="">
            </div>
            <!-- <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure3.jpg" class="img-fluid" alt="">
            </div> -->
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem3)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem4)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem5)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem6)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem7)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem8)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem9)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem10)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem11)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem12)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem13)}}" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="{{Storage::url($englishestruturaimagem14)}}" class="img-fluid" alt="">
            </div>

          </div>
        </div>

      </div>
  </section>

  <!-- ======= SERVIÇOS ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>{{$englishtituloPagina}}</h2>
        <p>{{$englishtituloPrincipal}}</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($englishservico1img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$englishservico1titulo}}</h4>
            <p>{{$englishservico1descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$englishservico1preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$englishservico1preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($englishservico2img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$englishservico2titulo}}</h4>
            <p>{{$englishservico2descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$englishservico2preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$englishservico2preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($englishservico3img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$englishservico3titulo}}</h4>
            <p>{{$englishservico3descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$englishservico3preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$englishservico3preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($englishservico4img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$englishservico4titulo}}</h4>
            <p>{{$englishservico4descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$englishservico4preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$englishservico4preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($englishservico5img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$englishservico5titulo}}</h4>
            <p>{{$englishservico5descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$englishservico5preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$englishservico5preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($englishservico6img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$englishservico6titulo}}</h4>
            <p>{{$englishservico6descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$englishservico6preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$englishservico6preco2}}</b></p>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($englishservico7img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$englishservico7titulo}}</h4>
            <p>{{$englishservico7descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$englishservico7preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$englishservico7preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($englishservico8img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$englishservico8titulo}}</h4>
            <p>{{$englishservico8descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$englishservico8preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$englishservico8preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($englishservico9img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$englishservico9titulo}}</h4>
            <p>{{$englishservico9descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$englishservico9preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$englishservico9preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($englishservico10img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$englishservico10titulo}}</h4>
            <p>{{$englishservico10descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$englishservico10preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$englishservico10preco2}}</b></p>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="{{Storage::url($englishservico11img)}}" alt="" class="img-fluid">
            </div>
            <h4>{{$englishservico11titulo}}</h4>
            <p>{{$englishservico11descricao}}</p>
            <br>
            <p style="font-size: 20px;"><b>{{$englishservico11preco}}</b></p>
            <p style="font-size: 20px;"><b>{{$englishservico11preco2}}</b></p>
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
          <h2>{{$englishdepoimento1}}</h2>
          <p>{{$englishdepoimento2}}</p>
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
        <h2>{{$englishcontatoTituloPagina}}</h2>
        <p>{{$englishcontatoTituloPagina2}}</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>{{$englishcontatoTituloEndereco}}</h3>
            <p> 
              <a style="color: #fff;" target="__blank" href="https://goo.gl/maps/rLJGjkhmnTUZ2RjM9"> 
              {{$englishcontatoSubtTituloEndereco}}
              </a>
            </p>
          </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone"></i>
            <h3>{{$englishcontatoTituloTelefone}}</h3>
            <p> 
              <a style="color: #fff;" href="tel:{{$englishcontatoTelefone}}"> 
                {{$englishcontatoTelefone}}
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
              <a target="_blank" href="{{$englishcontatoLinkLinkedin}}"
                class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a target="_blank" href="{{$englishcontatoLinkFacebook}}" class="linkedin"><i
                  class="bi bi-facebook"></i></a>
              <a target="_blank" href="{{$englishcontatoLinkInstagram}}" class="linkedin"><i
                  class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>{{$englishcontatoTituloemail}}</h3>
            <a style="color: #fff;" href="mailto:{{$englishcontatoemail}}">{{$englishcontatoemail}}</a>
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
  {{-- <div class="modal fade" id="cartao" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <img width="250px" src="{{Storage::url($englishmodalimg)}}" alt="{{$englishmodal1}}">
              <div class="row mt-3 d-flex justify-content-center">
                <p style="width: 300px; color: #05c4f1; font-weight: bold;">
                  {{$englishmodal1}}
                </p>
              </div>
              <div class="row d-flex justify-content-center">
                <div style="width: 300px;">
                  <a target="__blank" href="https://zmassage.simplybook.it/v2/" class="btn d-flex btn-agendamento">
                    <i style="font-size: 32px;" class='bx bx-calendar'></i>
                    {{$englishmodal2}}
                  </a>
                </div>
              </div>
              <br>
              <div class="row" style="display: inline-flex;">
                <div class="col-4">
                  <a href="tel:{{$englishmodal3}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxs-phone'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$englishmodal4}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 36px;" class='bx bxl-whatsapp'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="mailto:{{$englishmodal5}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bx-envelope'></i>
                    </div>
                  </a>
                </div>
              </div>

              <div class="row mt-3 mb-3" style="display: inline-flex;">
                <div class="col-4">
                  <a target="__blank"
                    href="{{$englishmodal6}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxs-map'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$englishmodal7}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxl-instagram'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$englishmodal8}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxl-facebook'></i>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row mt-3 d-flex justify-content-center">
                <p>
                  {{$englishmodal9}}
                </p>
              </div>
              <img class="mb-3" width="64px" src="assets/img/ferramenta-de-mao.png" alt="" srcset="">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- MODAL IDIOMAS -->
  @component('components.site.modal-idiomas')
  @endcomponent


@endsection