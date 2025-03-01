<?php
function obtenerSignoZodiacal($dia, $mes) {
    $signos = [
        ['Capricornio', 20], // 22 de diciembre - 20 de enero
        ['Acuario', 19],     // 21 de enero - 19 de febrero
        ['Piscis', 20],      // 20 de febrero - 20 de marzo
        ['Aries', 20],       // 21 de marzo - 20 de abril
        ['Tauro', 21],       // 21 de abril - 21 de mayo
        ['Géminis', 21],     // 22 de mayo - 21 de junio
        ['Cáncer', 22],      // 22 de junio - 22 de julio
        ['Leo', 23],         // 23 de julio - 23 de agosto
        ['Virgo', 23],       // 24 de agosto - 23 de septiembre
        ['Libra', 23],       // 24 de septiembre - 23 de octubre
        ['Escorpio', 22],    // 24 de octubre - 22 de noviembre
        ['Sagitario', 21],   // 23 de noviembre - 21 de diciembre
        ['Capricornio', 31]  // 22 de diciembre - 31 de diciembre
    ];

    if ($mes < 1 || $mes > 12) {
        return null; // Mes inválido
    }

    if ($dia <= $signos[$mes - 1][1]) {
        return $signos[$mes - 1][0];
    } else {
        return $signos[$mes % 12][0];
    }
}
?>

<?php
global $baseURL;

$additional_styles = "pages/analysis.css";
include __DIR__ . '/../templates/header.php';

include("app/config/conexion_bd.php");
$link = Conectarse();

session_start();
$id_usuario = $_SESSION['id_usuario'] ?? 1;

$sql = mysqli_query($link, "SELECT nombre, nick FROM usuarios WHERE id_usuario = $id_usuario");
$datos_usuario = $sql->fetch_object();

$sql = mysqli_query($link, "SELECT dia_nacimiento, mes_nacimiento, anio_nacimiento, tiene_pareja FROM datos_personales WHERE id_usuario = $id_usuario");
$datos_personales = $sql->fetch_object();

if ($datos_usuario && $datos_personales) {
    $nombre = $datos_usuario->nombre;
    $nick = $datos_usuario->nick;
    $dia_nacimiento = $datos_personales->dia_nacimiento;
    $mes_nacimiento = $datos_personales->mes_nacimiento;
    $anio_nacimiento = $datos_personales->anio_nacimiento;
    $tiene_pareja = $datos_personales->tiene_pareja;
    $fecha_nacimiento = $dia_nacimiento . "/" . $mes_nacimiento . "/" . $anio_nacimiento;

    $signo_zodiacal = obtenerSignoZodiacal($dia_nacimiento, $mes_nacimiento);

    if ($tiene_pareja == 1) {
        $sql_pareja = mysqli_query($link, "SELECT dia_nacimiento_pareja, mes_nacimiento_pareja, anio_nacimiento_pareja FROM parejas WHERE id_usuario = $id_usuario");
        $datos_pareja = $sql_pareja->fetch_object();

        if ($datos_pareja) {
            $dia_nacimiento_pareja = $datos_pareja->dia_nacimiento_pareja;
            $mes_nacimiento_pareja = $datos_pareja->mes_nacimiento_pareja;
            $anio_nacimiento_pareja = $datos_pareja->anio_nacimiento_pareja;
            $fecha_nacimiento_pareja = $dia_nacimiento_pareja . "/" . $mes_nacimiento_pareja . "/" . $anio_nacimiento_pareja;

            $signo_zodiacal_pareja = obtenerSignoZodiacal($dia_nacimiento_pareja, $mes_nacimiento_pareja);
        }
    }
} else {
    echo "<p>No autorizo</p>";
    exit;
}

mysqli_close($link);
?>



<main class="main">
    <div class="content">
        <h1 class="title">Los astros te dan la bienvenida, <?php echo htmlspecialchars($nick); ?></h1>
        <h2 class="subtitle">Tu Análisis Astral <br> Personalizado es:</h2>

        <div class="info_container">
            <div class="hand_container">
                <div class="hand_container_inner">
                    <img class="img img_hand_circular" src="<?php echo $baseURL ?>/assets/img/hand/hand_circular.svg" alt="Hand">
                    <img class="img img_hand_zodiac" src="<?php echo $baseURL ?>/assets/img/hand/hand_zodiac.svg" alt="Hand">
                </div>
            </div>
            <div class="info_text">
                <p class="text">🔹 Bienvenido, <?php echo htmlspecialchars($nombre); ?>. Los astros alinearon tu energía desde el <?php echo htmlspecialchars($fecha_nacimiento); ?>, influenciado por <?php echo htmlspecialchars($signo_zodiacal); ?>.</p>
                <p class="text">🔹 Tu Esencia: Tu signo te otorga una personalidad [breve descripción del signo], mientras que tu ascendente [Ascendente] guía tu proyección y la Luna en [Signo Lunar] refleja tu mundo emocional.</p>
                <?php if ($tiene_pareja == 1 && isset($signo_zodiacal_pareja)): ?>
                    <p class="text">❤ Compatibilidad & Energía: Tu relación con <?php echo htmlspecialchars($signo_zodiacal_pareja); ?> vibra con [Energía de la relación], fortalecida desde <?php echo htmlspecialchars($fecha_nacimiento_pareja); ?>.</p>
                <?php endif; ?>
                <p class="text">🍃 Salud & Bienestar: Enfrentaste [Enfermedades registradas], pero los astros sugieren [Consejo de bienestar] para equilibrar tu energía.</p>
                <p class="text">💰 Prosperidad & Trabajo: Tu situación financiera [Situación financiera] y laboral [Situación laboral] se alinean con [Influencias astrológicas], atrayendo oportunidades clave.</p>
                <p class="text">🌟 Mensaje de los astros: <?php echo htmlspecialchars($nick); ?>, tu esencia es única. Escucha tu intuición y deja que las estrellas guíen tu destino.</p>
            </div>
        </div>

        <div class="buttons_container">
            <a class="button button_light" href="#">Volver a la Página Principal</a>
            <span>o</span>
            <a class="button button_accent" href="#">Actualizar Datos Astrales</a>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/../templates/footer.php';
?>