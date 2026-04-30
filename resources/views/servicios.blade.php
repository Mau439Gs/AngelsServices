<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Titulo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link href="https://fonts.cdnfonts.com/css/samsungone" rel="stylesheet">
        @vite(['resources/css/app.css'])
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="border-bottom: 5px solid #00425C;">
                <div class="container-fluid">

                    <div class="container">
                        <a class="navbar-brand" style="font-size: 20px; margin:0;" href="{{ url('/') }}">
                            <img src="{{ asset('img/angel_oscuro.svg') }}" alt="SERVINTSA" style="height: 70px; width: auto; padding: 5px; border-radius: 8px;"> <b>ANGELS</b> SERVICES
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#miMenuNavegacion">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="miMenuNavegacion">
                    <ul class="navbar-nav w-100 justify-content-end">
                        <li class="nav-item text-nowrap">
                        <a class="nav-link" href="{{ url('/') }}"><i class="bi bi-house"></i> Inicio</a>
                        </li>
                        <li class="nav-item text-nowrap">
                        <a class="nav-link" href="{{ url('/quienes-somos') }}"><i class="bi bi-person-lines-fill"></i> ¿Quienes somos?</a>
                        </li>
                        <li class="nav-item text-nowrap">
                        <a class="nav-link active" href="{{ url('/servicios') }}"><i class="bi bi-wrench"></i> Servicios</a>
                        </li>
                        <li class="nav-item text-nowrap">
                        <a class="nav-link" href="https://wa.me/5215644802701" target="_blank"><i class="bi bi-whatsapp"></i> Contacto</a>
                        </li>
                    </ul>
                    </div>

                </div>
                </nav>
        </header>

        <div class="container-fluid" style="background-image: url('{{ asset('img/BANNER.png') }}'); padding: 5%; margin-bottom: 40px;">
            <div style="margin: 0 5%; padding: 2%; border-radius: 8px;">
                <p class="text-white" style="font-size: 30px;">
                    <img src="{{ asset('img/angel.svg') }}" alt="SERVINTSA" style="height: 120px; width: auto; padding: 5px; border-radius: 8px;"> <b>ANGELS</b> SERVICES
                </p>
                <h1 class="" style="color: white;">Ofrecemos servicios integrales de línea blanca</h1>
                <p class="" style="color: white; font-size: 20px;">
                    Para lavadoras, secadoras y refrigeradores en Querétaro.
                    Confía en nosotros para mantener en óptimas condiciones tus electrodomésticos.
                </p>
            </div>
        </div>

        <div class="container-fluid" style="padding: 5%; margin-bottom: 40px; padding-left: 15%; padding-right: 15%;">
            <div class="card mb-5 border-0" style="">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('img/LAVADORA.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body p-5">
                        <h2 class="card-title text-center mb-4">Mantenimiento de Lavadoras</h2>
                        <p class="card-text">
                        Nuestro servicio de Mantenimiento de lavadoras incluye revisión de piezas,
                        limpieza interna y ajustes necesarios para un funcionamiento óptimo.<br>
                        Nuestro equipo de técnicos altamente capacitados garantiza un trabajo de
                        calidad y duradero en cada mantenimiento.</p>
                        <p class="card-text text-center">
                            <a href="https://wa.me/5215644802701" target="_blank">
                            <button class="btn btn-outline-dark mt-3"><i class="bi bi-whatsapp"></i> Contactar por WhatsApp</button>
                            </a>
                        </p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card mb-5 border-0" style="">
                <div class="row g-0">
                    <div class="col-md-8">
                    <div class="card-body p-5">
                        <h2 class="card-title text-center mb-4">Mantenimiento de secadoras</h2>
                        <p class="card-text">
                            El Mantenimiento de secadoras abarca desde la limpieza de filtros
                            hasta la revisión de sistemas de ventilación para prevenir posibles averías.<br>
                            Confía en Angels Services para mantener tus electrodomésticos en óptimas condiciones y evitar costosas reparaciones.
                        </p>
                        <p class="card-text text-center">
                            <a href="https://wa.me/5215644802701" target="_blank">
                                <button class="btn btn-outline-dark mt-3"><i class="bi bi-whatsapp"></i> Contactar por WhatsApp</button>
                            </a>
                        </p>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <img src="{{ asset('img/SECADORA.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-5 border-0" style="">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="{{ asset('img/REFRI.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body p-5">
                        <h3 class="card-title text-center mb-4">Mantenimiento de refrigeradores</h3>
                        <p class="card-text">
                            Con nuestro Mantenimiento de refrigeradores garantizamos la
                            eficiencia energética y el correcto funcionamiento de tu equipo.<br>
                            Cientos de clientes satisfechos respaldan la eficacia de nuestro servicio de mantenimiento.
                        </p>
                        <p class="card-text text-center">
                            <a href="https://wa.me/5215644802701" target="_blank">
                                <button class="btn btn-outline-dark mt-3"><i class="bi bi-whatsapp"></i> Contactar por WhatsApp</button>
                            </a>
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-image: url('{{ asset('img/BANNER-COMPROMETIDOS.png') }}'); padding: 5%; margin-bottom: 40px;">
            <div style="margin: 0 5%; padding: 2%; border-radius: 8px; background-color: rgba(0, 66, 92, 0.6);">
                <h1 class="text-center" style="color: white;">COMPROMETIDOS A BRINDAR EL MEJOR SERVICIO DE MANTENIMIENTO Y REPARACIÓN</h1>
            </div>
        </div>

        <div class="container-fluid" style="background-color: #00425C; padding: 5%; margin-bottom: 40px;">
            <div class="row text-center">
                <h2 class="text-white mb-5">CERTIFICADOS CON LAS MEJORES MARCAS</h2>
                <div id="carrusel_marcas" class="carousel slide" data-bs-ride="carousel" style="max-height: 200px; padding-left: 30%; padding-right: 30%;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{ asset('img/samsung.png') }}" class="h-100" alt="Samsung">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('img/lg.png') }}" class="d-block h-100" alt="LG">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('img/whirlpool.png') }}" class="d-block h-100" alt="Whirlpool">
                        </div>
                        <div class="carousel-item">
                        <img src="{{ asset('img/mabe.png') }}" class="d-block h-100" alt="Mabe">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel_marcas" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carrusel_marcas" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="container text-center">
                <h2 class="mb-4">¿POR QUÉ ELEGIR <b>ANGELS SERVICES</b>?</h2>
                <p class="mb-5">
                    En Angels Services, nos enorgullece ofrecer un servicio de mantenimiento y reparación de línea blanca de alta calidad en Querétaro. Nuestro compromiso con la excelencia y la satisfacción del cliente nos distingue en el mercado. Aquí te presentamos algunas razones por las que deberías elegirnos:
                </p>
                <div style="text-align: left; padding: 0 20%;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><p><strong>Técnicos capacitados:<i class="bi bi-check2-circle"></i></strong> Contamos con un equipo de técnicos altamente capacitados y certificados por las principales marcas de electrodomésticos.</p></li>
                        <li class="list-group-item"><p><strong>Atención inmediata y personalizada:<i class="bi bi-check2-circle"></i></strong> Nos comprometemos a brindar una atención rápida y personalizada para resolver tus problemas de manera eficiente.</p></li>
                        <li class="list-group-item"><p><strong>Costos accesibles:<i class="bi bi-check2-circle"></i></strong> Ofrecemos precios competitivos sin comprometer la calidad de nuestros servicios.</p></li>
                        <li class="list-group-item"><p><strong>Servicios garantizados:<i class="bi bi-check2-circle"></i></strong> Todos nuestros servicios están respaldados por una garantía de satisfacción, asegurando que quedes completamente satisfecho con nuestro trabajo.</p></li>
                        <li class="list-group-item"><p><strong>Atención de urgencias:<i class="bi bi-check2-circle"></i></strong> Entendemos la importancia de tus electrodomésticos, por eso ofrecemos atención de urgencias para resolver cualquier problema de manera rápida y eficiente.</p></li>
                        <li class="list-group-item"><p><strong>Solo utilizamos refacciones originales:<i class="bi bi-check2-circle"></i></strong> Para garantizar la durabilidad y el rendimiento de tus electrodomésticos, solo utilizamos refacciones originales de las marcas que representamos.</p></li>
                        <li class="list-group-item"><p><strong>Honestidad y profesionalismo en cada servicio:<i class="bi bi-check2-circle"></i></strong> Nos enorgullece mantener una relación de confianza con nuestros clientes, ofreciendo un servicio honesto y profesional en cada interacción.</p></li>
                    </ul>
                </div>
        </div>

        <footer class="container-fluid" style="margin-top: 5%;">
            <div class="row text-center" style="background-color: #00425C; padding: 3%;">
                <div class="col">
                    <p class="text-white" style="font-size: 30px;">
                        <img src="{{ asset('img/angel.svg') }}" alt="SERVINTSA" style="height: 140px; width: auto; padding: 5px; border-radius: 8px;"> <b>ANGELS</b> SERVICES
                    </p>
                </div>
                <div class="col">
                    <a href="{{ url('/') }}" class="text-white text-decoration-none">Inicio</a><br>
                    <a href="{{ url('/quienes-somos') }}" class="text-white text-decoration-none">¿Quienes somos?</a><br>
                    <a href="{{ url('/servicios') }}" class="text-white text-decoration-none">Servicios</a><br>
                    <a href="#" class="text-white text-decoration-none">Contacto</a><br>
                </div>
                <div class="col">
                    <p class="text-white">Contáctanos:</p>
                    <p class="text-white"><i class="bi bi-whatsapp"></i> +52 442 123 4567</p>
                    <p class="text-white"><i class="bi bi-envelope"></i> info@angelservice.com</p>
                    <p class="text-white">Nuestras redes:</p>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div class="row text-center" style="background-color: #e9ecef; padding: 1%;">
                <p>Copyright © 2026 Angels Services. Todos los derechos reservados. <a href="{{ url('/aviso-privacidad') }}" class="text-decoration-none">Aviso de Privacidad</a></p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <style>
            .color-change {
                filter: hue-rotate(180deg) saturate(200%);
            }
        </style>
    </body>
</html>
