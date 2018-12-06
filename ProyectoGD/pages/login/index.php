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
                            <div>
                                <h1>Iniciar Sesion</h1>
                                <p>Acceder a Google Drive</p>
                            </div>
                            <div style="margin-left:30%">
                                <img src="../../img/GoogleDriveLogo.png" width="100">
                            </div>
                        </div>
                        <div class="div-c3">
                            <div class="div-formulario">
                                <form method="POST">
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input onkeyup="validarEmail(this.value, this.id);" type="email" name="txt-correo" id="txt-correoElectronico" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Correo electrónico o teléfono
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingrese su Correo o Numero de Telefono Correctamente</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                            <div id="correoInvalido" style="color:red; font-size:11px; margin-top:20px;"></div>
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px">
                                        <a href="../../pages/login/recuperarCorreo.php">¿Olvidaste el correo electrónico?</a>
                                    </div>
                                </form>
                                <div style="color: #757575; font-size: 12px; line-height: 1.3333; margin-top: 32px">
                                    <div style="padding-bottom: 3px; padding-top: 9px;">
                                        ¿Esta no es tu computadora? Usa el modo de invitado para navegar de forma privada.
                                    </div>
                                </div>
                                <div class="div-c4">
                                    <div style="text-align: right;">
                                        <button id="btnSiguienteCorreo" class="btn btn-primary" type="button">Siguiente</button>
                                    </div>
                                    <div>
                                        <div>
                                            <content><button class="btn btn-outline-info" id="btnCrearCuenta">Crear cuenta</a></content>
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