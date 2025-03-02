<?php

include("app/config/conexion_bd.php");
$link=Conectarse();

if (!empty($_POST["btn_login"])) {
    if(empty($_POST["email"]) and empty($_POST["password"])){
        echo "vacio";
    } else
    {
        $email=$_POST["email"];
        $password=$_POST["password"];

        $sql=mysqli_query($link,"select * from usuarios where email='$email' and contrasena='$password'");


        if($datos=$sql->fetch_object()){
            session_start();
            $_SESSION['id_usuario']=$datos->id_usuario;
            echo "<p>Autorizo</p>";
        }else{
            echo "<p>No autorizo</p>";
        }
    }
}
mysqli_close($link);
?>
