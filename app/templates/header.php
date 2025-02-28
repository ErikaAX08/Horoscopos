<?php

$baseURL = "http://localhost/HoroscoposV2";

// get current route
$currentRoute = basename($_SERVER['REQUEST_URI']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horóscopos</title>

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo $baseURL; ?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo $baseURL; ?>/assets/css/templates/header.css">
    <link rel="stylesheet" href="<?php echo $baseURL; ?>/assets/css/templates/footer.css">

    <?php if (isset($additional_styles)): ?>
        <link rel="stylesheet" href="<?php echo $baseURL ?>/assets/css/<?= $additional_styles ?>">
    <?php endif; ?>

</head>
<body>
<header class="header">
    <nav class="nav">
        <div class="logo">
            <img class="img_logo" src="<?php echo $baseURL ?>/assets/img/logo_white.svg" alt="Logo">
        </div>
        <ul class="menu">
            <li><a class="menu_link" href="/">Horóscopos</a></li>
            <li><a class="menu_link" href="#">Sobre nosotros</a></li>
            <li><a class="menu_link" href="#">Contáctanos</a></li>
            <?php if ($currentRoute !== "login" && $currentRoute !== "register" && $currentRoute !== "analysis"):  ?>
                <li><a class="menu_link menu_button" href="<?php echo $baseURL; ?>/login">Iniciar sesión</a></li>
            <?php endif; ?>
            <?php if ($currentRoute === "analysis"):  ?>
                <li><a class="menu_link menu_button" href="<?php echo $baseURL; ?>/#">Perfil</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
