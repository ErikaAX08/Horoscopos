<?php
$additional_styles = "pages/auth.css";
include __DIR__ . '/../templates/header.php';
include __DIR__ . '/../config/controlador_registro.php';

global $baseURL;
?>

<main class="main">
    <div class="content">
        <h2 class="title">Únete al universo de los astros</h2>
        <p class="description">Crea una cuenta de RIEAV</p>
        <form class="form" method="POST" action ="">
            <label for="name">Nombre</label>
            <input class="input" id="name" type="text" name="name" placeholder="¿Cómo te llaman los astros?" required>

            <label for="last_name">Apellido Paterno</label>
            <input class="input" id="last_name" type="text" name="last_name" placeholder="Apellido de tu constelación" required>

            <label for="mother_last_name">Apellido Materno</label>
            <input class="input" id="mother_last_name" type="text" name="mother_last_name" placeholder="Tu otro vínculo estelar" required>

            <label for="nick">Nick</label>
            <input class="input" id="nick" type="text" name="nick" placeholder="El alias de tu destino" required>

            <label for="email">Correo</label>
            <input class="input" id="email" type="email" name="email" placeholder="Ingresa tu correo estelar" required>

            <label for="password">Contraseña</label>
            <input class="input" id="password" type="password" name="password" placeholder="Tu llave cósmica" required>

            <label for="birthdate">Hora, día, mes y año de nacimiento</label>
            <input class="input" id="birthdate" type="text" name="birthdate" placeholder="Día, mes y año de tu conexión astral" required>

            <label for="gender">Género</label>
            <select class="input dropdown" id="gender" name="gender">
                <option value="identity_cosmic">Identidad cósmica</option>
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
                <option value="no_especifico">Deseo no especificar</option>
            </select>

            <label for="partner_birthdate">Día, mes y año de nacimiento de tu pareja (Opcional)</label>
            <input class="input" id="partner_birthdate" type="text" name="partner_birthdate" placeholder="Día, mes y año del instante en que su destino comenzó">

            <label for="illnesses">Enfermedades que has tenido en el año</label>
            <input class="input" id="illnesses" type="text" name="illnesses" placeholder="Eventos que han afectado tu energía vital">

            <div class="row">
                <div class="col">
                    <select class="input dropdown" id="abundance" name="abundance">
                        <option value="flow">¿Cómo fluye tu abundancia?</option>
                        <option value="buena">Buena</option>
                        <option value="mala">Mala</option>
                        <option value="regular">Regular</option>
                    </select>
                </div>

                <div class="col">
                    <select class="input dropdown" id="work_energy" name="work_energy">
                        <option value="energia">Energía actual en tu trabajo</option>
                        <option value="desempleado">Desempleado</option>
                        <option value="empleado">Empleado</option>
                        <option value="empresario">Empresario</option>
                    </select>
                </div>
            </div>

            <input name="btn_registro" class="main_button" type="submit" value="Crear Cuenta"/>
        </form>
        <p class="small_text">¿Ya tienes cuenta? <a href="<?php echo $baseURL?>/login">Inicia sesión</a></p>
    </div>
</main>

<?php
include __DIR__ . '/../templates/footer.php';
?>
