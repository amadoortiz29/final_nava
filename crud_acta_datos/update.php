
<?php

include("conexion.php");
//$con=conectar();

$id2=$_POST['id'];
$libro=$_POST['libro'];
$acta=$_POST['acta'];
$anio=$_POST['anio'];
$fecha_registro=$_POST['fecha_registro'];
$folio=$_POST['folio'];

$sql = "UPDATE acta_datos SET  nombre='$nombre', libro='$libro', acta='$acta', anio='$anio', fecha_registro='$fecha_registro', folio='$folio'WHERE id = '$id2'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /proyecto_hernandez_registrocivil/acta_datos.php");
    }
?>