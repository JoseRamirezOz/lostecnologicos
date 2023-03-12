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
    <link rel="stylesheet" media="(min-width:320px)" href="../css/componentes/movil.css" />
    <link rel="stylesheet" media="(min-width:768px)" href="../css/componentes/tablet.css" />
    <link rel="stylesheet" media="(min-width:1024px)" href="../css/componentes/desktop.css" />

    <!-- CONEXION CON BOOTSTRAP v5.3 -->
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">

    <!-- SLIDER GENERAL -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css'>
</head>


<body>
    <!-----------------HEADER----------------------->
    <?php require('../componentesPHP/headerDos.php')?>

    <!-----------------Banner principal----------------------->
    <section class="section-contenedor-banner-principal">
        <div class="div-contenedor-textos">
            <h1 class="title-general-text-banner-principal">Infraestructura de Red</h1>
            <p class="p-general-text-banner-principal">Ofrecemos servicios y productos de 
                infraestructura de red personalizados y eficientes para empresas y particulares. 
                Nuestro equipo altamente capacitado en diseño, implementación y optimización de redes 
                informáticas ofrece soluciones personalizadas y eficientes, y también brindamos
                una amplia gama de productos de calidad y servicios de soporte 
                técnico especializado para garantizar la satisfacción del cliente.</p>
        </div>

        <div class="contenedor-imagen-banner">
            <img class="-imagen-banner" src="../images/redes/r1.jpg" alt="">
        </div>
    </section>


    <!-----------------Banner principal----------------------->
    <section class="section-contenedor-banner-secundario">
        <h5 class="title-general-text-banner-secundario">Todo lo que necesitas para tu infraestructura de red, personal, un negocio o tu empresa</h5>
        <p class="p-general-text-banner-secundario"></p>
    </section>


    <!-----------------Slider banner----------------------->
    <h5 class="banner-titulo-general">Nuestros productos</h5>

    <main class="slider-fondo">
        <div class="testimonial-slider-banner">

            <div class="testimonial-slide">
                <div class="testimonial_box-top">
                    <img src="../images/redes/r3.jpg" alt="" class="banner-slider">
                </div>
            </div>

            <div class="testimonial-slide">
                <div class="testimonial_box-top">
                    <img src="../images/redes/r3.jpg" alt="" class="banner-slider">
                </div>
            </div>

            <div class="testimonial-slide">
                <div class="testimonial_box-top">
                    <img src="../images/redes/r3.jpg" alt="" class="banner-slider">
                </div>
            </div>

        </div>
    </main>

    <!-----------------Poductos audio----------------------->
    <h5 class="banner-titulo-general">Cableado Estructurado</h5>

    <section class="contenedor-de-productos-general">

        <div class="contenedor-de-productos-div">
            <div class="expand-container">

                <section class="expand-content">
                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/c1.png" alt="">
                        <p class="nombre-producto">RJ45</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/c2.png" alt="">
                        <p class="nombre-producto">RJ45</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/c3.png" alt="">
                        <p class="nombre-producto">RJ45</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/c4.png" alt="">
                        <p class="nombre-producto">RJ45</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/c1.png" alt="">
                        <p class="nombre-producto">RJ45</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/c2.png" alt="">
                        <p class="nombre-producto">RJ45</p>
                    </div>
                </section>
            </div>
            <button class="expand-button"><i class="fa-expand-class fa-solid fa-arrow-down"></i></button>
        </div>

        <div class="contenedor-imagen-banner banner-pc-productos">
            <img class="-imagen-banner" id="imgPrincipalCableadoEstructurado" src="../images/redes/cableado-estructurado.jpg" alt="">
        </div>
    </section>


    <!-----------------Poductos Computación----------------------->
    <h5 class="banner-titulo-general">Dispositivos de Red</h5>

    <section class="contenedor-de-productos-general">

        <div class="contenedor-de-productos-div">
            <div class="expand-container">

                <section class="expand-content">
                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/s1.png" alt="">
                        <p class="nombre-producto">d24-x3</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/s2.png" alt="">
                        <p class="nombre-producto">d24-x3</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/s3.png" alt="">
                        <p class="nombre-producto">d24-x3</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/s4.png" alt="">
                        <p class="nombre-producto">d24-x3</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/s5.png" alt="">
                        <p class="nombre-producto">d24-x3</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/s6.png" alt="">
                        <p class="nombre-producto">d24-x3</p>
                    </div>
                </section>
            </div>
            <button class="expand-button"><i class="fa-expand-class fa-solid fa-arrow-down"></i></button>
        </div>

        <div class="contenedor-imagen-banner banner-pc-productos">
            <img id="imgDispositivosRed" class="-imagen-banner" src="../images/redes/s0.jpg" alt="">
        </div>
    </section>



    <!-----------------Poductos Casa y Oficina----------------------->
    <h5 class="banner-titulo-general">Infraestructura de Servidor</h5>

    <section class="contenedor-de-productos-general">

        <div class="contenedor-de-productos-div">
            <div class="expand-container">

                <section class="expand-content">
                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/d1.png" alt="">
                        <p class="nombre-producto">Alexa</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/d2.png" alt="">
                        <p class="nombre-producto">Alexa</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/d3.png" alt="">
                        <p class="nombre-producto">Alexa</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/d4.png" alt="">
                        <p class="nombre-producto">Alexa</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/d5.png" alt="">
                        <p class="nombre-producto">Alexa</p>
                    </div>

                    <div class="producto-div">
                        <img class="img-producto" src="../images/redes/d6.png" alt="">
                        <p class="nombre-producto">Alexa</p>
                    </div>
                </section>
            </div>
            <button class="expand-button"><i class="fa-expand-class fa-solid fa-arrow-down"></i></button>
        </div>

        <div class="contenedor-imagen-banner banner-pc-productos">
            <img id="imagePrincipalInfraRed" class="-imagen-banner" src="../images/redes/d0.jpg" alt="">
        </div>
    </section>


    <!-----------------Cableado----------------------->
    <h5 class="banner-titulo-general">Sistemas de refrigeración</h5>

    <div class="container text-center my-3">
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <div class="card-img">
                                <img src="../images/redes/r1.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card-img">
                                <img src="../images/redes/r2.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card-img">
                                <img src="../images/redes/r3.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card-img">
                                <img src="../images/redes/r4.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card-img">
                                <img src="../images/redes/r5.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="prev">
                    <p class="carousel-control-prev-icon" aria-hidden="true"></p>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                    data-bs-slide="next">
                    <p class="carousel-control-next-icon" aria-hidden="true"></p>
                </a>
            </div>
        </div>
    </div>

    <!-----------------Banner final----------------------->
    <section class="contenedor-de-banner-final">
        <div class="div-contenedor-textos">
            <h1 class="title-general-text-banner-final"></h1>
            <p class="p-general-text-banner-final">"Optimiza la velocidad y el rendimiento de tu red con nuestra amplia selección de servicios de sistemas de red. Desde la configuración de redes locales hasta la implementación de soluciones de seguridad, tenemos lo que necesitas"</p>
        </div>
    </section>

    <!-----------------Banner final----------------------->
    <section class="section-contenedor-about-me-y-tec row-col-desk">
        <div class="contenedor-general-div-section-6 fondo-section-6-osc">
            <h4 class="title-general-text">Potencia sin Límites</h4>
            <p class="p-general-text-dos otros-dispositivos-general-div-con-imagen">Maximiza la eficiencia y productividad de tu negocio con nuestras soluciones de sistemas de red personalizadas.</p>
        </div>

        <div class="contenedor-general-div-section-6 fondo-section-6-cla">
            <h4 class="title-general-text-oscuro">Maximiza tu negocio</h4>
            <p class="p-general-text-oscuro otros-dispositivos-general-div-con-imagen">Obtén soporte técnico en tiempo real y análisis detallados del rendimiento de tu red para identificar cuellos de botella y optimizar su velocidad y eficiencia.
            </p>
        </div>
    </section>


    <section class="section-contenedor-about-me-y-tec">
        <div class="contenedor-general-div-section-6 fondo-section-6-osc">
            <h4 class="title-general-text">Haz realidad tu idea</h4>
            <p class="p-general-text-dos otros-dispositivos-general-div-con-imagen">Ofrecemos una amplia selección de servicios de sistemas de red, desde la configuración de redes locales hasta la implementación de soluciones de seguridad.</p>
        </div>

        <div class="contenedor-general-div-section-6 fondo-section-6-cla">
            <h4 class="title-general-text-oscuro">Venta al mayoreo</h4>
            <p class="p-general-text-oscuro otros-dispositivos-general-div-con-imagen">Ofrecemos una amplia variedad de productos tecnológicos de alta calidad a precios de mayoreo. Desde cables hasta componentes de computadoras, nuestros productos garantizan un rendimiento óptimo y una durabilidad duradera. ¡Haz tu pedido hoy y haz crecer tu negocio con nosotros!
            </p>
        </div>
    </section>

    <!-----------------fOOTER----------------------->
    <?php require('../componentesPHP/footerDos.php')?>


    <!-- Formulario -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/formulario.js"></script>

    <!-- Slider camaras -->
    <script src="../js/carrusel-Individual.js"></script>

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