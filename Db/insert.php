<?php


include "connect.php";

if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    if(strlen($_POST['desc']) >= 1 && strlen($_POST['name']) >= 1 && strlen('act') >= 1 && strlen('state') >= 1)
        $date = $_POST['date'];
        $desc = $_POST['desc'];
        $nombre = $_POST['name'];
        $accion = $_POST['act'];
        $state = $_POST['state'];
    
        $query = "insert into incidentes(fecha,descripcion,nombre,acciones,estado) values('$date','$desc','$nombre','$accion','$state')";
    
        mysqli_query($conexion,$query);
}
