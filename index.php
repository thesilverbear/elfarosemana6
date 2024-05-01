<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Periódico El Faro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <!-- Google font: Merriweather -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=News+Cycle:wght@400;700&family=Noticia+Text:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <!-- Google font: Crimson Text  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Stardos+Stencil:wght@400;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Titulo y navbar  -->
    <section id="title">
        <div class="container">
            <header class="border-bottom lh-1 py-3 no-border">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-center">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>
                    <h1 id="current-time" class="px-5"></h1>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li>
                            <a href="#" class="nav-link px-1 text-secondary"><img src="./assets/images/logoelfaro.png"
                                    class="logo"></a>
                        </li>

                    </ul>
                    <!-- Botones de Ingreso y Subscripción  -->
                    <div class="text-end">
                        <button type="button" class="btn btn-secondary">Ingresar</button>
                        <button type="button" class="btn btn-warning"><a href="./public/Vistas/suscripcion.php">Regístrate gratis</a></button>
                    </div>
                </div>
            </header>

            <!-- Anuncios  -->
            <section id="carousel-anuncios">
                <!-- Aqui va el carousel -->
                <div class="container">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner container-fluid">
                            <div class="carousel-item active">
                                <img src="./assets/images/chevrolet.png" class="d-block w-100 rounded mx-auto"
                                    height="210px" alt="anuncio-chevrolet" />
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/euclides.png" class="d-block w-100 rounded mx-auto"
                                    height="210px" alt="anuncio-departamento" />
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/images/fundorupanco.png" class="d-block w-100 rounded mx-auto"
                                    height="210px" alt="fundo-rupanco" />
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </section>

            <section id="navbar" class="w-100">
                <div class="nav-scroller py-1 mb-3 border-bottom rounded w-100">
                    <nav class="nav nav-underline justify-content-between align-items-center w-100">
                        <a class="nav-item nav-link link-body-emphasis active nav-links" href="index.php">General</a>
                        <a class="nav-item nav-link link-body-emphasis nav-links"
                            href="./public/Vistas/deportes.php">Deportes</a>
                        <a class="nav-item nav-link link-body-emphasis nav-links" href="./public/Vistas/negocios.php">Economía
                            y Negocios</a>
                        <a class="nav-item nav-link link-body-emphasis nav-links" href="./public/Vistas/mundo.php">Mundo</a>
                        <a class="nav-item nav-link link-body-emphasis nav-links" href="./public/Vistas/contacto.php">Contacto</a>
                    </nav>
                </div>
        </div>
    </section>

    <!-- Contenedor principal de contenido -->
    <section id="contenedor">
        <main class="container">
            <div class="row g-5">
                <div class="col-md-8">
                    <h3 class="pb-4 mb-4 border-bottom pt-3 noticias-generales">
                        Destacados
                    </h3>

                    <article class="blog-post mb-5">
                        <div>
                            <h3>Encuentran cadáver de un hombre a un costado de la Ruta 5 en Paine: Estaba maniatado y
                                presenta múltiples disparos</h3>
                            <p class="categoria"><a href="./index.php">GENERAL</a></p>
                            <p class="text-justify">A un costado de la Ruta 5 Sur, en la comuna de Paine, fue encontrado
                                este sábado el
                                cadáver de un hombre,
                                hecho que está
                                siendo investigado por el Ministerio Público y la Policía de Investigaciones (PDI).

                                De acuerdo a antecedentes preliminares, el cuerpo se encontraba maniatado al momento de
                                ser descubierto
                                y presentaba
                                múltiples impactos de bala.</p>
                            <img src="./assets/images/fiscalia.jpg" class="img-fluid rounded" width="100%"
                                alt="fiscalia pdi">
                    </article>
                    </br>
                    <article class="blog-post mb-5 mt-5">
                        <div>
                            <h3>Grúa inicia los trabajos para retirar los restos del puente de Baltimore</h3>
                            <p class="categoria"><a href="./public/Vistas/mundo.php">MUNDO</a></p>
                            <p class="text-justify">Este viernes comenzaron las operaciones que permitirían acceder al
                                lugar donde podrían estar los
                                trabajadores atrapados
                                en un vehículo bajo toneladas de concreto y acero</p>
                            <iframe class="video rounded" src="https://youtube.com/embed/cZA3_-fWlVk"></iframe>

                    </article>
                    </br>
                    <article class="blog-post mb-5 mt-5">
                        <div>
                            <h3>Joven es apuñalado durante evento en Las Condes y queda en riesgo vital</h3>
                            <p class="categoria"><a href="./index.php">GENERAL</a></p>
                            <p class="text-justify">El hecho ocurrió pasada las 01:00 horas de este jueves en la Terraza
                                Mirador, ubicada en un camino
                                paralelo al Parque
                                Natural La Plaza Sur, donde cerca de 200 personas asistieron a una fiesta organizada por
                                el Colegio La
                                Maisonnette.</p>
                            <audio class="audio-element audionoticia" controls>
                                <source src="./assets/apunalado.mp3" type="audio/mpeg">
                                Tu navegador no soporta este formato de audio.
                            </audio>
                            <img src="./assets/images/lascondes.jpeg" alt="corredor" class="img-fluid rounded"
                                width="100%">
                    </article>
                </div>

                <!-- Sección "Sobre Nosotros"  -->
                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="p-4 mb-3 bg-body-tertiary rounded sobre-nosotros">
                            <h4 class="fst-italic sobre-nosotros-titulo">Sobre nosotros</h4>
                            <p class="mb-0 sobre-nosotros-cuerpo">Somos un diario digital independiente que busca
                                ofrecerle noticias verídicas
                                e interesantes.</p>
                        </div>

                        <!-- Sección de Noticias Recientes  -->
                        <div>
                            <h4 class="fst-italic">Recientes</h4>
                            <ul class="list-unstyled sticky">
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                        href="#">
                                        <img src="./assets/images/bonos.png" width="120px" height="100px"
                                            alt="pesos chilenos" />
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">¿Tienes bonos pendientes? Revisa con tu RUT el dinero sin
                                                cobrar</h6>
                                            <small class="text-body-secondary">24 de Abril</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                        href="#">
                                        <img src="./assets/images/asesinato.png" width="120px" height="100px"
                                            alt="pesos chilenos" />
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">Asesinan a un hombre al interior de su casa en Puente Alto:
                                                sujetos dispararon desde vehículo</h6>
                                            <small class="text-body-secondary">24 de Abril</small>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                        href="#">
                                        <img src="./assets/images/tinder.png" width="120px" height="100px"
                                            alt="pesos chilenos" />
                                        <div class="col-lg-8">
                                            <h6 class="mb-0">Todo por el chisme: Tinder permitirá compartir tus citas
                                                con tus amigos</h6>
                                            <small class="text-body-secondary">24 de Abril</small>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>




                        <div class="p-4">
                            <h4 class="fst-italic">Encuéntranos:</h4>
                            <ol class="list-unstyled">
                                <li><a href="#"
                                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Instagram</a>
                                </li>
                                <li><a href="#"
                                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">X
                                        / Twitter</a></li>
                                <li><a href="#"
                                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Facebook</a>
                                </li>
                            </ol>
                        </div>
                    </div>

                </div>

                <!-- Grid de cartas para mostrar noticias pequeñas:  -->
                <div class="row row-cols-2 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="./assets/images/energiarenovable.png" class="card-img-top" height="100px"
                                width="150px" alt="energias renovables eolicas">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Las energías limpias y renovables lideran el camino hacia un
                                    futuro sostenible</h5>
                                <p class="card-text"></p>
                                <p class="card-text mt-auto"><a href="#"
                                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Leer
                                        más.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./assets/images/generador.png" class="card-img-top" height="100px" width="150px"
                                alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Descubre los diversos tipos de generadores eléctricos y sus
                                    cualidades</h5>
                                <p class="card-text"></p>
                                <p class="card-text mt-auto"><a href="#"
                                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Leer
                                        más.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./assets/images/enchufe.png" class="card-img-top" height="100px" width="150px"
                                alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Conoce los tipos de enchufes más utilizados hoy en día en
                                    edificaciones</h5>
                                <p class="card-text"></p>
                                <p class="card-text mt-auto"><a href="#"
                                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Leer
                                        más.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./assets/images/garcita.png" class="card-img-top" height="100px" width="150px"
                                alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Garcita azulada reaparece en Valparaíso: desde la mitad del siglo
                                    XX no se la veía en la región</h5>
                                <p class="card-text"></p>
                                <p class="card-text mt-auto"><a href="#"
                                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Leer
                                        más.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./assets/images/emprendedores.png" class="card-img-top" height="100px"
                                width="150px" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Tres emprendedores entregan consejos de oro para tener éxito en
                                    un negocio</h5>
                                <p class="card-text"></p>
                                <p class="card-text mt-auto"><a href="#"
                                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Leer
                                        más.</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="./assets/images/ferialibro.png" class="card-img-top" height="100px" width="150px"
                                alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Ferias, libros gratis y más: conoce las actividades del Día del
                                    Libro 2024</h5>
                                <p class="card-text"></p>
                                <p class="card-text mt-auto"><a href="#"
                                        class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Leer
                                        más.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </main>
    </section>




    <!-- Footer  -->
    <section id="footer">
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mb-0">
                <div class="col-md-6 d-flex align-items-center">
                    <a href="/" class="mb-5 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                        <svg class="bi" width="30" height="24">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>
                    <span class="mb-3 mb-md-0 text-light">© 2024 Periódico El Faro. Todos los derechos
                        reservados. </span>
                </div>

                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-light" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                <path
                                    d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                            </svg><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="text-light" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                            </svg><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="text-light" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                            </svg><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg></a></li>
                </ul>
            </footer>
        </div>
    </section>



    <!-- Tag de Script:  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <script src="script.js"></script>
</body>

</html>