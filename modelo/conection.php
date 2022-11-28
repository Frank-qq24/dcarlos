<?php
    //------------------------------------CONEXION 2 ---------------------------//
    // inicio de sescion para guardar datos
    session_start();

    //parametros para concectar las base de datos
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'restaurante'
    );


    //=====================================================================//
    /*
    // si exite la conexion manda el siguiente mensaje
    if (isset($conn)) {
        echo "conexion exitosa";
    };
    */
?>