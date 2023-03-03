<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Metadatos SEO -->
  <title>Los Tecnologicos</title>
  <meta name="description" content="Descripción de la página">
  <meta name="keywords" content="palabras clave, separadas, por, comas">
  <meta name="robots" content="index,follow">
  <meta name="googlebot" content="index,follow">

  <!-- Cache -->
  <meta http-equiv='cache-control' content='no-cache'>
  <meta http-equiv='expires' content='0'>
  <meta http-equiv='pragma' content='no-cache'>
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">

  <!-- Metadatos para redes sociales -->
  <meta property="og:title" content="Título de la página">
  <meta property="og:description" content="Descripción de la página">
  <meta property="og:image" content="URL de la imagen destacada">
  <meta property="og:url" content="URL de la página">
  <meta property="og:type" content="website">

  <!-- Metadatos para redes sociales TWITER -->
  <meta property="twitter:site_name" content="" />
  <meta property="twitter:title" content="" />
  <meta property="twitter:description" content="" />
  <meta property="twitter:image" content="" />

  <!-- Otros metadatos -->
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <!-- ESTILOS EN CSS -->
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" media="(min-width:320px)" href="../css/audivisual/movil.css" />
  <link rel="stylesheet" media="(min-width:768px)" href="../css/audivisual/tablet.css" />
  <link rel="stylesheet" media="(min-width:1024px)" href="../css/audivisual/desktop.css" />

  <!-- CONEXION CON BOOTSTRAP v5.3 -->
  <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">

  <!-- SLIDER GENERAL -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css'>
</head>


<body>

  <?php require('../componentesPHP/headerDos.php')?>


  <!--Banner -->
  <section class="section-contenedor-banner-principal">
    <h1 class="title-general-text">VIDEO Y FOTOGRAFIA</h1>
    <a class="scroll-link link-banner-principal" href="#contenido">VER MI TRABAJO</a>
  </section>

  <!--contenedor del slider -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicadores de diapositivas -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Diapositivas -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img loading="lazy" src="/images/audiovisual/slide1.jpg" alt="Imagen 1">
      </div>
      <div class="carousel-item">
        <video loading="lazy" class="videoback" src="../images/audiovisual/bannerVid.mp4" width="100%" height="100vh"
          autoplay loop muted></video>
      </div>
      <div class="carousel-item">
        <img loading="lazy" src="/images/audiovisual/slide3.jpg" alt="Imagen 2">
      </div>
    </div>

    <!-- Botones de control -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>

  <!--contenedor de videos -->
  <section class="section-cotenedor-de-videos">
    <h2 class="titulo-general-de-secciones" id="contenido">Nuestros videos</h2>

    <div class="cotenedor-de-videos">
      <video loading="lazy" autoplay loop muted style="border-radius: 6px;" class="cotenedor-videos"
        src="../images/audiovisual/section de camaras/construccion.mp4"></video>

      <video loading="lazy" autoplay loop muted style="border-radius: 6px;" class="cotenedor-videos"
        src="../images/audiovisual/section de camaras/boda.mp4"></video>

      <video loading="lazy" autoplay loop muted style="border-radius: 6px;" class="cotenedor-videos"
        src="../images/audiovisual/section de camaras/granja.mp4"></video>
    </div>
  </section>

  <!--contenedor de imagenes -->
  <section class="section-cotenedor-de-imagenes">

    <h2 class="titulo-general-de-secciones">Nuestras fotografias</h2>

    <div class="cotenedor-de-imagenes">
      <img loading="lazy" data-lightbox="grupo-de-imagenes" src="../images/audiovisual/portafolioIMG/1.jpg" alt=""
        class="img-cotenedor-de-imagenes modal-img">
      <img loading="lazy" data-lightbox="grupo-de-imagenes" src="../images/audiovisual/portafolioIMG/2.jpg" alt=""
        class="img-cotenedor-de-imagenes modal-img">
      <img loading="lazy" data-lightbox="grupo-de-imagenes" src="../images/audiovisual/portafolioIMG/3.jpg" alt=""
        class="img-cotenedor-de-imagenes modal-img">
      <img loading="lazy" data-lightbox="grupo-de-imagenes" src="../images/audiovisual/portafolioIMG/4.jpg" alt=""
        class="img-cotenedor-de-imagenes modal-img">
      <img loading="lazy" data-lightbox="grupo-de-imagenes" src="../images/audiovisual/portafolioIMG/5.jpg" alt=""
        class="img-cotenedor-de-imagenes modal-img">
      <img loading="lazy" data-lightbox="grupo-de-imagenes" src="../images/audiovisual/portafolioIMG/6.jpg" alt=""
        class="img-cotenedor-de-imagenes modal-img">
      <img loading="lazy" data-lightbox="grupo-de-imagenes" src="../images/audiovisual/portafolioIMG/7.jpg" alt=""
        class="img-cotenedor-de-imagenes modal-img">
      <img loading="lazy" data-lightbox="grupo-de-imagenes" src="../images/audiovisual/portafolioIMG/8.jpg" alt=""
        class="img-cotenedor-de-imagenes modal-img">
    </div>
  </section>

  <!--contenedor de servicios -->
  <section class="section-cotenedor-de-videos">
    <h2 class="titulo-general-de-secciones" id="contenido">Nuestros servicios</h2>

    <div class="cotenedor-de-servicios">
      <div class="div-servicio-info">
        <img src="../images/audiovisual/servicios/360.png" alt="" class="img-serivicio">
        <h3 class="nombre-servicio">Cabina de fotos 360</h3>
        <p class="descripccion-servicio">Gira alrededor de la diversión con nuestra cabina de fotos 360. Captura cada
          ángulo de tus momentos inolvidables en una experiencia única. ¡No te pierdas la oportunidad de tener fotos
          únicas y divertidas con la tecnología más avanzada!</p>
      </div>

      <div class="div-servicio-info">
        <img src="../images/audiovisual/servicios/dron.png" alt="" class="img-serivicio">
        <h3 class="nombre-servicio">Servicios de Dron</h3>
        <p class="descripccion-servicio">Eleve su producción audiovisual con nuestros servicios de dron. Obtenga tomas
          únicas y espectaculares de su evento o proyecto con la última tecnología en drones y pilotos expertos.
          ¡Contáctanos para llevar su producción al siguiente nivel!</p>
      </div>

      <div class="div-servicio-info">
        <img src="../images/audiovisual/servicios/edicioVideos.png" alt="" class="img-serivicio">
        <h3 class="nombre-servicio">Edición de Videos</h3>
        <p class="descripccion-servicio">Haz que tu video brille con nuestros servicios de edición. Nuestro equipo de
          expertos en edición transformará tu material en una obra maestra de calidad profesional. ¡Añade efectos,
          transiciones y mucho más para que tu video sea impresionante! Contáctanos para conocer más detalles.</p>
      </div>

      <div class="div-servicio-info">
        <img src="../images/audiovisual/servicios/fotografia.png" alt="" class="img-serivicio">
        <h3 class="nombre-servicio">Sesiones de Fotografías</h3>
        <p class="descripccion-servicio">Captura recuerdos inolvidables con nuestras sesiones de fotografía. Nuestro
          fotógrafo experto te guiarán en cada toma, para obtener resultados excepcionales. Ya sea para eventos
          personales o profesionales, ofrecemos una experiencia de fotografía única y de alta calidad.</p>
      </div>
    </div>
  </section>


  <!-----------------fOOTER----------------------->
  <?php require('../componentesPHP/footerDos.php')?>

  <!-- principal js -->
  <script src="https://kit.fontawesome.com/6c240dc0e0.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/c56cdedc82.js" crossorigin="anonymous"></script>
  <script src="../js/main.js"></script>
  <script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
  <script src="../js/camaras.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Slider general -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js'></script>
  <script src="../js/cards.js"></script>

  <!--efecto de desplazamiento suave-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    var $root = $('html, body');
    $('a.scroll-link[href^="#"]').click(function () {
      var href = $.attr(this, 'href');

      $root.animate({
        scrollTop: $(href).offset().top
      }, 500, function () {
        window.location.hash = href;
      });

      return false;
    });
  </script>
</body>

</html>