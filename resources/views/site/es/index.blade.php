@extends('layouts.main')

@section('content')
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">

            <!-- <h1><a href="index.html">Zmassage</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="" class="mr-auto">
                <img src="{{ Storage::url($espanhollogo1) }}" alt="" class="img-fluid">
            </a>
            <h2 style="color: #fff; font-weight: bold;" class="w-50"> {{ $espanholtextoresumo }} </h2>

            <nav id="navbar" class="navbar mx-auto">
                <ul>
                    <li><a class="nav-link" href="#about">{{ $espanholmenu3 }}</a></li>
                    {{-- <li><a class="nav-link" href="#agendamento">{{$espanholmenu4}}</a></li> --}}
                    <li><a class="nav-link" href="#services">{{ $espanholmenu5 }}</a></li>
                    <li><a class="nav-link" href="#sructure">{{ $espanholmenu6 }}</a></li>
                    <li><a class="nav-link" href="#portfolio">{{ $espanholmenu7 }}</a></li>
                    <li><a class="nav-link" href="#contact">{{ $espanholmenu8 }}</a></li>
                    <li><a class="nav-link" href="">{{ $espanholmenu2 }}</a></li>
                    <li><a class="nav-link" href="#lgpd">{{ $espanholmenu10 }}</a></li>
                    <li>
                        <a class="nav-link" href="" data-bs-toggle="modal" data-bs-target="#idiomaModal">
                            {{ $espanholmenu9 }}
                            <i class="bi bi-translate fs-5 pe-2"></i>
                        </a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <div class="social-links">
                <a target="_blank" href="{{ $espanholwhatsapp }}" class="linkedin">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a target="_blank" href="{{ $espanholfacebook }}" class="linkedin">
                    <i class="bi bi-facebook"></i>
                </a>
                <a target="_blank" href="{{ $espanholinstagram }}" class="linkedin">
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
                <h2>{{ $espanholslide4 }}</h2>
                <p>{{ $espanholslide5 }}</p>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{ Storage::url($espanholslide1) }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>{{ $espanholslide6 }}</h3>
                    <p style="line-height: 32px;">{{ $espanholslide7 }}</p>
                </div>
            </div>

        </div><!-- End About Me -->
    </section>

    <!-- ======= LGPD ======= -->
    <section id="lgpd" class="about">

        <div class="about-me container">

            <div class="section-title">
                <h2>{{ $espanholtitlelgpd }}</h2>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left" style="text-align: justify;">
                    {!! $espanholcontainerlgpd !!}
                </div>
            </div>

        </div><!-- End About Me -->
    </section>

    <!-- ======= AGENDAMENTOS ======= -->
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
            });
        </script>

        <script>
            var largura = window.screen.width;
            var larguraFinal = (largura - 131) / 2;
            var minhaDiv = document.querySelector(".simplybook-widget-button");
            minhaDiv.style.left = larguraFinal + "px";
            minhaDiv.style.zindex = "999999";
        </script>
    </div>

    <!-- ======= ESTRUTURA ======= -->
    <section id="sructure" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>{{ $espanholestruturatitulo1 }}</h2>
                <p>{{ $espanholestruturatitulo2 }}</p>
            </div>

            <div class="container-fluid aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">
                    <div class="row g-0 portfolio-container" style="position: relative; height: 1125.9px;">
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem1) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem2) }}"
                                class="img-fluid" alt="">
                        </div>
                        <!-- <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                      style="position: absolute; left: 0px; top: 0px;">
                      <img style="border-radius: 15px;" src="assets/img/structure/structure3.jpg" class="img-fluid" alt="">
                    </div> -->
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem3) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem4) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem5) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem6) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem7) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem8) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem9) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem10) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem11) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem12) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem13) }}"
                                class="img-fluid" alt="">
                        </div>
                        <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
                            style="position: absolute; left: 0px; top: 0px;">
                            <img style="border-radius: 15px;" src="{{ Storage::url($espanholestruturaimagem14) }}"
                                class="img-fluid" alt="">
                        </div>

                    </div>
                </div>

            </div>
    </section>

    <!-- ======= SERVIÇOS ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>{{ $espanholtituloPagina }}</h2>
                <p>{{ $espanholtituloPrincipal }}</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ Storage::url($espanholservico1img) }}" alt="" class="img-fluid">
                        </div>
                        <h4>{{ $espanholservico1titulo }}</h4>
                        <p>{{ $espanholservico1descricao }}</p>
                        <br>
                        <p style="font-size: 20px;"><b>{{ $espanholservico1preco }}</b></p>
                        <p style="font-size: 20px;"><b>{{ $espanholservico1preco2 }}</b></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ Storage::url($espanholservico2img) }}" alt="" class="img-fluid">
                        </div>
                        <h4>{{ $espanholservico2titulo }}</h4>
                        <p>{{ $espanholservico2descricao }}</p>
                        <br>
                        <p style="font-size: 20px;"><b>{{ $espanholservico2preco }}</b></p>
                        <p style="font-size: 20px;"><b>{{ $espanholservico2preco2 }}</b></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ Storage::url($espanholservico3img) }}" alt="" class="img-fluid">
                        </div>
                        <h4>{{ $espanholservico3titulo }}</h4>
                        <p>{{ $espanholservico3descricao }}</p>
                        <br>
                        <p style="font-size: 20px;"><b>{{ $espanholservico3preco }}</b></p>
                        <p style="font-size: 20px;"><b>{{ $espanholservico3preco2 }}</b></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ Storage::url($espanholservico4img) }}" alt="" class="img-fluid">
                        </div>
                        <h4>{{ $espanholservico4titulo }}</h4>
                        <p>{{ $espanholservico4descricao }}</p>
                        <br>
                        <p style="font-size: 20px;"><b>{{ $espanholservico4preco }}</b></p>
                        <p style="font-size: 20px;"><b>{{ $espanholservico4preco2 }}</b></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ Storage::url($espanholservico5img) }}" alt="" class="img-fluid">
                        </div>
                        <h4>{{ $espanholservico5titulo }}</h4>
                        <p>{{ $espanholservico5descricao }}</p>
                        <br>
                        <p style="font-size: 20px;"><b>{{ $espanholservico5preco }}</b></p>
                        <p style="font-size: 20px;"><b>{{ $espanholservico5preco2 }}</b></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ Storage::url($espanholservico6img) }}" alt="" class="img-fluid">
                        </div>
                        <h4>{{ $espanholservico6titulo }}</h4>
                        <p>{{ $espanholservico6descricao }}</p>
                        <br>
                        <p style="font-size: 20px;"><b>{{ $espanholservico6preco }}</b></p>
                        <p style="font-size: 20px;"><b>{{ $espanholservico6preco2 }}</b></p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ Storage::url($espanholservico7img) }}" alt="" class="img-fluid">
                        </div>
                        <h4>{{ $espanholservico7titulo }}</h4>
                        <p>{{ $espanholservico7descricao }}</p>
                        <br>
                        <p style="font-size: 20px;"><b>{{ $espanholservico7preco }}</b></p>
                        <p style="font-size: 20px;"><b>{{ $espanholservico7preco2 }}</b></p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ Storage::url($espanholservico8img) }}" alt="" class="img-fluid">
                        </div>
                        <h4>{{ $espanholservico8titulo }}</h4>
                        <p>{{ $espanholservico8descricao }}</p>
                        <br>
                        <p style="font-size: 20px;"><b>{{ $espanholservico8preco }}</b></p>
                        <p style="font-size: 20px;"><b>{{ $espanholservico8preco2 }}</b></p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ Storage::url($espanholservico9img) }}" alt="" class="img-fluid">
                        </div>
                        <h4>{{ $espanholservico9titulo }}</h4>
                        <p>{{ $espanholservico9descricao }}</p>
                        <br>
                        <p style="font-size: 20px;"><b>{{ $espanholservico9preco }}</b></p>
                        <p style="font-size: 20px;"><b>{{ $espanholservico9preco2 }}</b></p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ Storage::url($espanholservico10img) }}" alt="" class="img-fluid">
                        </div>
                        <h4>{{ $espanholservico10titulo }}</h4>
                        <p>{{ $espanholservico10descricao }}</p>
                        <br>
                        <p style="font-size: 20px;"><b>{{ $espanholservico10preco }}</b></p>
                        <p style="font-size: 20px;"><b>{{ $espanholservico10preco2 }}</b></p>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-3">
                    <div class="icon-box">
                        <div class="icon">
                            <img src="{{ Storage::url($espanholservico11img) }}" alt="" class="img-fluid">
                        </div>
                        <h4>{{ $espanholservico11titulo }}</h4>
                        <p>{{ $espanholservico11descricao }}</p>
                        <br>
                        <p style="font-size: 20px;"><b>{{ $espanholservico11preco }}</b></p>
                        <p style="font-size: 20px;"><b>{{ $espanholservico11preco2 }}</b></p>
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
                    <h2>{{ $espanholdepoimento1 }}</h2>
                    <p>{{ $espanholdepoimento2 }}</p>
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
                <h2>{{ $espanholcontatoTituloPagina }}</h2>
                <p>{{ $espanholcontatoTituloPagina2 }}</p>
            </div>

            <div class="row mt-2">

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>{{ $espanholcontatoTituloEndereco }}</h3>
                        <p>
                            <a style="color: #fff;" target="__blank" href="https://goo.gl/maps/rLJGjkhmnTUZ2RjM9">
                                {{ $espanholcontatoSubtTituloEndereco }}
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-phone"></i>
                        <h3>{{ $espanholcontatoTituloTelefone }}</h3>
                        <p>
                            <a style="color: #fff;" href="tel:{{ $espanholcontatoTelefone }}">
                                {{ $espanholcontatoTelefone }}
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-md-12 col-12 mt-4 d-flex align-items-stretch mb-2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2660.6305690195454!2d16.32651481587353!3d48.175200956518395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476da9ea936a7595%3A0xcb0e7f005ea9b107!2sZmassage!5e0!3m2!1sde!2sbr!4v1650479445730!5m2!1sde!2sbr"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <br>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-share-alt"></i>
                        <h3>Social Profiles</h3>
                        <div class="social-links">
                            <!-- <a target="_blank" href="https://twitter.com/Zmassage1" class="twitter"><i class="bi bi-twitter"></i></a> -->
                            <a target="_blank" href="{{ $espanholcontatoLinkLinkedin }}" class="linkedin"><i
                                    class="bi bi-linkedin"></i></a>
                            <a target="_blank" href="{{ $espanholcontatoLinkFacebook }}" class="linkedin"><i
                                    class="bi bi-facebook"></i></a>
                            <a target="_blank" href="{{ $espanholcontatoLinkInstagram }}" class="linkedin"><i
                                    class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4 d-flex align-items-stretch">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>{{ $espanholcontatoTituloemail }}</h3>
                        <a style="color: #fff;"
                            href="mailto:{{ $espanholcontatoemail }}">{{ $espanholcontatoemail }}</a>
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
                href="https://instagram.com/matapimkt?igshid=YmMyMTA2M2Y=" target="_blank"
                style="color: black;">@matapimkt</a>
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
              <img width="250px" src="{{Storage::url($espanholmodalimg)}}" alt="{{$espanholmodal1}}">
              <div class="row mt-3 d-flex justify-content-center">
                <p style="width: 300px; color: #05c4f1; font-weight: bold;">
                  {{$espanholmodal1}}
                </p>
              </div>
              <div class="row d-flex justify-content-center">
                <div style="width: 300px;">
                  <a target="__blank" href="https://zmassage.simplybook.it/v2/" class="btn d-flex btn-agendamento">
                    <i style="font-size: 32px;" class='bx bx-calendar'></i>
                    {{$espanholmodal2}}
                  </a>
                </div>
              </div>
              <br>
              <div class="row" style="display: inline-flex;">
                <div class="col-4">
                  <a href="tel:{{$espanholmodal3}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxs-phone'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$espanholmodal4}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 36px;" class='bx bxl-whatsapp'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="mailto:{{$espanholmodal5}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bx-envelope'></i>
                    </div>
                  </a>
                </div>
              </div>

              <div class="row mt-3 mb-3" style="display: inline-flex;">
                <div class="col-4">
                  <a target="__blank"
                    href="{{$espanholmodal6}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxs-map'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$espanholmodal7}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxl-instagram'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="{{$espanholmodal8}}">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxl-facebook'></i>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row mt-3 d-flex justify-content-center">
                <p>
                  {{$espanholmodal9}}
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
