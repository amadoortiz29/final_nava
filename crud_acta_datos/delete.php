<?php
include("conexion.php");

$id=$_GET['id'];

$sentencia= 'DELETE FROM acta_datos WHERE id='.$id;
$resultado=mysqli_query($con,$sentencia);

if ($resultado) {
    ?> 
    <h3 class="ok">¡los datos se han elimado correctamente!</h3>
    
   <?php
} else {
    ?> 
    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
   <?php
}
    
?>
