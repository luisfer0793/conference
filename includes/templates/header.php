<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="./css/fontawesome-all.min.css"> 
    <link rel="stylesheet" href="./css/main.css">
    <title>Conference</title>
</head>
<body>
    <header>
        <div class="hero">
            <nav class="contenedor">
                <ul class="menu">
                    <div class="menu__lateral">
                        <li class="menu__item">
                            <a href="conferencia.php" class="menu__link">Conferencias</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Calendario</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Invitados</a>
                        </li>
                        <li class="menu__item">
                            <a href="reservaciones.php" class="menu__link">Reservaciones</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">Contacto</a>
                        </li>
                    </div>
                    <div class="menu__login">
                        <li class="menu__item">
                            <a href="#ventana-modal" class="menu__link link__login">Log In</a>
                        </li>
                        <li class="menu__item">
                            <a href="registro.php" class="menu__link">Registrarse</a>
                        </li>
                    </div>
                </ul>
            </nav>  <!-- cierre nav -->

            <div class="info-evento contenedor">
                <div class="horario-contenedor">
                    <p class="info__lugar"><i class="far fa-calendar-alt icono"></i>22 - 24 Junio</p>
                    <p class="info__lugar"><i class="fas fa-map-marker-alt icono"></i>CDMX, México</p>
                </div>
                <h1 class="titulo titulo__principal">Conference</h1>
                <p class="slogan">Las mejores conferencias de tecnología a tu alcance</p>
            </div>
        </div>  <!-- cierre .hero -->

        <div class="login" id="ventana-modal">
            <div class="login-contenedor">
                <div class="login-caja">
                    <a href="#" class="cerrar-modal"><i class="fas fa-times cerrar"></i></a>
                    <!-- <input type="checkbox" name="cerrar-modal" id="cerrar-modal" class="cerrar-input">
                        <label for="cerrar-modal" class="cerrar-modal">
                            <i class="fas fa-times cerrar"></i>
                        </label> -->
                    <img src="img/avatar.png" alt="" class="avatar">
                    <h3 class="titulo-modal">Iniciar Sesión</h3>
                    <form class="form-modal">
                        <label for="username" class="etiqueta-modal">Username:</label>
                        <input type="text" id="username"  class="input-modal" placeholder="Nombre de Usuario" required>
                        <label for="password" class="etiqueta-modal">Password:</label>
                        <input type="password" id="password"  class="input-modal" placeholder="Contraseña" required>
                        <input type="submit" class="boton-modal" value="Log In">
                    </form>
                    <p class="parrafo">¿No tienes cuenta? Registrate</p>
                    <a href="registro.php" class="boton boton-registro">Registrate</a>
                </div>
            </div>
        </div> <!-- cierre #ventana-modal -->
    </header>
        
    <nav class="nav-sticky">
        <div class="contenedor">
            <ul class="menu menu-sticky">
                <div class="menu-sticky__logo">
                    <p class="link-logo">Conference</p>
                </div>
                <div class="menu-sticky__enlaces">
                    <li class="menu__item"><a href="index.php">Inicio</a></li>
                    <li class="menu__item"><a href="#">Calendario</a></li>
                    <li class="menu__item"><a href="#">Invitados</a></li>
                    <li class="menu__item"><a href="reservaciones.php">Reservaciones</a></li>
                    <li class="menu__item"><a href="#ventana-modal" class="link__login">Iniciar Sesion</a></li>
                </div>
            </ul>
        </div>
    </nav>