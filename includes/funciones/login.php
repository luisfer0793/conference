<?php require_once('../../registro.php'); ?>
<?php 
    if(isset($_POST['login'])) {
        if( !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['correo']) && !empty($_POST['password']) ) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $password = $_POST['password'];
        }
    }
?>
