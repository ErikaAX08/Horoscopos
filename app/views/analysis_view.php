<?php
include __DIR__ . '/../config/controlador_analysis.php';

global $baseURL;

$additional_styles = "pages/analysis.css";
include __DIR__ . '/../templates/header.php';
?>

<main class="main">
    <div class="content">
        <h1 class="title">Los astros te dan la bienvenida, <?php echo $nick;?></h1>
        <h2 class="subtitle">Tu Análisis Astral <br> Personalizado es:</h2>

        <div class="info_container">
            <div class="hand_container">
                <div class="hand_container_inner">
                    <img class="img img_hand_circular" src="<?php echo $baseURL ?>/assets/img/hand/hand_circular.svg" alt="Hand">
                    <img class="img img_hand_zodiac" src="<?php echo $baseURL ?>/assets/img/hand/hand_zodiac.svg" alt="Hand">
                </div>
            </div>
            <div class="info_text">
                <p class="text">🔹 Bienvenido, <?php echo $nombre;?>. Los astros alinearon tu energía desde el <?php echo "$dia_nacimiento_usuario/$mes_nacimiento_usuario/$anio_nacimiento_usuario";?>, influenciado por <?php echo $signo_zodiacal_usuario;?>.</p>
                <?php
                if($tiene_pareja == 1){
                    echo "<p class='text'>❤ Compatibilidad & Energía: Tu relación con $signo_zodiacal_pareja $compatible</p>";
                }
                ?>

                <p class="text">🍃 Salud & Bienestar: Enfrentaste <?php echo $enfermedades;?>, pero los astros sugieren <?php echo $consejo_salud;?> para equilibrar tu energía.</p>
                <p class="text">💰 Prosperidad & Trabajo: Tu situación financiera <?php echo $situacion_financiera;?> y laboral <?php echo $situacion_laboral;?> los planetas te aconsejan <?php echo $consejo_financiero;?>, atrayendo oportunidades clave.</p>
                <p class="text">🌟 Mensaje de los astros: <?php echo $nick;?>, tu esencia es única. Escucha tu intuición y deja que las estrellas guíen tu destino.</p>
            </div>
        </div>

        <div class="buttons_container">
            <a class="button button_light" href="app/config/logout.php">Volver a la Página Principal</a>
            <span>o</span>
            <a class="button button_accent" href="#">Actualizar Datos Astrales</a>
        </div>
    </div>
</main>

<?php
include __DIR__ . '/../templates/footer.php';
?>