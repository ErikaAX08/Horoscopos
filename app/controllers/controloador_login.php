<?php
include("conexion_bd.php");

global $baseURL;

$link=Conectarse();

if (!empty($_POST["btn_login"])) {
    if(empty($_POST["email"]) and empty($_POST["password"])){
        echo "vacio";
    } else
    {
        $email=$_POST["email"];
        $password= $_POST["password"];

        $sql = mysqli_query($link, "SELECT id_usuario, contrasena FROM usuarios WHERE email='$email'");
        if ($datos = $sql->fetch_object()) {
            if (password_verify($password, $datos->contrasena)) {
                session_start();
                $_SESSION['id_usuario'] = $datos->id_usuario;
                header("Location: $baseURL/analysis");
                exit; // Asegura que el script se detenga después de la redirección
            } else {
                echo "<p>Contraseña incorrecta</p>";
            }
        } else {
            echo "<p>Usuario no encontrado</p>";
        }
    }
}
mysqli_close($link);
?>
