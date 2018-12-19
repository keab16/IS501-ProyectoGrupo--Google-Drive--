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
                            <h1>Crear tu Cuenta de GoogleDrive</h1>
                            <p>Acceder A Google Drive</p>
                        </div>
                        <div class="div-c3">
                            <div class="div-formulario">
                                <form method="POST">
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input name="txt-nombre" id="txt-nombre" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Nombre
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingresa su Nombre</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                        </div>
                                    </div>
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input name="txt-apellido" id="txt-apellido" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Apellido
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingresa su Apellido</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                        </div>
                                    </div>
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input onkeyup="validarEmail(this.value, this.id);" type="email" name="txt-correo" id="txt-correo" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Tu Dirección de correo electronico
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingresa un correo valido</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                            <div id="errorCorreo" style="color:red; font-size:11px; margin-top:20px;"></div>
                                        </div>
                                    </div>

                                    <div style="color: #757575; font-size: 12px; line-height: 1.3333; margin-top: 22px">
                                        <div>
                                            Deberas confirmar que esta dirección de correo electrónica es valida.
                                        </div>
                                    </div>

                                    <div class="div-f">
                                        <div class="div-f2">
                                            <div class="div-f1">
                                                <input type="password" name="txt-contraseniaNuevo" id="txt-contraseniaNuevo" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 " style="margin-top: 15px; ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Contraseña
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
                                                <input type="password" name="txt-contraseniaConfirmar" id="txt-contraseniaConfirmar" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Confirmar tu Contraseña
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Confirma Tu correo</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                        </div>
                                    </div>
                                    <div style="color: #757575; font-size: 12px; line-height: 1.3333; margin-top: 32px">
                                        <div style="padding-bottom: 3px; padding-top: 9px;">
                                            Utiliza ocho caracteres como mínimo con una combinación de letras, números y símbolos.
                                        </div>
                                    </div>
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input name="txt-telefono" id="txt-telefono" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Telefono
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingresa su Telefono</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                        </div>
                                    </div>
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input onkeyup="validarEmail(this.value, this.id);" type="email" name="txt-correoRecuperacion" id="txt-correoRecuperacion" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Tu Dirección de correo electronico Recuperación
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingresa un correo valido</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                            <!--div id="errorCorreo" style="color:red; font-size:11px; margin-top:20px;"></div-->
                                        </div>
                                    </div>
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input name="txt-direccion" id="txt-direccion" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Dirección
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingresa su Dirección</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                        </div>
                                    </div>

                                </form>

                                <img src="../../img/account.svg" alt="imagenCuenta">
                                <div class="div-c4">
                                    <div style="text-align: right;">
                                        <button id="btnSiguienteCuentaNueva" class="btn btn-primary" type="button">Siguiente</button>
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