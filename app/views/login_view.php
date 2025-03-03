<?php

$additional_styles = "pages/auth.css";
include __DIR__ . '/../templates/header.php';
global $baseURL;

?>

<main class="main">
    <div class="content">
        <h2 class="title">Conéctate con los astros</h2>
        <p class="description">Inicia sesión con tu cuenta de RIEAV</p>
        <form class="form" method="POST" action="">
            <?php
            include __DIR__ . "../config/controloador_login.php";
            ?>
            <label for="email">Email</label>
            <input class="input" id="email" type="email" name="email" placeholder="Ingresa tu correo estelar" required>
            <label for="password">Password</label>
            <input class="input" id="password" type="password" name="password" placeholder="Tu llave cósmica" required>
            <input class="main_button" type="submit" name="btn_login" value="Iniciar Sesión" />
        </form>
        <p class="small_text">¿No tienes cuenta? <a href="<?php echo $baseURL?>/register">Registrate</a></p>
    </div>
</main>

<?php
include __DIR__ . '/../templates/footer.php';
?>