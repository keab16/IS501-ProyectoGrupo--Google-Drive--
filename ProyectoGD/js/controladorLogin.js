var selectorActual = "#div-inicioRespuesta";
var correoValido = "";
var correcto = false;
/*$("").click(function(){
    $(selectorActual).toggle("slow");
    $("").toggle("slow");
    selectorActual = "";
});*/
$(document).ready(function() {
    estadoValidar("#4285f4", "txt-correoElectronico");
    estadoValidar("#4285f4", "txt-pass");

    estadoValidar("#4285f4", "txt-nombre");
    estadoValidar("#4285f4", "txt-apellido");
    estadoValidar("#4285f4", "txt-correo");
    estadoValidar("#4285f4", "txt-contraseniaNuevo");
    estadoValidar("#4285f4", "txt-contraseniaConfirmar");

    estadoValidar("#4285f4", "txt-correoRecuperar");
    estadoValidar("#4285f4", "txt-nombreConfirmar");
    estadoValidar("#4285f4", "txt-apellidoConfirmar");

    estadoValidar("#4285f4", "txt-codigo");
    estadoValidar("4285f4", "txt-contraseniaNueva");
    estadoValidar("4285f4", "txt-contraseniaConfirmarNueva");

    $("#btnSiguienteCorreo").click(function() {
        findex();
    });
    $("#btnCrearCuenta").click(function() {
        location.href = "../../pages/login/cuentaNueva.php";
    });
    $("#btnSiguienteContrasenia").click(function() {
        fContrasenia();
    });
    $("#btnRegresarLogin").click(function() {
        location.href = "../../pages/login/";
    });
    $("#btnSiguienteRecuperar").click(function() {
        fRecuperar();
    });
    $("#btnSiguienteConfirmacion").click(function() {
        fCuentaNueva();
    });
    $("#btnSiguienteConfirmarDatos").click(function() {
        fConfirmarDatos();
    });
    $("#btnEnviar").click(function() {
        location.href = "../../pages/login/codigo.php";
    });
    $("#btnSiguienteCodigo").click(function() {
        fCodigo();
    });
    $("#btnSiguienteConfirmacionNueva").click(function() {
        fConfirmarContrasenia();
    });
    $("#btnSiguienteCuentaNueva").click(function() {
        fCuentaNueva();
    });
});

//----------------------------------Funciones Login-------------------------------
function estadoValidar(color, id) {
    $("#" + id).focus(function() {
        $(".barra-input").css("background-color", color);
        $(".barra-input").css("height", "2px");
        $(".textoInput").css("color", color);
        $(".textoInput").css("-webkit-transform", "scale(.75) translateY(-39px)");
        $(".textoInput").css("transform", "scale(.75) translateY(-39px)");
        $(".textoInput").css("font-size", "14px");
    });
    $("#" + id).blur(function() {
        $(".barra-input").css("background-color", "rgba(0,0,0,0.12)");
        $(".barra-input").css("height", "1px");
        $(".textoInput").css("color", "rgba(0,0,0,0.38)");

        if (($("#" + id).val()) == "") {
            $(".textoInput").css("-webkit-transform", "none");
            $(".textoInput").css("transform", "none");
            $(".textoInput").css("font-size", "16px");
        }
    });
}

function validarCampoVacio(id) {
    if ((document.getElementById(id).value) == "") {
        document.getElementById(id).classList.remove('is-valid');
        document.getElementById(id).classList.add('is-invalid');
        var color = "#dc3545";
        estadoValidar(color, id);
        correcto = false;
        return false;
    } else {
        document.getElementById(id).classList.remove('is-invalid');
        document.getElementById(id).classList.add('is-valid');
        var color = "#4285f4";
        estadoValidar(color, id);
        correcto = true;
        return true;
    }
}

function validarEmail(email, id) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(email)) {
        //console.log("Correo valido " + email); 
        document.getElementById(id).classList.remove("is-invalid");
        document.getElementById(id).classList.add("is-valid");
        return true;
    } else {
        //console.log("Correo invalido " + email);
        document.getElementById(id).classList.remove("is-valid");
        document.getElementById(id).classList.add("is-invalid");
        return false;
    }
}

function fCuentaNueva() {
    if (
        validarCampoVacio("txt-nombre") &&
        validarCampoVacio("txt-apellido") &&
        validarCampoVacio("txt-correo") &&
        validarCampoVacio("txt-contraseniaNuevo") &&
        validarCampoVacio("txt-contraseniaConfirmar") &&
        validarCampoVacio("txt-telefono") &&
        validarCampoVacio("txt-correoRecuperacion") &&
        validarCampoVacio("txt-direccion")
    ) {
        var parametros = "nombreUsuario=" + $("#txt-nombre").val() + "&" +
            "apellidoUsuario=" + $("#txt-apellido").val() + "&" +
            "correoElectronico=" + $("#txt-correo").val() + "&" +
            "contrasenia=" + $("#txt-contraseniaNuevo").val() + "&" +
            "telefono=" + $("#txt-telefono").val() + "&" +
            "correoRecuperacion=" + $("#txt-correoRecuperacion").val() + "&" +
            "direccion=" + $("#txt-direccion").val()
        $.ajax({
            url: "../../ajax/api.php?accion=guardarUsuario",
            method: "POST",
            data: parametros,
            dataType: "json",
        });
        console.log(parametros);
        location.href = "../../pages/login/";
    }
}

function findex() {
    correoValido = $("#txt-correoElectronico").val();
    if (validarCampoVacio("txt-correoElectronico") && validarEmail(correoValido, "txt-correoElectronico")) {
        $.ajax({
            url: "../../ajax/api.php?accion=obtenerUsuario",
            dataType: 'json',
            success: function(respuesta) {
                console.log(respuesta);
                for (var i = 0; i < respuesta.length; i++) {
                    if (respuesta[i].CORREO_ELECTRONICO) {
                        location.href = "../../pages/login/ingresarContrasenia.php";
                    } else {
                        $("#invalidOValido").html("Ingresa un correo electrónico o un número de teléfono Valido");
                    }
                }
            }
        });
    } else
        $("#invalidOValido").html("Ingresa un correo electrónico o un número de teléfono Valido");
}

function fContrasenia() {
    if (validarCampoVacio("txt-pass"))
        location.href = "../../index.html";
}

function fRecuperar() {
    correoValido = $("#txt-correoRecuperar").val();
    if (validarCampoVacio("txt-correoRecuperar") && validarEmail(correoValido, "txt-correoRecuperar"))
        location.href = "../../pages/login/confirmarDatos.php";
}

function fConfirmarDatos() {
    if (
        validarCampoVacio("txt-nombreConfirmar") &&
        validarCampoVacio("txt-apellidoConfirmar")) {
        location.href = "../../pages/login/confirmarEnvio.php";
    }
}

function fCodigo() {
    if (validarCampoVacio("txt-codigo")) {
        location.href = "../../pages/login/cambioContrasenia.php"
    }
}

function fConfirmarContrasenia() {
    if (
        validarCampoVacio("txt-contraseniaNueva") &&
        validarCampoVacio("txt-contraseniaConfirmarNueva")
    ) {
        location.href = "../../pages/login/";
    }
}

function logueado(logeado) {
    if (logeado == false) {
        $("#div-sesionUsuario").html(
            `<p id="p-menu"> Inicia sesión para ver tus<br> canales y<br> recomendaciones. </p>
                <div id="logueadoONO">
                    <a href="pages/login.html" style="text-decoration:none; margin-left: 30px;"><br>
                        <b style="margin-left: 45px">INICIAR SESION</b>    
                    </a>
                </div>`
        );
    } else {
        $("#div-sesionUsuario").html("Hola");
    }
}