<?php
include("conexion_bd.php");

function obtenerSignoZodiacal($dia_nacimiento, $mes_nacimiento) {
    if (($mes_nacimiento == 3 && $dia_nacimiento >= 21) || ($mes_nacimiento == 4 && $dia_nacimiento <= 19)) {
        return "Aries";
    } elseif (($mes_nacimiento == 4 && $dia_nacimiento >= 20) || ($mes_nacimiento == 5 && $dia_nacimiento <= 20)) {
        return "Tauro";
    } elseif (($mes_nacimiento == 5 && $dia_nacimiento >= 21) || ($mes_nacimiento == 6 && $dia_nacimiento <= 20)) {
        return "Géminis";
    } elseif (($mes_nacimiento == 6 && $dia_nacimiento >= 21) || ($mes_nacimiento == 7 && $dia_nacimiento <= 22)) {
        return "Cáncer";
    } elseif (($mes_nacimiento == 7 && $dia_nacimiento >= 23) || ($mes_nacimiento == 8 && $dia_nacimiento <= 22)) {
        return "Leo";
    } elseif (($mes_nacimiento == 8 && $dia_nacimiento >= 23) || ($mes_nacimiento == 9 && $dia_nacimiento <= 22)) {
        return "Virgo";
    } elseif (($mes_nacimiento == 9 && $dia_nacimiento >= 23) || ($mes_nacimiento == 10 && $dia_nacimiento <= 22)) {
        return "Libra";
    } elseif (($mes_nacimiento == 10 && $dia_nacimiento >= 23) || ($mes_nacimiento == 11 && $dia_nacimiento <= 21)) {
        return "Escorpio";
    } elseif (($mes_nacimiento == 11 && $dia_nacimiento >= 22) || ($mes_nacimiento == 12 && $dia_nacimiento <= 21)) {
        return "Sagitario";
    } elseif (($mes_nacimiento == 12 && $dia_nacimiento >= 22) || ($mes_nacimiento == 1 && $dia_nacimiento <= 19)) {
        return "Capricornio";
    } elseif (($mes_nacimiento == 1 && $dia_nacimiento >= 20) || ($mes_nacimiento == 2 && $dia_nacimiento <= 18)) {
        return "Acuario";
    } else {
        return "Piscis";
    }
}

function obtenerConsejoSaludAleatorio() {
    $consejos = [
        "bebe al menos 8 vasos de agua al día para mantenerte hidratado",
        "realiza 30 minutos de ejercicio moderado la mayoría de los días de la semana",
        "duerme entre 7 y 8 horas cada noche para un descanso óptimo",
        "consume una dieta equilibrada rica en frutas, verduras y proteínas magras",
        "limita el consumo de alimentos procesados y azúcares refinados",
        "practica técnicas de manejo del estrés, como la meditación o el yoga",
        "lávate las manos frecuentemente para prevenir la propagación de gérmenes",
        "protege tu piel del sol usando protector solar y ropa adecuada",
        "realiza chequeos médicos regulares para detectar problemas de salud a tiempo",
        "mantén una buena higiene bucal, cepillándote los dientes y usando hilo dental diariamente",
        "evita el consumo excesivo de alcohol y tabaco",
        "dedica tiempo a actividades que disfrutes y que te ayuden a relajarte",
        "mantén una actitud positiva y busca el apoyo de amigos y familiares",
        "aprende a escuchar las señales de tu cuerpo y descansa cuando lo necesites",
        "incorpora alimentos ricos en fibra a tu dieta para mejorar la digestión",
        "realiza estiramientos regularmente para mantener la flexibilidad y prevenir lesiones",
        "asegúrate de tener un espacio de trabajo ergonómico para evitar dolores y molestias",
        "planifica tus comidas con anticipación para evitar decisiones impulsivas y poco saludables",
        "infórmate sobre temas de salud y bienestar para tomar decisiones informadas",
        "cultiva relaciones saludables y significativas en tu vida"
    ];

    $indiceAleatorio = array_rand($consejos);
    return $consejos[$indiceAleatorio];
}

function obtenerConsejoFinanciero() {
    $consejos = [
        "crear un presupuesto detallado y revisarlo regularmente",
        "invertir en tu educación o habilidades para aumentar tu valor en el mercado laboral",
        "diversificar tus fuentes de ingresos para reducir el riesgo financiero",
        "ahorrar un porcentaje de tus ingresos cada mes, incluso si es una pequeña cantidad",
        "evitar deudas innecesarias y pagar las existentes lo antes posible",
        "buscar oportunidades de inversión que se alineen con tus objetivos a largo plazo",
        "crear un fondo de emergencia para hacer frente a gastos inesperados",
        "revisar y ajustar tu plan financiero regularmente para adaptarte a los cambios",
        "negociar mejores condiciones laborales o buscar un empleo mejor remunerado",
        "aprovechar los beneficios fiscales y las oportunidades de ahorro que ofrece tu país",
        "capacitarte en nuevas tecnologias, esto te dara nuevas oportunidades",
        "buscar mentores o asesores financieros que puedan guiarte",
        "reducir gastos hormiga, esto te ayudara a tener mejor flujo de capital",
        "considerar emprender un negocio propio si tienes una idea o habilidad valiosa",
        "analizar y comparar diferentes productos financieros antes de tomar decisiones",
        "crear una red de contactos profesionales que puedan abrirte puertas laborales",
        "establecer metas financieras claras y medibles para mantenerte motivado",
        "invertir en activos que generen ingresos pasivos a largo plazo",
        "mantener la calma y la disciplina en momentos de incertidumbre financiera",
        "celebrar tus logros financieros y aprender de tus errores"
    ];

    $indiceAleatorio = array_rand($consejos);
    return $consejos[$indiceAleatorio];
}

function sonSignosCompatibles($signo1, $signo2) {
    $compatibilidades = [
        "Aries" => ["Aries", "Leo", "Sagitario", "Géminis", "Acuario"],
        "Tauro" => ["Tauro", "Virgo", "Capricornio", "Cáncer", "Piscis"],
        "Géminis" => ["Géminis", "Libra", "Acuario", "Aries", "Leo"],
        "Cáncer" => ["Cáncer", "Escorpio", "Piscis", "Tauro", "Virgo"],
        "Leo" => ["Leo", "Aries", "Sagitario", "Géminis", "Libra"],
        "Virgo" => ["Virgo", "Tauro", "Capricornio", "Cáncer", "Escorpio"],
        "Libra" => ["Libra", "Géminis", "Acuario", "Leo", "Sagitario"],
        "Escorpio" => ["Escorpio", "Cáncer", "Piscis", "Virgo", "Capricornio"],
        "Sagitario" => ["Sagitario", "Aries", "Leo", "Libra", "Acuario"],
        "Capricornio" => ["Capricornio", "Tauro", "Virgo", "Escorpio", "Piscis"],
        "Acuario" => ["Acuario", "Géminis", "Libra", "Aries", "Sagitario"],
        "Piscis" => ["Piscis", "Cáncer", "Escorpio", "Tauro", "Capricornio"]
    ];

    $signo1 = ucfirst(strtolower($signo1)); //Normalizamos el texto ingresado
    $signo2 = ucfirst(strtolower($signo2)); //Normalizamos el texto ingresado

    if (isset($compatibilidades[$signo1]) && in_array($signo2, $compatibilidades[$signo1])) {
        return "¡Sí, son compatibles!";
    } else {
        return "No se consideran muy compatibles.";
    }
}


$link=Conectarse();

session_start();
$id_usuario = $_SESSION['id_usuario'];

$sql = "SELECT u.nombre, u.nick, dp.dia_nacimiento, dp.mes_nacimiento, dp.anio_nacimiento, dp.tiene_pareja,
               he.enfermedad, su.situacion_financiera, su.situacion_laboral
        FROM usuarios u
        JOIN datos_personales dp ON u.id_usuario = dp.id_usuario
        LEFT JOIN historial_enfermedades he ON u.id_usuario = he.id_usuario
        JOIN situacion_usuario su ON u.id_usuario = su.id_usuario
        WHERE u.id_usuario = ?";

$stmt = mysqli_prepare($link, $sql);
mysqli_stmt_bind_param($stmt, "i", $id_usuario);
mysqli_stmt_execute($stmt);

$resultado = mysqli_stmt_get_result($stmt);

if ($datos = $resultado->fetch_object()) {
    $nombre = $datos->nombre;
    $nick = $datos->nick;
    $dia_nacimiento_usuario = $datos->dia_nacimiento;
    $mes_nacimiento_usuario = $datos->mes_nacimiento;
    $anio_nacimiento_usuario = $datos->anio_nacimiento;
    $tiene_pareja = $datos->tiene_pareja;
    $signo_zodiacal_usuario = obtenerSignoZodiacal($dia_nacimiento_usuario, $mes_nacimiento_usuario);
    $enfermedades = $datos->enfermedad ? $datos->enfermedad : "cero enfermedades";
    $consejo_salud = obtenerConsejoSaludAleatorio();
    $situacion_financiera = $datos->situacion_financiera;
    $situacion_laboral = $datos->situacion_laboral;
    $consejo_financiero = obtenerConsejoFinanciero();

    if ($tiene_pareja == 1) {
        $sql_pareja = mysqli_query($link, "SELECT dia_nacimiento_pareja, mes_nacimiento_pareja, anio_nacimiento_pareja FROM parejas WHERE id_usuario = $id_usuario");

        if($datos_pareja = $sql_pareja->fetch_object()){
            $dia_nacimiento_pareja = $datos_pareja->dia_nacimiento_pareja;
            $mes_nacimiento_pareja = $datos_pareja->mes_nacimiento_pareja;
            $anio_nacimiento_pareja = $datos_pareja->anio_nacimiento_pareja;
            $signo_zodiacal_pareja = obtenerSignoZodiacal($dia_nacimiento_pareja, $mes_nacimiento_pareja);
            $compatible = sonSignosCompatibles($signo_zodiacal_pareja, $signo_zodiacal_usuario);
        }
    }
}

mysqli_stmt_close($stmt);
mysqli_close($link);

?>