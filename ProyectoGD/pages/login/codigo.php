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
                                <h1>Escribe el Código</h1>
                            </div>
                        </div>
                        <div class="div-c3">
                            <div class="div-formulario">
                                Se acaba de enviar un correo electrónico con un código de verificación a <b>falta halar correo</b><br><br><br>
                                <form method="POST">
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input name="txt-codigo" id="txt-codigo" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Escribe el Código
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingrese su Código Correctamente</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                            <div id="correoInvalido" style="color:red; font-size:11px; margin-top:20px;"></div>
                                        </div>
                                    </div>
                                </form>

                                <div class="div-c4">
                                    <div style="text-align: right;">
                                        <button id="btnSiguienteCodigo" class="btn btn-primary" type="button">Siguiente</button>
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