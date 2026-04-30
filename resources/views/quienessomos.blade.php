<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Titulo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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
                        <a class="nav-link active" href="{{ url('/quienes-somos') }}"><i class="bi bi-person-lines-fill"></i> ¿Quienes somos?</a>
                        </li>
                        <li class="nav-item text-nowrap">
                        <a class="nav-link" href="{{ url('/servicios') }}"><i class="bi bi-wrench"></i> Servicios</a>
                        </li>
                        <li class="nav-item text-nowrap">
                        <a class="nav-link" href="https://wa.me/5215644802701" target="_blank"><i class="bi bi-whatsapp"></i> Contacto</a>
                        </li>
                    </ul>
                    </div>

                </div>
                </nav>
        </header>

        <div class="container-fluid" style="padding: 0;">
            <img src="{{ asset('img/BANNER-QUIENES-SOMOS-1.png') }}" class="img-fluid w-100" alt="¿Quienes somos?">
        </div>

        <div class="container-fluid" style="background-image: url('{{ asset('img/RECUADRO.png') }}'); margin-bottom: 40px;">
            <div style="margin: 0 20%; padding: 2%; background-color: border-radius: 8px;">
                <h2 class="text-center" style="color: white;">Angels Services es una empresa dedicada a brindar servicios de mantenimiento especializado para lavadoras, secadoras y refrigeradores en Querétaro.</h2>
                </p>
            </div>
        </div>

        <div class="container-fluid" >
            <div class="row" style="margin-bottom: 5%;">
                <div class="col-md-6 p-5">
                    <img src="{{ asset('img/10-ANOS-DE-EXPERIENCIA.png') }}" class="img-fluid" alt="¿Quienes somos?">
                </div>
                <div class="col-md-6 p-5 d-flex align-items-center text-center">
                    <h2>Contamos con un equipo de profesionales comprometidos,
                        nos esforzamos por garantizar la satisfacción de nuestros
                        clientes y el óptimo funcionamiento de sus electrodomésticos.
                        Nuestro objetivo es proporcionar un servicio de calidad,
                        confiable y eficiente, asegurando que cada cliente reciba la
                        atención personalizada que merece.</h2>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-image: url('{{ asset('img/IMAGEN.png') }}'); padding: 5%; margin-bottom: 5%;">
            <div class="row text-center">
                <div class="col">
                    <div class="card" style="padding: 5%;">
                        <i class="bi bi-bullseye" style="font-size: 8rem;"></i>
                        <div class="card-body">
                            <h3 class="card-title" style="margin-bottom: 1.5rem;">MISIÓN</h3>
                            <p class="card-text">Nuestra misión es proporcionar
                                servicios de reparación de alta calidad, eficientes
                                y confiables para artículos de línea blanca, satisfaciendo
                                las necesidades de nuestros clientes.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="padding: 5%;">
                        <i class="bi bi-eye" style="font-size: 8rem;"></i>
                        <div class="card-body">
                            <h3 class="card-title" style="margin-bottom: 1.5rem;">VISIÓN</h3>
                            <p class="card-text">Ser la empresa líder en reparación
                                de artículos de línea blanca en la región, reconocida
                                por nuestra excelencia en servicio, innovación y compromiso
                                con la satisfacción del cliente.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="padding: 5%;">
                        <i class="bi bi-patch-check" style="font-size: 8rem;"></i>
                        <div class="card-body">
                            <h3 class="card-title" style="margin-bottom: 1.5rem;">VALORES</h3>
                            <p class="card-text">
                                    Nuestros valores fundamentales son:
                                <ul class="list-unstyled">
                                    <li>Integridad</li>
                                    <li>Respeto</li>
                                    <li>Innovación</li>
                                    <li>Responsabilidad</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-image: url('{{ asset('img/OBJETIVOOS-1.png') }}'); padding: 5%; margin-bottom: 5%;">
            <div class="row" style="margin-left: 35%; margin-top: 15%;">
                <div class="col" style="color: white; font-size: 25px;">
                    <h1 style="margin-bottom: 1.5rem;"><b>OBJETIVOS</b></h1>
                    <ul>
                        <li>Calidad: Proporcionar servicios de reparación de alta calidad, con una tasa de satisfacción del cliente del 95% o superior.</li>
                        <li>Innovación: Implementar nuevas tecnologías y técnicas de reparación para mejorar la eficiencia y reducir costos.</li>
                        <li>Eficiencia: Reducir el tiempo promedio de reparación.</li>
                        <li>Crecimiento: Aumentar la cantidad de capacitación de nuestros colaboradores para aumentar la productividad.</li>
                        <li>Responsabilidad: Establecer programas de reciclaje y materiales para reducir el impacto ambiental.</li>
                    </ul>
                    <p>
                        Estos objetivos nos guían en nuestro compromiso de brindar un servicio excepcional, innovador y sostenible, asegurando la satisfacción de nuestros clientes y el crecimiento continuo de nuestra empresa.
                    </p>
                </div>

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
                    <a href="{{ url('/') }}" class="text-white text-decoration-none">Contacto</a><br>
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
