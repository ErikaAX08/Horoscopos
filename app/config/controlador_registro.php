<?php

include("app/config/conexion_bd.php");
$link=Conectarse();

if (!empty($_POST["btn_registro"])) {
    if(empty($_POST["name"]) and empty($_POST["last_name"]) and empty($_POST["mother_last_name"]) and empty($_POST["nick"]) and empty($_POST["email"]) and empty($_POST["password"]) and empty($_POST["birthdate"]) and empty($_POST["gander"]) and empty($_POST["partner_birthdate"]) and empty($_POST["illnesses"])  and empty($_POST["abundance"]) and empty($_POST["work_energy"])) {
        echo "vacio";
    } else
    {
        $name = $_POST["name"];
        $last_name = $_POST["last_name"];
        $mother_last_name = $_POST["mother_last_name"];
        $nick = $_POST["nick"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $birthdate = $_POST["birthdate"];
        $gander = $_POST["gander"];
        $partner_birthdate = $_POST["partner_birthdate"];
        $illnesses = $_POST["illnesses"];
        $abundance = $_POST["abundance"];
        $work_energy = $_POST["work_energy"];

        // Realiza el INSERT
        $sql = "INSERT INTO usuarios (nombre, apellido_paterno, apellido_materno, nick, email, contrasena, genero, paleta_colores) 
        VALUES ('$name', '$last_name', '$mother_last_name', '$nick', '$email', '$password', '$gander')";

        if (mysqli_query($link, $sql)) {
            // Obtiene el último ID insertado
            $id_usuario = mysqli_insert_id($link);
            echo "El ID del usuario insertado es: " . $id_usuario;
        } else {
            echo "Error: " . mysqli_error($link);
        }

// Usamos la función explode para dividir la fecha en un array
        $dateParts = explode('-', $birthdate);

        // Asignamos los valores a variables separadas
        $year = $dateParts[0];
        $month = $dateParts[1];
        $day = $dateParts[2];

        // Opcional: convertir los valores a enteros si necesitas hacer cálculos
        $day = (int) $day;
        $month = (int) $month;
        $year = (int) $year;

        mysqli_query($link, " 
         INSERT INTO datos_personales (id_usuario, hora_nacimiento, dia_nacimiento, mes_nacimiento, anio_nacimiento, tiene_pareja)
         VALUES ($id_usuario, '14:30:00',$day,$month,$year, TRUE)
         ");

        // Usamos la función explode para dividir la fecha en un array
        $dateParts2 = explode('-', $partner_birthdate );

        // Asignamos los valores a variables separadas
        $year2 = $dateParts2[0];
        $month2 = $dateParts2[1];
        $day2 = $dateParts2[2];

        mysqli_query($link, " 
         INSERT INTO parejas (id_usuario, hora_nacimiento_pareja, dia_nacimiento_pareja, mes_nacimiento_pareja, anio_nacimiento_pareja)
         VALUES ($id_usuario, '08:00:00',$day2, $month2, $year2)
         ");

        mysqli_query($link, " 
        INSERT INTO situacion_usuario (id_usuario, situacion_financiera, situacion_laboral)
        VALUES ($id_usuario, '$abundance','$work_energy')
        ");

    }
}
mysqli_close($link);
?>
