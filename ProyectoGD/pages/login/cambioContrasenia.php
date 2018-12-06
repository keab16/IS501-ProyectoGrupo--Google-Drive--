<!DOCTYPE html>
<html>

<head>
    <title>Play: Inicio Sesion</title>
    <meta charset="utf-8">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/login.css">
    <link rel="shortcut icon" href="../../img/GoogleDriveLogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <div class="wrapper">
        <div class="div-central">
            <div class="div-c1">
                <div class="logo"></div>
                <div class="div-c2">
                    <div id="div-pasosLogin">
                        <div class="banner">
                            <h1>Registra tu Nueva Contraseña</h1>
                        </div>
                        <div class="div-c3">
                            <div class="div-formulario">
                                <form method="POST">
                                    <div class="div-f">
                                        <div class="div-f2">
                                            <div class="div-f1">
                                                <input type="password" name="txt-contraseniaNueva" id="txt-contraseniaNueva" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 " style="margin-top: 15px; ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Contraseña Nueva
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingresa un contraseña valida</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                            <div id="mensajeError"></div>
                                        </div>
                                    </div>
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input type="password" name="txt-contraseniaConfirmarNueva" id="txt-contraseniaConfirmarNueva" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Confirmar tu Contraseña Nueva
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Confirma Tu correo</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                        </div>
                                    </div>
                                </form>
                                <div style="color: #757575; font-size: 12px; line-height: 1.3333; margin-top: 32px">
                                    <div style="padding-bottom: 3px; padding-top: 9px;">
                                        Utiliza ocho caracteres como mínimo con una combinación de letras, números y símbolos.
                                    </div>
                                </div>
                                <div class="div-c4">
                                    <div style="text-align: right;">
                                        <button id="btnSiguienteConfirmacionNueva" class="btn btn-primary" type="button">Siguiente</button>
                                    </div>
                                    <div>
                                        <div>
                                            <content>
                                                <button class="btn btn-outline-info" id="btnRegresarLogin">Prefiero iniciar Sesión</button>
                                            </content>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../../js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/controladorLogin.js"></script>
</body>

</html>