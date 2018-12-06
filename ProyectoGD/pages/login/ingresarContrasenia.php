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
                            <h1>Te damos la bienvenida</h1>
                            <a class="buttoms-personalizado" onclick="location.href='index.php'" style="display: -webkit-box; display: -moz-box; display: -ms-flexbox; display: -webkit-flex; display: flex; min-height: 24px; padding-bottom: 3px; padding-top: 1px; margin-bottom: 0; margin-top: 0; height: 30px;">
                                <div>
                                    <svg xmlns="https://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 48 48" fill="#4285f4" aria-hidden="true">
                                        <path d="M24,0C10.74,0 0,10.74 0,24C0,37.26 10.74,48 24,48C37.26,48 48,37.26 48,24C48,10.74 37.26,0 24,0ZM24,41.28C17.988,41.28 12.708,38.208 9.6,33.552C9.66,28.788 19.212,26.16 24,26.16C28.788,26.16 38.328,28.788 38.4,33.552C35.292,38.208 30.012,41.28 24,41.28ZM24,7.2C27.972,7.2 31.2,10.428 31.2,14.4C31.2,18.384 27.972,21.6 24,21.6C20.028,21.6 16.8,18.384 16.8,14.4C16.8,10.428 20.028,7.2 24,7.2Z">
                                        </path>
                                        <path d="M0 0h48v48H0z" fill="none"></path>
                                    </svg>
                                </div>
                                <div id="div-correoRecibido" style="height:20px; width:310px;">
                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp${correoValido}
                                </div>
                                <div role="button" id="div-cambiarCorreo">
                                    <span style="top: -12px">
                                        <svg aria-hidden="true" width="24px" height="24px" viewBox="0 0 24 24" fill="#000000">
                                            <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                            <path d="M0-.75h24v24H0z" fill="none"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="div-c3">
                            <div class="div-formulario">
                                <form method="POST">
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input type="password" name="txt-pass" id="txt-pass" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Ingresa tu contraseña
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingresa una contraseña</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                            <div id="validoOInvalidoContrasenia" style="color:red; font-size:11px; margin-top:20px;"></div>
                                        </div>
                                    </div>
                                </form>
                                <div class="div-c4">
                                    <div style="text-align: right;">
                                        <button id="btnSiguienteContrasenia" class="btn btn-primary" type="submit">Siguiente</button>
                                    </div>
                                    <div class="password">
                                        <content>
                                            <a href="../../pages/login/recuperarCorreo.php">¿Olvidaste la contraseña?</a>
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
    <script type="text/javascript" src="../../js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/controladorLogin.js"></script>
</body>

</html>