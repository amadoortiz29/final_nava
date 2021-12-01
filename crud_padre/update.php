
<?php

include("conexion.php");
//$con=conectar();


$id2=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$nacionalidad=$_POST['nacionalidad'];
$edad=$_POST['edad'];

$sql = "UPDATE abuelo SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2',nacionalidad='$nacionalidad',edad='$edad' WHERE id = '$id2'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /proyecto_hernandez_registrocivil/padre.php");
    }
?>