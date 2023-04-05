<?php

include("configuracion.php");

function conectarDB(){
    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_error($con)){
        $e = mysqli_error($con);
        echo "Error, no nos pudimos conectar: {$e}";
        exit();
    }; 
    return $con;
};