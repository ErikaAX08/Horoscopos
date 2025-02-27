<?php

$additional_styles = "pages/auth.css";
include __DIR__ . '/../templates/header.php';

?>

<main class="main">
    <div class="content">
        <h2 class="title">Conéctate con los astros</h2>
        <p class="description">Inicia sesión con tu cuenta de RIEAV</p>
        <form class="form" method="POST">
            <label for="email">Email</label>
            <input class="input" id="email" type="email" name="email" placeholder="Ingresa tu correo estelar" required>
            <label for="password">Password</label>
            <input class="input" id="password" type="password" name="password" placeholder="Tu llave cósmica" required>
            <button class="main_button" type="submit">Iniciar Sesión</button>
        </form>
        <p class="small_text">¿No tienes cuenta? <a href="#">Registrate</a></p>
    </div>
</main>

<?php
include __DIR__ . '/../templates/footer.php';
?>