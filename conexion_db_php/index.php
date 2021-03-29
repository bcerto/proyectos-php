<?php

    $servidor = "localhost";
    $nombreusuario = "root";
    $password = "Topo2903";

    $conexion = new mysqli ($servidor, $nombreusuario, $password);

    if ($conexion-> connect_error) {
        die ("Conexion fallida: " . $conexion-> connect_error);
    }

    echo "Conexion exitosa"

    

?>