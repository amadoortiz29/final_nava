
<?php

include("conexion.php");
//$con=conectar();


$id2=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$fecha_nac['fecha_nac'];
$lugar_nac=$_POST['lugar_nac'];
$genero=$_POST['genero'];
$presentado=$_POST['presentado'];

$sql = "UPDATE registrado SET nombre='$nombre', apellido1='$apellido1', apellido2='$apellido2', fecha_nac='$fecha_nac', lugar_nac='$lugar_nac', genero='$genero', presentado='$presentado' WHERE id = '$id2'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /proyecto_hernandez_registrocivil/registrado.php");
    }
?>