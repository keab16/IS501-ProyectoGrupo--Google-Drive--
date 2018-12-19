<?php

    //conexion

    $conexion = oci_connect("DRIVE","oracle",'XE');

    if(!$conexion){
    $m = oci_error();
    echo $m['message'],"n";
    exit;
    }else{
    echo "Conexion con Exito a Oracle!";
    }

    $nombre_temporal = $_FILES['fileElem'][tmp_name];
    $nombre = $_FILES['fileElem']['name'];
    move_uploaded_file($nombre_temporal, 'conexionBasedeDatos/'.$nombre);

    /*$stid = oci_parse($conexion, 'SELECT * FROM tbl_genero');
    oci_execute($stid);

    echo "<table border='1'>\n";
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        echo "<tr>\n";
        foreach ($row as $item) {
            echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";*/

?>