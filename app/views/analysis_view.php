<?php
global $baseURL;

$additional_styles = "pages/analysis.css";
include __DIR__ . '/../templates/header.php';

$nick = "Ivan T";

?>

<main class="main">
    <div class="content">
        <h1 class="title">Los astros te dan la bienvenida, <?php echo $nick ?></h1>
        <h2 class="subtitle">Tu Análisis Astral <br> Personalizado es:</h2>

        <div class="info_container">
            <div class="hand_container">
                <div class="hand_container_inner">
                    <img class="img img_hand_circular" src="<?php echo $baseURL ?>/assets/img/hand/hand_circular.svg" alt="Hand">
                    <img class="img img_hand_zodiac" src="<?php echo $baseURL ?>/assets/img/hand/hand_zodiac.svg" alt="Hand">
                </div>
            </div>
            <div class="info_text">
                <p class="text">🔹 Bienvenido, [Nombre]. Los astros alinearon tu energía desde el [Día/Mes/Año de nacimiento], influenciado por [Signo Zodiacal].</p>
                <p class="text">🔹 Tu Esencia: Tu signo te otorga una personalidad [breve descripción del signo], mientras que tu ascendente [Ascendente] guía tu proyección y la Luna en [Signo Lunar] refleja tu mundo emocional.</p>
                <p class="text">❤ Compatibilidad & Energía: Tu relación con [Signo de la pareja] vibra con [Energía de la relación], fortalecida desde [Fecha de nacimiento de la pareja].</p>
                <p class="text">🍃 Salud & Bienestar: Enfrentaste [Enfermedades registradas], pero los astros sugieren [Consejo de bienestar] para equilibrar tu energía.</p>
                <p class="text">💰 Prosperidad & Trabajo: Tu situación financiera [Situación financiera] y laboral [Situación laboral] se alinean con [Influencias astrológicas], atrayendo oportunidades clave.</p>
                <p class="text">🌟 Mensaje de los astros: [Nombre/Nick], tu esencia es única. Escucha tu intuición y deja que las estrellas guíen tu destino.</p>
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