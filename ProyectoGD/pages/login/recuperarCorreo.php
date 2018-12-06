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
                            <h1>Buscar tu dirección de correo electrónico</h1>
                            <p>Introduce tu número de teléfono o tu dirección de correo electrónico de recuperación</p>
                        </div>
                        <div class="div-c3">
                            <div class="div-formulario">
                                <form method="POST">
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input type="email" name="txt-correoRecuperar" id="txt-correoRecuperar" value="" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Teléfono o dirección de correo
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingresa un correo electrónico o un número de teléfono</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                        </div>
                                    </div>
                                </form>
                                <div class="div-c4">
                                    <div style="text-align: right;">
                                        <button id="btnSiguienteRecuperar" class="btn btn-primary" type="button">Siguiente</button>
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