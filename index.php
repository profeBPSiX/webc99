<?php

// Inclou la biblioteca dotenv
require __DIR__ . '/vendor/autoload.php';

// Carrega les variables d'entorn des del fitxer .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $_ENV['APP_URL'] ?></title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1>OGSystems</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#services">Services</a></li>
          <li><a href="index.php#testimonials">Blog</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="index.php#about">Inici</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">OGSystems</h2>
            <p data-aos="fade-up" data-aos-delay="200">L'empresa facilitadora de solucions informàtiques</p>
          </div>
          <div class="col-lg-5">
            <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
              <input type="text" class="form-control" placeholder="Cerca servei">
              <input type="submit" class="btn btn-primary" value="Cerca">
            </form>
          </div>
        </div>
      </div>

    </section><!-- End Hero Section -->

    <!-- Clients Section - Home Page -->
    <section id="clients" class="clients">

      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

          <div class="col-xl-2 col-md-3 col-6 client-logo">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div><!-- End Client Item -->

        </div>

      </div>

    </section><!-- End Clients Section -->

    <!-- About Section - Home Page -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>Sobre Nosaltres</h3>
            <h2>Transformem idees en solucions digitals</h2>
            <p>Som una empresa dedicada a proporcionar solucions informàtiques innovadores i eficients per satisfer les necessitats dels nostres clients. La nostra passió és ajudar les empreses a assolir el seu màxim potencial a través de la tecnologia.</p>
            <a href="#" class="read-more"><span>Llegeix Més</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Solucions a mida</h3>
                  <p>Desenvolupem solucions informàtiques personalitzades que s'adapten a les necessitats específiques de cada client, assegurant resultats òptims i satisfacció total.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Innovació contínua</h3>
                  <p>Estem compromesos amb la innovació constant, buscant sempre noves formes de millorar els processos i oferir solucions tecnològiques d'avantguarda.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-command"></i>
                  <h3>Experiència experta</h3>
                  <p>El nostre equip compta amb una àmplia experiència i coneixements en diverses àrees de la tecnologia, garantint un enfocament integral i professional en cada projecte.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h3>Creixement sostenible</h3>
                  <p>Busquem promoure el creixement sostenible dels nostres clients mitjançant solucions escalables i sostenibles que impulsin el seu èxit a llarg termini.</p>
                </div>
              </div> <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->


    <!-- Stats Section - Home Page -->
    <section id="stats" class="stats">

      <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="88" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="52" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projectes</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hores de suport</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
              <p>Treballadors</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- End Stats Section -->

    <!-- Services Section - Home Page -->
    <section id="services" class="services">

      
      <div class="container section-title" data-aos="fade-up">
        <h2>Serveis</h2>
        <p>Descobreix els serveis que oferim per ajudar la teva empresa a créixer i prosperar en l'entorn digital.</p>
      </div>

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-laptop"></i></div>
              <div>
                <h4 class="title"><a href="detalls-serveis.html" class="stretched-link">Desenvolupament web</a></h4>
                <p class="description">Creem llocs web impressionants amb les darreres tecnologies per ajudar la teva empresa a destacar-se en línia.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-puzzle"></i></div>
              <div>
                <h4 class="title"><a href="detalls-serveis.html" class="stretched-link">Consultoria en TI</a></h4>
                <p class="description">Oferim assessorament expert en tecnologies de la informació per optimitzar els processos empresarials.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-server"></i></div>
              <div>
                <h4 class="title"><a href="detalls-serveis.html" class="stretched-link">Gestió de xarxes</a></h4>
                <p class="description">Administrem i optimitzem les xarxes informàtiques per garantir un rendiment i una seguretat màxims.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-cloud-upload"></i></div>
              <div>
                <h4 class="title"><a href="detalls-serveis.html" class="stretched-link">Emmagatzematge en el núvol</a></h4>
                <p class="description">Implementem solucions de núvol segures i eficients per emmagatzemar i gestionar les dades de la teva empresa.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-tools"></i></div>
              <div>
                <h4 class="title"><a href="detalls-serveis.html" class="stretched-link">Suport tècnic</a></h4>
                <p class="description">Brindem assistència tècnica ràpida i eficient per resoldre qualsevol problema informàtic que pugui sorgir.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-headset"></i></div>
              <div>
                <h4 class="title"><a href="detalls-serveis.html" class="stretched-link">Formació en tecnologia</a></h4>
                <p class="description">Impartim cursos de formació especialitzada per millorar les habilitats tecnològiques dels teus empleats.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- Pricing Section - Home Page -->
    <section id="pricing" class="pricing">

      <!--  Títol de la secció -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Preus</h2>
        <p>Tria el pla que millor s'ajusti a les teves necessitats</p>
      </div><!-- Final del Títol de la secció -->

      <div class="container" data-aos="zoom-in" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Pla Bàsic</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>$</sup>0<span> / mes</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Servei d'assessorament personalitzat per a les teves necessitats</span></li>
                <li><i class="bi bi-check"></i> <span>Accés exclusiu a recursos i eines avançades</span></li>
                <li><i class="bi bi-check"></i> <span>Assistència tècnica prioritària disponible les 24 hores</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Funcionalitats avançades addicionals disponibles</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Suport presencial personalitzat disponible</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Comprar Ara</a></div>
            </div>
          </div><!-- Final de l'Element de Preus -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Pla Professional</h3>
              <div class="icon">
                <i class="bi bi-rocket"></i>
              </div>

              <h4><sup>$</sup>29<span> / mes</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Servei d'assessorament personalitzat per a les teves necessitats</span></li>
                <li><i class="bi bi-check"></i> <span>Accés exclusiu a recursos i eines avançades</span></li>
                <li><i class="bi bi-check"></i> <span>Assistència tècnica prioritària disponible les 24 hores</span></li>
                <li><i class="bi bi-check"></i> <span>Funcionalitats avançades addicionals disponibles</span></li>
                <li><i class="bi bi-check"></i> <span>Suport presencial personalitzat disponible</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Comprar Ara</a></div>
            </div>
          </div><!-- Final de l'Element de Preus -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Pla Avançat</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>$</sup>49<span> / mes</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> <span>Servei d'assessorament personalitzat per a les teves necessitats</span></li>
                <li><i class="bi bi-check"></i> <span>Accés exclusiu a recursos i eines avançades</span></li>
                <li><i class="bi bi-check"></i> <span>Assistència tècnica prioritària disponible les 24 hores</span></li>
                <li><i class="bi bi-check"></i> <span>Funcionalitats avançades addicionals disponibles</span></li>
                <li><i class="bi bi-check"></i> <span>Suport presencial personalitzat disponible</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Comprar Ara</a></div>
            </div>
          </div><!-- Final de l'Element de Preus -->

        </div>

      </div>

    </section><!-- Final de la Secció de Preus -->


    <!-- Faq Section - Home Page -->
    <section id="faq" class="faq">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span>Preguntes </span><strong>Freqüents</strong></h3>
              <p>
                Descobreix respostes a les preguntes més comunes sobre els nostres serveis
              </p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>Què ofereix el vostre servei de manera destacada?</span></h3>
                <div class="faq-content">
                  <p>El nostre servei destaca per la seva eficàcia i professionalitat. Garantim resultats de primera qualitat.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Final de l'Element de Preguntes Freqüents -->

              <div class="faq-item">
                <h3><span class="num">2.</span> <span>Com puc contactar amb el vostre servei d'assistència al client?</span></h3>
                <div class="faq-content">
                  <p>Pots contactar amb el nostre servei d'assistència al client trucant al nostre número gratuït o enviant-nos un correu electrònic. Estem disponibles 24/7 per ajudar-te.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Final de l'Element de Preguntes Freqüents -->

              <div class="faq-item">
                <h3><span class="num">3.</span> <span>Quins mètodes de pagament accepteu?</span></h3>
                <div class="faq-content">
                  <p>Aceptem diversos mètodes de pagament, incloent targeta de crèdit, transferència bancària i PayPal. Trieu la opció que millor s'adapti a vosaltres.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Final de l'Element de Preguntes Freqüents -->

              <div class="faq-item">
                <h3><span class="num">4.</span> <span>Quina és la vostra política de reemborsament?</span></h3>
                <div class="faq-content">
                  <p>Garantim una política de reemborsament flexible. Si no esteu satisfets amb els nostres serveis, podeu sol·licitar un reemborsament dins del període establert.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Final de l'Element de Preguntes Freqüents -->

              <div class="faq-item">
                <h3><span class="num">5.</span> <span>Quins són els avantatges de registrar-se com a client habitual?</span></h3>
                <div class="faq-content">
                  <p>Els clients habituals gaudeixen d'avantatges exclusius, com descomptes especials, accés a contingut exclusiu i suport prioritari.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Final de l'Element de Preguntes Freqüents -->

            </div>

          </div>
        </div>

      </div>

    </section><!-- Final de FAQ -->



    <!-- Testimonials Section - Home Page -->
    <section id="testimonials" class="testimonials">

      <div class="container">

        <div class="row align-items-center">

          <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
            <h3>Últimes entrades al Blog</h3>
            <p>
              Descobreix les últimes novetats, consells i insights del nostre blog per estar al dia amb les últimes tendències i desenvolupaments en el món de la tecnologia.
            </p>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Marc Garcia</h3>
                        <h4>Analista de Dades</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>La meva experiència amb aquest servei ha estat excepcional. Des del primer dia, vaig notar una gran diferència en la meva productivitat i eficàcia en el treball. El seu suport tècnic també ha estat impecable, resolent qualsevol dubte o problema de manera ràpida i eficient.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Davida López</h3>
                        <h4>Enginyer de Software</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>He utilitzat molts serveis similars en el passat, però cap d'ells s'acosta al nivell de qualitat i rendiment d'aquest. La seva interfície és elegant i fàcil d'utilitzar, i les seves funcionalitats van més enllà de les meves expectatives. Sens dubte, un servei que recomanaria sense cap dubte.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Marta Soler</h3>
                        <h4>Propietària de Botiga</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Com a professional del màrqueting, la meva vida canvia quan vaig descobrir aquest servei. Ha millorat significativament la meva capacitat per gestionar campanyes, analitzar dades i connectar-me amb els meus clients. És una eina imprescindible per a qualsevol que vulgui destacar-se en el món del màrqueting digital.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Carles Martínez</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>El que més m'ha impressionat d'aquest servei és la seva fiabilitat. Mai m'ha fallat en un moment crucial, i sempre està disponible quan el necessito. És reconfortant saber que puc confiar plenament en aquest servei per al meu negoci.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Reven Roca</h3>
                        <h4>Emprenedora</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Després de provar diverses opcions, finalment vaig trobar el servei perfecte per a les meves necessitats. La seva simplicitat d'ús i la seva ampla gamma de funcionalitats el converteixen en la millor opció per a qualsevol professional que busqui augmentar la seva productivitat.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

              </div>


              
              <div class="swiper-pagination"></div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Testimonials Section -->


  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.php" class="logo d-flex align-items-center">
            <span>OGSystems</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Avd. François Mitterrand</p>
          <p>Encamp, N 535022</p>
          <p>Andorra</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+376 44 44 44 44</span></p>
          <p><strong>Correu:</strong> <span>info@ogsystems.ad</span></p>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>