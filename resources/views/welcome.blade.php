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
                        <a class="nav-link active" href="{{ url('/') }}"><i class="bi bi-house"></i> Inicio</a>
                        </li>
                        <li class="nav-item text-nowrap">
                        <a class="nav-link" href="{{ url('/quienes-somos') }}"><i class="bi bi-person-lines-fill"></i> ¿Quienes somos?</a>
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

        <div class="container-fluid" style="background-image: url('{{ asset('img/INICIO-1.png') }}'); padding: 5%; margin-bottom: 40px;">
            <div style="margin: 0 20%; padding: 2%; background-color: rgba(0, 0, 0, 0.8); border-radius: 8px;">
                <h1 class="text-center" style="color: white;">Servicios integrales de linea blanca</h1>
                <h1 class="text-center" style="color: white;">¿Quienes somos?</h1>
                <p class="text-center" style="color: white; font-size: 20px;">
                    Angels Services es una empresa dedicada a brindar servicios de
                    mantenimiento especializado para lavadoras, secadoras y
                    refrigeradores en Querétaro. Con 10 años de experiencia y
                    un equipo de profesionales comprometidos, nos esforzamos por
                    garantizar la satisfacción de nuestros clientes y el óptimo
                    funcionamiento de sus electrodomésticos.
                </p>
                <p class="text-center">
                    <button type="button" class="btn btn-outline-light">Ver mas</button>
                </p>
            </div>
        </div>

            <h1 class="text-center">Nuestros servicios</h1>

            <div class="card-group">

                <div class="card border-0" style="margin: 2%;">
                    <img src="{{ asset('img/MANTEMIENTO-DE-SECADORAS.png') }}" height="300" class="card-img-top" alt="...">
                    <div class="card-img-overlay" style="padding: 5%; text-align: center; background-color: rgba(0, 0, 0, 0.4); border-radius: 28px;">
                        <h3 class="card-title" style="color: white; margin-top:15%">Mantenimiento de secadoras</h3>
                    </div>
                </div>
                <div class="card border-0" style="margin: 2%;">
                    <img src="{{ asset('img/MANTENIMIENTO-REFRI.png') }}" height="300" class="card-img-top" alt="...">
                    <div class="card-img-overlay" style="padding: 5%; text-align: center; background-color: rgba(0, 0, 0, 0.4); border-radius: 28px;">
                        <h3 class="card-title" style="color: white; margin-top:15%">Mantenimiento de refrigeradores</h3>
                    </div>
                </div>
            </div>

            <div class="card border-0" style="margin: 2%;">
                <img src="{{ asset('img/MANTENIMIENTO-LAVADORAS.png') }}" height="350" class="card-img-top" alt="...">
                <div class="card-img-overlay" style="padding: 5%; text-align: center; background-color: rgba(0, 0, 0, 0.4); border-radius: 28px;">
                    <h3 class="card-title" style="color: white; margin-top:5%">Mantenimiento de lavadoras</h3>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center" style="background-color: #00425C; padding: 3%; margin-bottom: 5%; color: white;">
            <!-- Info -->
            <div class="row">
                <div class="col">
                    <i class="bi bi-bullseye" style="font-size: 4rem;"></i><br>
                    <h2>Misión</h2><br>
                    <button type="button" class="btn btn-outline-light">Ver mas</button>
                </div>
                <div class="col">
                    <i class="bi bi-eye" style="font-size: 4rem;"></i><br>
                    <h2>Visión</h2><br>
                    <button type="button" class="btn btn-outline-light">Ver mas</button>
                </div>
                <div class="col">
                    <i class="bi bi-patch-check" style="font-size: 4rem;"></i><br>
                    <h2>Valores</h2><br>
                    <button type="button" class="btn btn-outline-light">Ver mas</button>
                </div>
                <div class="col">
                    <i class="bi bi-rocket-takeoff" style="font-size: 4rem;"></i><br>
                    <h2>Objetivos</h2><br>
                    <button type="button" class="btn btn-outline-light">Ver mas</button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="card text-bg-dark border-0" style="margin-bottom: 5%;">
                <img src="{{ asset('img/TESTIMONIOS-FONDO.png') }}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <br>
                    <h1 class="text-center">Testimonios</h1>
                    <div class="row">
                        <div class="col" style="text-align: center; padding:5%;"><img src="{{ asset('img/TESTIMONIO.png') }}" width="80%" alt="..."></div>
                        <div class="col" style="text-align: center; padding:5%;"><img src="{{ asset('img/TESTIMONIO-2.png') }}" width="80%" alt="..."></div>
                    </div>
                    <div class="row">
                        <div class="col" style="text-align: center; padding:5%;"><img src="{{ asset('img/TESTIMONIO-3.png') }}" width="80%" alt="..."></div>
                        <div class="col" style="text-align: center; padding:5%;"><img src="{{ asset('img/TESTIMONIO-4.png') }}" width="80%" alt="..."></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid text-center" style="background-color: #00425C; padding: 3%;">
            <h1 style="color: white;">CLIENTES</h1>
            <img src="{{ asset('img/CLIENTES.png') }}" height="10%" width="100%" alt="...">
        </div>

        <div class="container-fluid text-center" style="padding: 3%;">
            <h1>Contacto</h1>
            <div class="alert alert-primary" role="alert">
                Para cualquier consulta o programar una cita, por favor complete el formulario de contacto a continuación.
            </div>
            <div class="row">
                <div class="col">
                    <form>
                        <div class="form-group">
                            <div class="col-12">
                                <label class="form-label">Nombre:</label>
                                <input type="text" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Telefono:</label>
                                <input type="text" class="form-control" placeholder="Telefono">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Servicio:</label>
                                <input type="text" class="form-control" placeholder="Servicio">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Mensaje:</label>
                                <textarea class="form-control" rows="3" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-dark">Enviar formulario</button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col">

                    <div id="googleMap" style="width:100%;height:400px;"></div>

                    <script>
                    function myMap() {
                    var mapProp= {
                    center:new google.maps.LatLng(51.508742,-0.120850),
                    zoom:5,
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    }
                    </script>

                    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

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
                <p>Copyright © 2026 Angels Services. Todos los derechos reservados. <a href="{{ url('/aviso-privacidad') }}" class="text-decoration-none">Aviso de Privacidad</a><br></p>
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
