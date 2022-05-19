@extends('layouts.main')

@section('content')

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <!-- <h1><a href="index.html">Zmassage</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="" class="mr-auto">
        <img src="assets/img/logo-sem-fundo.png" alt="" class="img-fluid">
      </a>
      <h2 style="color: #fff; font-weight: bold;" class="w-50"> {{$telefone}} </h2>

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
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/about2.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Zmassage</h3>
          <p>
            Alle meine Patienten kommen zur Z-Massage, weil ihr Arzt meine Dienste empfohlen hat oder jemand, den sie
            kennen, ein Patient von mir schon war. Ich bin hochqualifiziert und kenne mich mit einem fürsorglichen und
            professionellen Ansatz für Ihre Rehabilitationsbedürfnisse aus.
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <!-- <div class="counts container">

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="bi bi-journal-richtext"></i>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-headset"></i>
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="bi bi-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Awards</p>
          </div>
        </div>

      </div>

    </div> -->
    <!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <!-- <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">100%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">80%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div> -->
    <!-- End Skills -->

    <!-- ======= Interests ======= -->
    <!-- <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3>Lorem Ipsum</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3>Dolor Sitema</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3>Sed perspiciatis</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3>Magni Dolores</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3>Nemo Enim</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3>Eiusmod Tempor</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3>Midela Teren</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3>Pira Neve</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3>Dirada Pack</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3>Moton Ideal</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3>Verdo Park</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3>Flavor Nivelanda</h3>
          </div>
        </div>
      </div>

    </div> -->
    <!-- End Interests -->

  </section>

  <!-- ======= AGENDAMENTOS ======= -->
  <section id="agendamento" class="agendamento">
    <div class="about-me container">

      <div class="section-title">
        <h2>Terminplanung</h2>
        <p> Einen Termin machen </p>
      </div>

      <div class="row align-items-center">
        <div class="col-lg-12 pt-4 pt-lg-0 content" data-aos="fade-left">
          <div class="text-center">
            <a href="https://zmassage.simplybook.it/v2/" target="_blank">
              <button class="btn p-2"> JETZT BERATUNG BUCHEN </button>
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
        <h2>STRUCTURE</h2>
        <p>STRUCTURE</p>
      </div>

      <div class="container-fluid aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">
          <div class="row g-0 portfolio-container" style="position: relative; height: 1125.9px;">
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure1.jpg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure2.jpg" class="img-fluid" alt="">
            </div>
            <!-- <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure3.jpg" class="img-fluid" alt="">
            </div> -->
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure4.jpg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure8.jpg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure5.jpg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure6.jpg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure7.jpg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure9.jpg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure10.jpg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure15.jpeg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure11.jpeg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure12.jpeg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure13.jpg" class="img-fluid" alt="">
            </div>
            <div class="zoom p-3 col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app"
              style="position: absolute; left: 0px; top: 0px;">
              <img style="border-radius: 15px;" src="assets/img/structure/structure14.jpg" class="img-fluid" alt="">
            </div>

          </div>
        </div>

      </div>
  </section>

  <!-- ======= SERVIÇOS ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p>Services</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon">
              <img src="assets/img/services/service1.jpeg" alt="" class="img-fluid">
            </div>
            <h4>Heilmassage, <br> 30 & 60 Minuten</h4>
            <p>Heilmassage wirkt vitalisierend und aktivierend, regenerierend und entspannend, sowie schmerzlindernd.
              Unterschiedliche Massagegriffe fördern die Entschlackung und Entgiftung des Körpers und führen zu einer
              allgemeinen Entspannung von Körper, Geist und Seele.</p>
            <br>
            <p style="font-size: 20px;"><b>30 Minuten - 35 €</b></p>
            <p style="font-size: 20px;"><b>60 Minuten - 65 €</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon">
              <img src="assets/img/services/service2.jpeg" alt="" class="img-fluid">
            </div>
            <h4> Klassische Massage <br> 30 & 60 Minuten </h4>
            <p> klassische Massage dient der Entspannung, Lockerung und Dehnung des Muskelgewebes, kann aber auch
              schlaffe Muskeln kräftigen. Gleichzeitig wird die Durchblutung des Gewebes und der Haut stimuliert, was
              sich positiv auf Kreislauf und Wohlbefinden auswirkt. </p>
            <br>
            <p style="font-size: 20px;"><b>30 Minuten - 35 €</b></p>
            <p style="font-size: 20px;"><b>60 Minuten - 65 €</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon">
              <img src="assets/img/services/service3.jpeg" alt="" class="img-fluid">
            </div>
            <h4> Bein- und Fußmassage <br> 30 & 60 Minuten, </h4>
            <p> Die klassische Fuß- und Bein-Massage ist eine äußerst wohltuende und kräftige Massage. Sie entspannt die
              Muskulatur, regt die Durchblutung an und beseitigt das Gefühl "schwerer" Beine. Dabei werden beide Füße
              und Wadenbeine massiert. </p>
            <br>
            <p style="font-size: 20px;"><b>30 Minuten - 35 €</b></p>
            <p style="font-size: 20px;"><b>60 Minuten - 65 €</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="assets/img/services/service7.jpeg" alt="" class="img-fluid">
            </div>
            <h4> Manuelle Lymphdrainage 30 & 60 Minuten </h4>
            <p>Die Manuelle Lymphdrainage aktiviert mit sanften, pumpenden und kreisenden Bewegungen unser Lymphsystem
              und hilft so Schwellungen und Schmerzen rasch zu reduzieren und das Gewebe wieder zu lockern.</p>
            <p style="font-size: 20px;"><b>30 Minuten - 35 €</b></p>
            <p style="font-size: 20px;"><b>60 Minuten - 65 €</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="assets/img/services/service4.jpeg" alt="" class="img-fluid">
            </div>
            <h4> Fußreflexzonenmassage 30 Minuten </h4>
            <p> Eine professionelle Fußreflexzonenmassage ist nicht nur entspannend, sie verbessert die Durchblutung der
              Füße und kann dabei helfen, den ganzen Körper zu therapieren. Bei einer Fußreflexzonenmassage werden
              bestimmte Druckpunkte am Fuß stimuliert, um zum Beispiel körperliche Beschwerden und Verspannungen zu
              lösen. </p>
            <br>
            <p style="font-size: 20px;"><b>30 Minuten - 35 €</b></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="assets/img/services/service5.jpeg" alt="" class="img-fluid">
            </div>
            <h4> Harmonie in der Schwangerschaft 60 Minuten </h4>
            <p> Lymphdrainage zur Entstauung der Beine. Klassische Rückenmassage. Die Massage wird abhängig von Stadium
              und Beschwerden der Schwangeren durchgeführt werden. In der Frühschwangerschaft kann eine Massage den
              Kreislauf anregen oder auch der eventuell auftretenden Übelkeit entgegenwirken. Im zweiten und dritten
              Trimester kann bei Rücken- und Nackenschmerzen gezielt massiert werden. Die Durchblutung des Bindegewebes
              und der Muskeln wird angeregt, Verspannungen werden gelöst. </p>
            <br>
            <p style="font-size: 20px;"><b>60 Minuten - 65 €</b></p>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon">
              <img src="assets/img/services/service6.jpeg" alt="" class="img-fluid">
            </div>
            <h4>Schwangerschaft Rückenbehandlung 30 & 60 Minuten</h4>
            <p>In der Frühschwangerschaft kann eine Massage den Kreislauf anregen oder auch der eventuell auftretenden
              Übelkeit entgegenwirken. Im zweiten und dritten Trimester kann bei Rücken- und Nackenschmerzen gezielt
              massiert werden. Die Durchblutung des Bindegewebes und der Muskeln wird angeregt, Verspannungen werden
              gelöst. Auch Fußreflexzonenmassagen können bei Schwangeren eine wahre Wohltat sein - wenn z.B.
              Wassereinlagerungen in den Beinen oder Verdauungsprobleme auftreten. Die Massage wird abhängig von Stadium
              und Beschwerden der Schwangeren durchgeführt werden.</p>
            <br>
            <p style="font-size: 20px;"><b>30 Minuten - 35 €</b></p>
            <p style="font-size: 20px;"><b>60 Minuten - 65 €</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="assets/img/services/service8.jpeg" alt="" class="img-fluid">
            </div>
            <h4> Kompressionstherapie, beide Beine und Hüfte 50 Minuten </h4>
            <p>Es wird ein ein- bis mehrkammerige, doppelwandige Hüft- und Hosenmanschetten angelegt. Diese Manschetten
              werden vom AIK-Gerät mechanisch über Schlauchsysteme mit Luft gefüllt. Abwechselnd finden so eine
              Kompression und Druckentlastung statt. Beim liegenden Patienten kann so die Funktion der Muskelpumpe
              simuliert und der venöse Abstrom verbessert werden. Außerdem wird es erfolgreich den effektiven Abbau von
              Cellulite, eines Lipödems und Lymphödems unterstützen. Die Kammern erzeugen eine Druckwelle von unten nach
              oben. Bei einem Lipödem kann diese Therapie deutlich zur Schmerzreduktion beitragen. AIK-Geräte sind aber
              nicht nur bei Lip- und Lymphödemen einsetzbar. Sie können die gestörte Funktion von Venenabschnitten
              kompensieren, die Strömungsgeschwindigkeit des Blutes in den Venen erhöhen und das Fortschreiten einer
              chronischen Veneninsuffizienz verhindern. Im Rahmen einer Kompressionstherapie wird der Druck auf das
              Gewebe erhöht und Ödeme können resorbiert werden. Unter einer Kompressionstherapie verbessert sich sowohl
              die Blutzirkulation der großen Blutgefäße als auch die Durchblutung der Haut und der Lymphabfluss. </p>
            <br>
            <p style="font-size: 20px;"><b>50 Minuten - 65 €</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="assets/img/services/service9.jpeg" alt="" class="img-fluid">
            </div>
            <h4> Kompressionstherapie, ein Bein 25 Minuten </h4>
            <p>
              Es wird ein ein- bis mehrkammerige, doppelwandige Beinmanschette angelegt. Diese Manschette wird vom
              AIK-Gerät mechanisch über Schlauchsysteme mit Luft gefüllt. Abwechselnd finden so eine Kompression und
              Druckentlastung statt. Beim liegenden Patienten kann so die Funktion der Muskelpumpe simuliert und der
              venöse Abstrom verbessert werden. Außerdem wird es erfolgreich den effektiven Abbau von Cellulite, eines
              Lipödems und Lymphödems unterstützen.
              <br>
              Die Kammern erzeugen eine Druckwelle von unten nach oben. Bei einem Lipödem kann diese Therapie deutlich
              zur Schmerzreduktion beitragen.
              <br>
              AIK-Geräte sind aber nicht nur bei Lip- und Lymphödemen einsetzbar. Sie können die gestörte Funktion von
              Venenabschnitten kompensieren, die Strömungsgeschwindigkeit des Blutes in den Venen erhöhen und das
              Fortschreiten einer chronischen Veneninsuffizienz verhindern. Im Rahmen einer Kompressionstherapie wird
              der Druck auf das Gewebe erhöht und Ödeme können resorbiert werden. Unter einer Kompressionstherapie
              verbessert sich sowohl die Blutzirkulation der großen Blutgefäße als auch die Durchblutung der Haut und
              der Lymphabfluss.
            </p>
            <br>
            <p style="font-size: 20px;"><b>25 Minuten - 35 €</b></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="assets/img/services/service10.jpeg" alt="" class="img-fluid">
            </div>
            <h4> Kompressionstherapie, ein Arm 25 Minuten </h4>
            <p>
              Es wird ein ein- bis mehrkammerige, doppelwandige Armmanschette angelegt. Diese Manschette werden vom
              AIK-Gerät mechanisch über Schlauchsysteme mit Luft gefüllt. Abwechselnd finden so eine Kompression und
              Druckentlastung statt. Beim liegenden Patienten kann so die Funktion der Muskelpumpe simuliert und der
              venöse Abstrom verbessert werden. Außerdem wird es erfolgreich den effektiven Abbau von Cellulite, eines
              Lipödems und Lymphödems unterstützen.
              <br>
              Die Kammern erzeugen eine Druckwelle von unten nach oben. Bei einem Lipödem kann diese Therapie deutlich
              zur Schmerzreduktion beitragen.
              <br>
              AIK-Geräte sind aber nicht nur bei Lip- und Lymphödemen einsetzbar. Sie können die gestörte Funktion von
              Venenabschnitten kompensieren, die Strömungsgeschwindigkeit des Blutes in den Venen erhöhen und das
              Fortschreiten einer chronischen Veneninsuffizienz verhindern. Im Rahmen einer Kompressionstherapie wird
              der Druck auf das Gewebe erhöht und Ödeme können resorbiert werden. Unter einer Kompressionstherapie
              verbessert sich sowohl die Blutzirkulation der großen Blutgefäße als auch die Durchblutung der Haut und
              der Lymphabfluss.
            </p>
            <br>
            <p style="font-size: 20px;"><b>25 Minuten - 35 €</b></p>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 d-flex align-items-stretch mt-3">
          <div class="icon-box">
            <div class="icon">
              <img src="assets/img/services/service11.jpeg" alt="" class="img-fluid">
            </div>
            <h4> Kompressionstherapie Hüfte 25 Minuten </h4>
            <p>
              Es wird ein ein- bis mehrkammerige, doppelwandige Hüftmanschette angelegt. Diese Manschette wird vom
              AIK-Gerät mechanisch über Schlauchsysteme mit Luft gefüllt. Abwechselnd finden so eine Kompression und
              Druckentlastung statt. Beim liegenden Patienten kann so die Funktion der Muskelpumpe simuliert und der
              venöse Abstrom verbessert werden. Außerdem wird es erfolgreich den effektiven Abbau von Cellulite, eines
              Lipödems und Lymphödems unterstützen.
              <br>
              Die Kammern erzeugen eine Druckwelle von unten nach oben. Bei einem Lipödem kann diese Therapie deutlich
              zur Schmerzreduktion beitragen.
              <br>
              AIK-Geräte sind aber nicht nur bei Lip- und Lymphödemen einsetzbar. Sie können die gestörte Funktion von
              Venenabschnitten kompensieren, die Strömungsgeschwindigkeit des Blutes in den Venen erhöhen und das
              Fortschreiten einer chronischen Veneninsuffizienz verhindern. Im Rahmen einer Kompressionstherapie wird
              der Druck auf das Gewebe erhöht und Ödeme können resorbiert werden. Unter einer Kompressionstherapie
              verbessert sich sowohl die Blutzirkulation der großen Blutgefäße als auch die Durchblutung der Haut und
              der Lymphabfluss.
            </p>
            <br>
            <p style="font-size: 20px;"><b>25 Minuten - 35 €</b></p>
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
          <h2>Depositions</h2>
          <p>Customer Testimonials</p>
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
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Address</h3>
            <p> <a style="color: #fff;" target="__blank" href="https://goo.gl/maps/rLJGjkhmnTUZ2RjM9"> Rollingergasse 6/2/R01, 1120 Wien </a></p>
          </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone"></i>
            <h3>Phone</h3>
            <p> <a style="color: #fff;" href="tel:+436781223238"> +43 678 1223238 </a></p>
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
              <a target="_blank" href="https://www.linkedin.com/in/ezequiel-pereira-cooke-b9a3341aa/"
                class="linkedin"><i class="bi bi-linkedin"></i></a>
              <a target="_blank" href="https://www.facebook.com/www.zmassage.at" class="linkedin"><i
                  class="bi bi-facebook"></i></a>
              <a target="_blank" href="https://instagram.com/zmassage_vienna?igshid=YmMyMTA2M2Y=" class="linkedin"><i
                  class="bi bi-instagram"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <a style="color: #fff;" href="mailto:contact@zmassage.at">contact@zmassage.at</a>
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
    </b> </div>

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
              <img width="250px" src="assets/img/logo-circular.png" alt="" srcset="">
              <div class="row mt-3 d-flex justify-content-center">
                <p style="width: 300px; color: #05c4f1; font-weight: bold;">
                  "So wie ein Auto einen guten Mechaniker braucht, so braucht der Korper einen guten Masseur."
                </p>
              </div>
              <div class="row d-flex justify-content-center">
                <div style="width: 300px;">
                  <a target="__blank" href="https://zmassage.simplybook.it/v2/" class="btn d-flex btn-agendamento">
                    <i style="font-size: 32px;" class='bx bx-calendar'></i>
                    Termin vereinbaren
                  </a>
                </div>
              </div>
              <br>
              <div class="row" style="display: inline-flex;">
                <div class="col-4">
                  <a href="tel:+436781223238">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxs-phone'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="https://api.whatsapp.com/send?phone=436781223238">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 36px;" class='bx bxl-whatsapp'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="mailto:contact@zmassage.at">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bx-envelope'></i>
                    </div>
                  </a>
                </div>
              </div>

              <div class="row mt-3 mb-3" style="display: inline-flex;">
                <div class="col-4">
                  <a target="__blank"
                    href="https://goo.gl/maps/c9UyEDZFcWNic5CX8">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxs-map'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="https://instagram.com/zmassage_vienna?igshid=YmMyMTA2M2Y=">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxl-instagram'></i>
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a target="__blank" href="https://www.facebook.com/www.zmassage.at">
                    <div id="icons-modal" class="d-flex justify-content-center align-items-center">
                      <i style="font-size: 32px;" class='bx bxl-facebook'></i>
                    </div>
                  </a>
                </div>
              </div>
              <div class="row mt-3 d-flex justify-content-center">
                <p>
                  Tippen Sie auf die Symbole, um darauf zuzugreifen
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

  <!-- MODAL AGENDAMENTO -->
  <!-- <div class="modal fade" id="modalAgendamento" tabindex="-1" aria-labelledby="modalAgendamentoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalAgendamentoLabel"> EINEN TERMIN MACHEN </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
          <div class="mx-auto">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
  </div> -->


@endsection