<?php

//variables:


$nombreServidor = 'localhost';
$nombreUsuario= 'root';
$clave= '';
$nombreBaseDatos= 'miproyecto';

//variable para conexion a db

$con = new mysqli($nombreServidor,$nombreUsuario,$clave,$nombreBaseDatos);
//crear condicion, comillas dobles opara string y simples para comcatenar

if($con->connect_error){
    die("conexion fallida".$con->connect_error);
}
//imprimir
//echo "conexion exitosa..."
?>
