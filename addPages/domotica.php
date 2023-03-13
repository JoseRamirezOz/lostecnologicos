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
    <link rel="stylesheet" media="(min-width:1024px)" href="../css/domotica/desktop.css" />
    <link rel="stylesheet" media="(max-width:768px)" href="../css/domotica/movil.css" />
    <link rel="stylesheet" media="(min-width:768px)" href="../css/domotica/tablet.css" />
    

    <!-- CONEXION CON BOOTSTRAP v5.3 -->
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">

    <!-- SLIDER GENERAL -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css'>
</head>


<body>
    <!-----------------HEADER----------------------->
    <?php require('../componentesPHP/headerDos.php')?>

    <section id="sliderPrincipalDomotica">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../images/domotica/c1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div id="containerTextoSliderPrincipal">
                    <h5>Controla tu hogar desde cualquier lugar</h5>
                    <p id="textoSliderPrincipal">Mantén el control de tu hogar incluso cuando estás fuera. Con nuestra tecnología de domótica, puedes ajustar la temperatura, encender y apagar las luces y mucho más desde tu teléfono móvil.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../images/domotica/c2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div id="containerTextoSliderPrincipal">
                    <h5>Una casa inteligente para un estilo de vida más cómodo</h5>
                    <p id="textoSliderPrincipal">Haz de tu hogar un lugar más cómodo y eficiente con nuestra tecnología de domótica. Controla tus dispositivos electrónicos, monitorea la seguridad y ahorra energía con un solo clic.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../images/domotica/c3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <div id="containerTextoSliderPrincipal">
                    <h5>Seguridad y comodidad en un solo lugar</h5>
                    <p id="textoSliderPrincipal">Nuestros sistemas de domótica te ofrecen seguridad y comodidad en un solo lugar. Controla tu hogar con tu voz o con tu teléfono móvil y duerme tranquilo sabiendo que tu hogar está seguro.</p>
                </div>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>
 
    <section id="seccionIlumincacion">
        <article id="cardControlIlumincacion">
            <h2>Control de iluminación</h2>
            <p>Ofrecemos soluciones tecnologías que permiten controlar la iluminación de tu hogar, incluyendo reguladores de luz y sistemas de iluminación inteligente.</p>
        </article>
        <picture class="imgIluminacion">
            <img src="../images/domotica/d1.jpg" alt="">
        </picture>
    </section>

    <section id="seccionControlClima">
        <picture>
            <img src="../images/domotica/d2.jpg" alt="">
        </picture>
        <article>
            <h2>Control de clima</h2>
            <p>En nuestra era moderna, la tecnología se está integrando en todas las áreas de nuestras vidas, incluyendo nuestros hogares. El control de clima es una parte importante de la vida cotidiana, y con nuestra tecnología de domótica, puede disfrutar de un hogar más cómodo y eficiente energéticamente.
            </p>
        </article>
    </section>


    <section id="cardsSeccionServicios">
        <div class="card" style="width: 18rem;">
            <img src="../images/domotica/d3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Nuestros sistemas de audio y video para la domótica permiten la integración de todos los dispositivos electrónicos en un solo sistema, lo que significa que puedes controlar la televisión, la música y otros dispositivos de audio y video desde cualquier lugar de la casa. </p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="../images/domotica/d4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Nuestro servicio de monitoreo de energía para la domótica es una herramienta eficaz para ayudarte a reducir los costos de energía en tu hogar y mejorar la eficiencia energética en general. ¡Contáctanos ahora para obtener más información!</p>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="../images/domotica/d5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Con nuestra gestión de acceso para domótica, tendrás control completo sobre quién entra y sale de tu hogar. Nuestros sistemas incluyen cámaras y notificaciones en tiempo real para una seguridad adicional. ¡Protege tu hogar hoy mismo!</p>
            </div>
        </div>

        <!-- <div class="card" style="width: 18rem;">
            <img src="../images/domotica/d6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">¿Te gustaría controlar tu hogar desde cualquier lugar? Con nuestro servicio de control remoto para domótica, podrás hacerlo. Controla tus dispositivos electrónicos desde tu smartphone o tablet de manera fácil y cómoda. ¡Mejora tu calidad de vida con la domótica!</p>
            </div>
        </div> -->
    </section>
    

    <section id="seccionSliderFinal">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/domotica/d7.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../images/domotica/d8.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../images/domotica/d9.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    
    <!-----------------fOOTER----------------------->
    <?php require('../componentesPHP/footerDos.php')?>


    <!-- Formulario -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/formulario.js"></script>

    <!-- Slider camaras -->
    <!-- <script src="../js/carrusel-Individual.js"></script> -->

    <!-- div expand-->
    <script src="../js/divExpand.js"></script>

    <!-- principal js -->
    <script src="https://kit.fontawesome.com/6c240dc0e0.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c56cdedc82.js" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
    <script src="../bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>

    <!-- Slider general -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js'></script>
    <script src="../js/cards.js"></script>

</body>

</html>