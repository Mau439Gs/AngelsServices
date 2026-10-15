<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Angels Service</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
              rel="stylesheet"
              integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
              crossorigin="anonymous">

        <link rel="stylesheet"
              href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

        <link rel="icon" type="image/x-icon" href="{{ asset('img/Solo_Logo.png') }}">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <header>
            <nav class="navbar navbar-dark bg-black fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand m-0" href="{{ url('/') }}">
                        <img src="{{ asset('img/Solo_Logo.png') }}"
                             alt="SERVINTSA"
                             class="p-1 rounded-2"
                             style="height: 60px; width: auto;">
                        <b>ANGELS</b> SERVICE
                    </a>

                    <button class="navbar-toggler"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNavbar"
                            aria-controls="offcanvasNavbar"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="offcanvas offcanvas-end bg-black"
                         tabindex="-1"
                         id="offcanvasNavbar"
                         aria-labelledby="offcanvasNavbarLabel">

                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">
                                Menú
                            </h5>

                            <button type="button"
                                    class="btn-close btn-close-white"
                                    data-bs-dismiss="offcanvas"
                                    aria-label="Close">
                            </button>
                        </div>

                        <div class="offcanvas-body">
                            <ul class="navbar-nav w-100 justify-content-end">
                                <li class="nav-item text-nowrap">
                                    <a class="nav-link active" href="{{ url('/') }}">
                                        <i class="bi bi-house"></i> Inicio
                                    </a>
                                </li>

                                <li class="nav-item text-nowrap">
                                    <a class="nav-link"
                                       href="https://wa.me/4428980000"
                                       target="_blank">
                                        <i class="bi bi-whatsapp"></i> Contacto
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container-fluid p-0 w-100"
             style="
                background-image: url('{{ asset('img/INICIO-1.png') }}');
                margin-top: 85px;
                margin-bottom: 85px;
             ">

            <div style="
                margin: 0;
                padding: 8%;
                padding-left: 7%;
                padding-right: 7%;
                background-color: rgba(33, 37, 41, 0.8);
            ">
                <h1 class="text-center aparicion mt-3 mb-5 text-white">
                    <b>ANGELS</b> SERVICE
                </h1>

                <h2 class="text-center mb-5 aparicion text-white">
                    ¿Quienes somos?
                </h2>

                <p class="text-center aparicion text-white"
                   style="
                       font-size: 24px;
                       padding-left: 10%;
                       padding-right: 10%;
                   ">
                    Angels Service es una empresa dedicada a brindar servicios de
                    mantenimiento y reparación de electrodomésticos, comprometida con
                    la calidad y la satisfacción del cliente.<br><br>

                    Nuestro equipo de técnicos altamente capacitados se especializa en
                    el mantenimiento y reparación de una amplia gama de electrodomésticos,
                    incluyendo televisores, aires acondicionados, línea blanca y otros
                    dispositivos electrónicos.<br><br>

                    Nos esforzamos por ofrecer un servicio confiable, eficiente y
                    asequible para garantizar que los electrodomésticos de nuestros
                    clientes funcionen de manera óptima y prolonguen su vida útil.
                </p>

                <p class="text-center aparicion">
                    <!--
                    <a href="{{ url('/quienes-somos') }}">
                        <button type="button" class="btn btn-outline-light">
                            Ver mas
                        </button>
                    </a>
                    -->
                </p>
            </div>
        </div>

        <h1 class="text-center fw-bold mb-5 aparicion">
            Nuestros servicios
        </h1>

        <div class="container-fluid">

            <p class="text-center mb-1 aparicion"
               style="font-size: 20px;">
                En Angels Service, ofrecemos una amplia gama de servicios de
                mantenimiento y reparación.
            </p>

            <div class="row">
                <div class="col text-center"
                     style="padding: 5%;">
                    <img class="aparicion"
                         src="{{ asset('img/iconos/smart-tv.png') }}"
                         height="150"
                         alt="...">

                    <h4 class="p-2 aparicion">
                        Mantenimiento a equipos electrónicos
                    </h4>
                </div>

                <div class="col text-center"
                     style="padding: 5%;">
                    <img class="aparicion"
                         src="{{ asset('img/iconos/air-conditioner.png') }}"
                         height="150"
                         alt="...">

                    <h4 class="p-2 aparicion">
                        Mantenimiento de aires acondicionados
                    </h4>
                </div>
            </div>

            <div class="row">
                <div class="col text-center"
                     style="padding: 5%;">
                    <img class="aparicion"
                         src="{{ asset('img/iconos/laundry.png') }}"
                         height="150"
                         alt="...">

                    <h4 class="p-2 mt-5 aparicion">
                        Mantenimiento a linea blanca
                    </h4>
                </div>

                <div class="col text-center"
                     style="padding: 5%;">
                    <img class="aparicion"
                         src="{{ asset('img/iconos/microwave-oven.png') }}"
                         height="150"
                         alt="...">

                    <h4 class="p-2 aparicion">
                        Mantenimiento de electrodomésticos
                    </h4>
                </div>
            </div>

        </div>

        <div class="container-fluid fondo_oscuro"
             style="padding: 3%; padding-top: 7.5%; padding-bottom: 7.5%; margin-bottom: 5%;">

            <div class="row mb-5">
                <div class="col aparicion text-center">
                    <i class="bi bi-bullseye"
                       style="font-size: 8rem;"></i>
                    <br>

                    <h2>Misión</h2>
                    <br>
                </div>

                <div class="col aparicion text-center">
                    <p class="h3 p-5">
                        Somos una empresa dedicada a brindar servicios de mantenimiento
                        y reparación de electrodomésticos, comprometida con la calidad
                        y la satisfacción del cliente.
                    </p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col aparicion text-center">
                    <i class="bi bi-eye"
                       style="font-size: 8rem;"></i>
                    <br>

                    <h2>Visión</h2>
                    <br>
                </div>

                <div class="col aparicion text-center">
                    <p class="h3 p-5">
                        Ser reconocidos como la empresa líder en servicios de mantenimiento
                        y reparación de electrodomésticos, destacando por nuestra excelencia,
                        confiabilidad y compromiso con la satisfacción del cliente.
                    </p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col aparicion text-center">
                    <i class="bi bi-patch-check"
                       style="font-size: 8rem;"></i>
                    <br>

                    <h2>Valores</h2>
                    <br>
                </div>

                <div class="col aparicion text-center">
                    <p class="h3 p-5">
                        En Angels Service, nuestros valores fundamentales son la calidad,
                        la confiabilidad, la satisfacción del cliente, la innovación y
                        el compromiso con el medio ambiente.
                    </p>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col aparicion text-center">
                    <i class="bi bi-rocket-takeoff"
                       style="font-size: 8rem;"></i>
                    <br>

                    <h2>Objetivos</h2>
                    <br>
                </div>

                <div class="col aparicion text-center">
                    <p class="h3 p-5">
                        Nuestros objetivos son brindar servicios de mantenimiento y
                        reparación de electrodomésticos de alta calidad, garantizar
                        la satisfacción del cliente, expandir nuestra presencia en
                        el mercado, fomentar la innovación y contribuir al cuidado
                        del medio ambiente.
                    </p>
                </div>
            </div>

        </div>

        <div class="container-fluid p-0 mb-5">

            <div class="row fondo_oscuro m-0 p-2">
                <h1 class="text-center m-0">
                    Testimonios
                </h1>
            </div>

            <div class="card bg-black border-0"
                 style="
                    background-image: url('{{ asset('img/TESTIMONIOS-FONDO.png') }}');
                    background-position: center;
                 ">

                <div class="card-body p-4"
                     style="background-color: rgba(33, 37, 41, 0.8);">

                    <br>

                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col text-center py-3">
                            <img src="{{ asset('img/TESTIMONIO.png') }}"
                                 width="300"
                                 alt="...">
                        </div>

                        <div class="col text-center py-3">
                            <img src="{{ asset('img/TESTIMONIO-2.png') }}"
                                 width="300"
                                 alt="...">
                        </div>
                    </div>

                    <div class="row d-flex flex-wrap align-items-center">
                        <div class="col text-center py-3">
                            <img src="{{ asset('img/TESTIMONIO-3.png') }}"
                                 width="300"
                                 alt="...">
                        </div>

                        <div class="col text-center py-3">
                            <img src="{{ asset('img/TESTIMONIO-4.png') }}"
                                 width="300"
                                 alt="...">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid text-center fondo_oscuro"
             style="padding: 3%; margin-bottom: 5%;">

            <h1 class="aparicion text-white">
                MARCAS CLIENTE
            </h1>

            <p class="mb-5 aparicion text-white"
               style="font-size: 20px;">
                Trabajamos con marcas reconocidas a nivel nacional e internacional,
                asegurando que nuestros técnicos estén capacitados para brindar un
                servicio de calidad y confiable para una variedad de electrodomésticos.
            </p>

            <div class="mx-auto">
                <img src="{{ asset('img/CLIENTES.png') }}"
                    class="img-fluid"
                    alt="...">
            </div>
        </div>

        <div class="container-fluid text-center"
             style="padding: 3%;">

            <h1>Contáctanos</h1>

            <div class="alert alert-dark mb-5" role="alert">
                Para cualquier consulta o programar una cita, por favor complete el
                formulario de contacto a continuación.
                Alternativamente, envie un Whatsapp al <a href="https://wa.me/4428980000" target="_blank">4428980000</a>.
            </div>

            <div class="row">
                <div class="col p-5">

                    <form method="POST"
                          action="{{ url('/contacto') }}"
                          class="form-horizontal">

                        @csrf

                        <div class="form-group">

                            <div class="col-12 mb-4">
                                <label class="form-label">Nombre:</label>
                                <input type="text"
                                       id="nombre"
                                       name="nombre"
                                       class="form-control"
                                       placeholder="Nombre">
                            </div>

                            <div class="col-12 mb-4">
                                <label class="form-label">Telefono:</label>
                                <input type="text"
                                       id="telefono"
                                       name="telefono"
                                       class="form-control"
                                       placeholder="Telefono">
                            </div>

                            <div class="col-12 mb-4">
                                <label class="form-label">Servicio:</label>
                                <input type="text"
                                       id="servicio"
                                       name="servicio"
                                       class="form-control"
                                       placeholder="Servicio">
                            </div>

                            <div class="col-12 mb-4">
                                <label class="form-label">Mensaje:</label>
                                <textarea class="form-control"
                                          id="mensaje"
                                          name="mensaje"
                                          rows="3"
                                          placeholder="Mensaje"></textarea>
                            </div>

                            <div class="col-12 mb-4">
                                <button type="submit"
                                        class="btn btn-outline-dark"
                                        alt="No disponible por el momento. Una disculpa."
                                        disabled>
                                    Enviar formulario
                                </button>
                            </div>

                        </div>
                    </form>
                    <div class="alert alert-warning" role="alert">
                        Por el momento, el formulario permanece deshabilitado, contactanos por medio de Whatsapp.
                    </div>
                </div>

                <div class="col">

                    <h3>Sucursales</h3>

                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <p><b>Querétaro</b></p>

                                    <p>
                                        "Angels Service Profesionales"<br>
                                        Cto. Moisés Solana 117 Local 1<br>
                                        Zona Dos Extendida,&#x20;<br>
                                        Corregidora, 76070&#x20;<br>
                                        Plaza Toritos<br>
                                        Santiago de Querétaro, Querétaro.
                                    </p>
                                </div>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.320656684133!2d-100.38655452394276!3d20.57495868096331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d345223ad93963%3A0x2b0789ffce084fed!2sAngel's%20Service!5e0!3m2!1ses-419!2smx!4v1787599276193!5m2!1ses-419!2smx"
                                        class="embed-responsive-item" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="container-fluid footer bg-black"
                style="margin-top: 5%;">

            <div class="row text-center w-100">

                <div class="col p-3 pt-5 aparicion">
                    <a href="{{ url('/') }}" class="">
                        <p class="text-white">
                            <img src="{{ asset('img/Solo_Logo.png') }}"
                                alt="SERVINTSA"
                                class="p-1 rounded-2"
                                style="height: 100px; width: auto;">
                        </p>
                    </a>
                </div>

                <div class="col p-3 pt-5 aparicion">
                    <a href="{{ url('/') }}"
                       class="text-white text-decoration-none mb-3">
                        Inicio
                    </a>
                    <br>

                    <a href="https://wa.me/4428980000"
                       target="_blank"
                       class="text-white text-decoration-none mb-3">
                        Contacto
                    </a>
                    <br>
                </div>

                <div class="col p-3 pt-5 aparicion">
                    <p class="text-white">
                        Contáctanos:
                    </p>

                    <p class="text-white">
                        <i class="bi bi-whatsapp"></i>
                        44 2898 0000
                    </p>

                    <p class="text-white">
                        <i class="bi bi-envelope"></i>
                        contacto@angels.mx
                    </p>

                    <p class="text-white">
                        Nuestras redes:
                    </p>

                    <a href="#"
                       class="text-muted text-decoration-none">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#"
                       class="text-muted text-decoration-none">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#"
                       class="text-muted text-decoration-none">
                        <i class="bi bi-twitter-x"></i>
                    </a>

                    <a href="#"
                       class="text-muted text-decoration-none">
                        <i class="bi bi-youtube"></i>
                    </a>
                </div>

            </div>

            <div class="row text-center aviso">
                <div class="col">
                    <p>
                        Angels Service © 2026. Todos los derechos reservados.
                        <a href="{{ url('/aviso-privacidad') }}"
                           class="link-body-emphasis link-offset-2 link-underline link-underline-opacity-0">
                            Aviso de Privacidad
                        </a>
                        <br>
                    </p>
                </div>
            </div>

        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
                crossorigin="anonymous">
        </script>
    </body>
</html>