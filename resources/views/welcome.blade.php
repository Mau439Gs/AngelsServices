<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Angels Service</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <link rel="icon" type="image/x-icon" href="{{asset('img/Solo_Logo.png')}}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark fixed-top" style="background-color: #000000">
                <div class="container-fluid">
                    <a class="navbar-brand" style="font-size: 20px; margin:0;" href="{{ url('/') }}">
                        <img src="{{ asset('img/Solo_Logo.png') }}" alt="SERVINTSA" style="height: 70px; width: auto; padding: 5px; border-radius: 8px;"> <b>ANGELS</b> SERVICE
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav w-100 justify-content-end">
                            <li class="nav-item text-nowrap">
                            <a class="nav-link active" href="{{ url('/') }}"><i class="bi bi-house"></i> Inicio</a>
                            </li>
                            <li class="nav-item text-nowrap">
                            <a class="nav-link" href="https://wa.me/4428980000" target="_blank"><i class="bi bi-whatsapp"></i> Contacto</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container-fluid" style="background-image: url('{{ asset('img/INICIO-1.png') }}'); margin-top: 90px; margin-bottom: 90px; padding: 0%; width: 100%;">
            <div style="margin: 0%; padding: 8%; padding-left: 15%; padding-right: 15%; background-color: rgba(33, 37, 41, 0.8);">
                <h1 class="text-center aparicion mt-3 mb-5" style="color: white;"> <b>ANGELS</b> SERVICE</h1>
                <h2 class="text-center mb-5 aparicion" style="color: white;">¿Quienes somos?</h2>
                <p class="text-center aparicion" style="color: white; font-size: 24px; padding-left: 10%; padding-right: 10%;">
                    Angels Service es una empresa dedicada a brindar servicios de mantenimiento y reparación de electrodomésticos, comprometida con la calidad y la satisfacción del cliente.<br><br>Nuestro equipo de técnicos altamente capacitados se especializa en el mantenimiento y reparación de una amplia gama de electrodomésticos, incluyendo televisores, aires acondicionados, línea blanca y otros dispositivos electrónicos.<br><br>Nos esforzamos por ofrecer un servicio confiable, eficiente y asequible para garantizar que los electrodomésticos de nuestros clientes funcionen de manera óptima y prolonguen su vida útil.
                </p>
                <p class="text-center aparicion">
                    <!--<a href="{{ url('/quienes-somos') }}"> <button type="button" class="btn btn-outline-light">Ver mas</button></a>-->
                </p>
            </div>
        </div>

            <h1 class="text-center aparicion">Nuestros servicios</h1>

        <div class="container-fluid">

            <p class="text-center mb-1 aparicion" style="font-size: 20px;">
                En Angels Service, ofrecemos una amplia gama de servicios de mantenimiento y reparación.
            </p>

            <div class="row">
                <div class="col" style="padding: 5%; text-align: center;">
                    <img class="aparicion" src="{{ asset('img/iconos/smart-tv.png') }}" height="150" alt="...">
                    <h4 class="p-2 aparicion">Mantenimiento a equipos electrónicos</h4>
                </div>
                <div class="col" style="padding: 5%; text-align: center;">
                    <img class="aparicion" src="{{ asset('img/iconos/air-conditioner.png') }}" height="150" alt="...">
                    <h4 class="p-2 aparicion">Mantenimiento de aires acondicionados</h4>
                </div>
            </div>
            <div class="row">
                <div class="col" style="padding: 5%; text-align: center;">
                    <img class="aparicion" src="{{ asset('img/iconos/laundry.png') }}" height="150" alt="...">
                    <h4 class="p-2 mt-5 aparicion">Mantenimiento a linea blanca</h4>
                </div>
                <div class="col" style="padding: 5%; text-align: center;">
                    <img class="aparicion" src="{{ asset('img/iconos/microwave-oven.png') }}" height="150" alt="...">
                    <h4 class="p-2 aparicion">Mantenimiento de electrodomésticos</h4>
                </div>

            </div>

        </div>

        <div class="container-fluid text-center fondo_oscuro" style="padding: 3%; margin-bottom: 5%;">
            <div class="row mb-5">
                <div class="col aparicion">
                    <i class="bi bi-bullseye" style="font-size: 8rem;"></i><br>
                    <h2>Misión</h2><br>
                </div>
                <div class="col aparicion">
                    <p class="h3 p-5">
                        Somos una empresa dedicada a brindar servicios de mantenimiento y reparación de electrodomésticos, comprometida con la calidad y la satisfacción del cliente.
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col aparicion">
                    <i class="bi bi-eye" style="font-size: 8rem;"></i><br>
                    <h2>Visión</h2><br>
                </div>
                <div class="col aparicion">
                    <p class="h3 p-5">
                        Ser reconocidos como la empresa líder en servicios de mantenimiento y reparación de electrodomésticos, destacando por nuestra excelencia, confiabilidad y compromiso con la satisfacción del cliente.
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col aparicion">
                    <i class="bi bi-patch-check" style="font-size: 8rem;"></i><br>
                    <h2>Valores</h2><br>
                </div>
                <div class="col aparicion">
                    <p class="h3 p-5">
                        En Angels Service, nuestros valores fundamentales son la calidad, la confiabilidad, la satisfacción del cliente, la innovación y el compromiso con el medio ambiente.
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col aparicion">
                    <i class="bi bi-rocket-takeoff" style="font-size: 8rem;"></i><br>
                    <h2>Objetivos</h2><br>
                </div>
                <div class="col aparicion">
                    <p class="h3 p-5">
                        Nuestros objetivos son brindar servicios de mantenimiento y reparación de electrodomésticos de alta calidad, garantizar la satisfacción del cliente, expandir nuestra presencia en el mercado, fomentar la innovación y contribuir al cuidado del medio ambiente.
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row fondo_oscuro" style="margin: 0%; padding: 1%;">
                <h1 class="text-center">Testimonios</h1>
            </div>
            <div class="card text-bg-dark border-0" style="background-image: url('{{ asset('img/TESTIMONIOS-FONDO.png') }}'); background-position: center;margin-bottom: 5%;">
                <div class="card-body" style="background-color: rgba(33, 37, 41, 0.8);">
                    <br>

                    <div class="row">
                        <div class="col" style="text-align: center; padding:5%;"><img src="{{ asset('img/TESTIMONIO.png') }}" width="300" alt="..."></div>
                        <div class="col" style="text-align: center; padding:5%;"><img src="{{ asset('img/TESTIMONIO-2.png') }}" width="300" alt="..."></div>
                    </div>
                    <div class="row">
                        <div class="col" style="text-align: center; padding:5%;"><img src="{{ asset('img/TESTIMONIO-3.png') }}" width="300" alt="..."></div>
                        <div class="col" style="text-align: center; padding:5%;"><img src="{{ asset('img/TESTIMONIO-4.png') }}" width="300" alt="..."></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center fondo_oscuro" style="padding: 3%; margin-bottom: 5%;">
            <h1 class="aparicion" style="color: white;">MARCAS CLIENTE</h1>
            <p class="mb-5 aparicion" style="color: white; font-size: 20px;">
                Trabajamos con marcas reconocidas a nivel nacional e internacional, asegurando que nuestros técnicos estén capacitados para brindar un servicio de calidad y confiable para una variedad de electrodomésticos.
            </p>
            <img src="{{ asset('img/CLIENTES.png') }}" height="10%" width="100%" alt="...">
        </div>

        <div class="container-fluid text-center" style="padding: 3%;">
            <h1>Contáctanos</h1>
            <div class="alert alert-dark" role="alert">
                Para cualquier consulta o programar una cita, por favor complete el formulario de contacto a continuación.
            </div>
            <div class="row">
                <div class="col p-5">
                    <form id="" method="POST" action="{{ url('/contacto') }}" class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <div class="col-12">
                                <label class="form-label">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Telefono:</label>
                                <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Servicio:</label>
                                <input type="text" id="servicio" name="servicio" class="form-control" placeholder="Servicio">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Mensaje:</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="3" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-dark">Enviar formulario</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col">

                    <h3>Sucursales</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p><b>Querétaro</b></p>
                                    <p>"Angels Service Profesionales"
Cto. Moisés Solana 117 Local 1
Zona Dos Extendida, 
Corregidora, 76070 
Plaza Toritos
Santiago de Querétaro, Querétaro.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid footer" style="margin-top: 5%; background-color: #000000 !important;">
            <div class="row text-center" style="width: 100%;">
                <div class="col p-3 pt-5 aparicion">
                    <p class="text-white" style="font-size: 30px;">
                        <img src="{{ asset('img/Solo_Logo.png') }}" alt="SERVINTSA" style="height: 100px; width: auto; padding: 5px; border-radius: 8px;">
                    </p>
                </div>
                <div class="col p-3 pt-5 aparicion">
                    <a href="{{ url('/') }}" class="text-white text-decoration-none">Inicio</a><br>
                    <a href="https://wa.me/4428980000" target="_blank" class="text-white text-decoration-none">Contacto</a><br>
                </div>
                <div class="col p-3 aparicion">
                    <p class="text-white">Contáctanos:</p>
                    <p class="text-white"><i class="bi bi-whatsapp"></i> 44 2898 0000</p>
                    <p class="text-white"><i class="bi bi-envelope"></i> contacto@angels.mx</p>
                    <p class="text-white">Nuestras redes:</p>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white text-decoration-none"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
            <div class="row text-center aviso">
                <div class="col">
                    <p>Angels Service © 2026. Todos los derechos reservados. <a href="{{ url('/aviso-privacidad') }}" class="link-body-emphasis link-offset-2 link-underline link-underline-opacity-0">Aviso de Privacidad</a><br></p>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>
