
<?php

include("conexion.php");
//$con=conectar();


$id2=$_POST['id'];
$entidad=$_POST['entidad'];
$municipio=$_POST['municipio'];
$juzgado=$_POST['juzgado'];
$juez=$_POST['juez'];

$sql = "UPDATE registro_civil SET entidad='$entidad', municipio='$apellido1', juzgado='$juzgado', juez='$juez' WHERE id = '$id2'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /proyecto_hernandez_registrocivil/registro_civil.php");
    }
?>