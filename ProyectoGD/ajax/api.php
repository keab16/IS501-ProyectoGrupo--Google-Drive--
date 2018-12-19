<?php
    $userName = "DRIVE";
    $password = "oracle";
    $extension = "XE";
    $conexion;

    $conexion = oci_connect($userName, $password, $extension);

    switch ($_GET["accion"]) {
        case "guardarUsuario":
            $nombreUsuario = $_POST['nombreUsuario'];
            $apellidoUsuario = $_POST['apellidoUsuario'];
            $correoElectronico = $_POST['correoElectronico'];
            $contrasenia = $_POST['contrasenia'];
            $telefono = $_POST['telefono'];
            $correoRecuperacion = $_POST['correoRecuperacion'];
            $direccion = $_POST['direccion'];
        
            $sql = "BEGIN 
                        ALMACENAR_USUARIO(
                            :nombreUsuario, 
                            :apellidoUsuario,
                            :correoElectronico,
                            :contrasenia,
                            :telefono,
                            :correoRecuperacion,
                            :direccion
                        );
                    END;";   
            
            $stid = oci_parse($conexion, $sql);
        
            oci_bind_by_name($stid, ':nombreUsuario', $nombreUsuario);
            oci_bind_by_name($stid, ':apellidoUsuario', $apellidoUsuario);
            oci_bind_by_name($stid, ':correoElectronico', $correoElectronico);
            oci_bind_by_name($stid, ':contrasenia', $contrasenia);
            oci_bind_by_name($stid, ':telefono', $telefono);
            oci_bind_by_name($stid, ':correoRecuperacion', $correoRecuperacion);
            oci_bind_by_name($stid, ':direccion', $direccion);
        
            oci_execute($stid);   
            oci_free_statement($stid);
            oci_close($conexion);
            echo "Insercion Exitosa";
        break;
        case "obtenerUsuario":
            // Preparar la sentencia
            $stid = oci_parse($conexion, 'SELECT * FROM TBL_USUARIO');
            if (!$stid) {
                $e = oci_error($conexion);
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }

            // Realizar la lógica de la consulta
            $r = oci_execute($stid);
            if (!$r) {
                $e = oci_error($stid);
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }

            // Obtener los resultados de la consulta
            while ($fila = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                $resultadoTrends[] = $fila;
            }
            echo json_encode($resultadoTrends);
            oci_free_statement($stid);
            oci_close($conexion);
        break;
        default:
        break;
    }    
?>