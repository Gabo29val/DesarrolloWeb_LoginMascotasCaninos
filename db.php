<?php
$host = "localhost";
$basededatos = "veterinaria_canina";
$usuario = "root";
$clave = "";
$tabla = "usuarios";

//$con = new mysqli($host, $usuario, $clave, $basededatos);

$con = mysqli_connect(
    $host,
    $usuario,
    $clave,
    $basededatos
);


if($con->connect_errno){
    echo 'DB faild';
}else{
    //echo 'DB conected';
}

?>