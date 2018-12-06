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
                            <h1>¿Como te llamas?</h1>
                            <p>Introduce el nombre de tu cuenta de Google</p>
                        </div>
                        <div class="div-c3">
                            <div class="div-formulario">
                                <form method="POST">
                                    <div class="div-f">
                                        <div class="div-f1">
                                            <div class="div-f2">
                                                <input name="txt-nombreConfirmar" id="txt-nombreConfirmar" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
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
                                                <input name="txt-apellidoConfirmar" id="txt-apellidoConfirmar" autocomplete="username" spellcheck="false" tabindex="0" class="form-control div-f3 ">
                                                <div id="texto-input" class="textoInput" aria-hidden="true">
                                                    Apellido
                                                </div>
                                                <div class="invalid-feedback" style="position: absolute;">Ingresa su Apellido</div>
                                            </div>
                                            <div class="barra-input" id="barra-input"></div>
                                        </div>
                                    </div>
                                </form>
                                <div class="div-c4">
                                    <button style="text-align: right;" id="btnSiguienteConfirmarDatos" class="btn btn-primary" type="button">Siguiente</button>
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