<!DOCTYPE html>
<html lang="es">

<head>
    <!-- ESTILOS EN CSS -->
    <link rel="stylesheet" href="css/index/formulario.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" media="(min-width:320px)" href="css/index/movil.css" />
    <link rel="stylesheet" media="(min-width:768px)" href="css/index/tablet.css" />
    <link rel="stylesheet" media="(min-width:1024px)" href="css/index/desktop.css" />

    <!-- CONEXION CON BOOTSTRAP v5.3 -->
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">

    <!-- SLIDER GENERAL -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css'>
</head>

<body>
    <!-----------------Header componente!!!----------------------->
    <header>
        <nav id="navBar" class="navbar navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img width="100px" src="./images/LOGOS/logo.png" alt=""
                        class="logo-general"></a>
                <button id="navbar-toggler" class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" style="padding-right: 8px; padding-left: 8px; padding-bottom: 3.500; padding-bottom: 4px;
                " aria-controls="offcanvasDarkNavbar">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <a class="navbar-brand" href="#"><img width="100px" src="./images/LOGOS/logo.png" alt=""
                            class="logo-general"></a>
                        <button id="btn-close" type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            ></button>
                    </div>
                    <div class="linea-div" style="margin: 5px 0px 5px 0px;"></div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a id="texto-nav" class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>                        
                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                <a id="texto-nav" class="nav-link active" aria-current="page" href="#reparacion" >Reparación de equipos</a>
                            </li>
                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                <a id="texto-nav" class="nav-link" href="#websites">Desarrollo Web</a>
                            </li>   
                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                <a id="texto-nav" class="nav-link active" aria-current="page" href="#tec-about">Soporte Tec y Nosotros</a>
                            </li>       
                            <li class="nav-item" data-bs-dismiss="offcanvas">
                                <a id="texto-nav" class="nav-link" href="#contacto">Contacto</a>
                            </li>      
                            <li class="nav-item" >
                                <a id="texto-nav" class="nav-link" href="#">Camaras</a>
                            </li>   
                            <li class="nav-item">
                                <a id="texto-nav" class="nav-link" href="#">Componentes pc</a>
                            </li>   
                        </ul>               
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <!-- Formulario -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/formulario.js"></script>

    <!-- Slider camaras -->
    <script src="js/carrusel-Individual.js"></script>

    <!-- principal js -->
    <script src="https://kit.fontawesome.com/6c240dc0e0.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c56cdedc82.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>

    <!-- Slider general -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js'></script>
    <script src="js/cards.js"></script>

</body>

</html>