<?php 
    include_once 'includes/templates/header.php';
?>
    <section class="seccion seccion-registro">
        <div class="contenedor">
            <h2 class="titulo">Registro de Usuarios</h2>
            <p class="parrafo">Registrate para disfrutar de todas las características, talleres y eventos que <span>Conference</span> tiene para ti.</p>
            <form id="registro" action="login.php" class="formulario-registro" method="post">
                <label for="nombre" class="etiqueta-registro">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="input-registro" placeholder="&#128100; Nombre" required>

                <label for="apellido" class="etiqueta-registro">Apellido</label>
                <input id="apellido" name="apellido" type="text" class="input-registro" placeholder="&#128100; Apellido" required>

                <label for="email" class="etiqueta-registro">Correo Electrónico</label>
                <input id="email" name="correo" type="email" class="input-registro" placeholder="&#9993; Email" required>

                <label for="password" class="etiqueta-registro">Contraseña</label>
                <input id="pass" name="password" type="text" class="input-registro" placeholder="&#128273; Contraseña" required>
                
                <div class="error-registro" id="error"></div>

                <div class="formulario-botones">
                    <input type="submit" class="btn btn-submit" value="Registrar">
                    <input type="reset" class="btn btn-reset" value="Limpiar">
                </div>
            </form>
        </div>
    </section> <!-- cierre .formulario-registro -->

    <?php 
        include_once 'includes/templates/footer.php';
    ?>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/jsRegistro.js"></script>
</body>
</html>