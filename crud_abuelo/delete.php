<?php
include("conexion.php");
//include("con_db.php");

$id=$_GET['id'];
//$sql = "SELECT * FROM abuelo WHERE id = $id";
//$sentencia = 'SELECT * FROM abuelo';
$sentencia= 'DELETE FROM abuelo WHERE id='.$id;
$resultado=mysqli_query($con,$sentencia);
//var_dump($condelabue);
if ($resultado) {
    ?> 
    <h3 class="ok">¡Abuelo elimado correctamente!</h3>
    
   <?php
} else {
    ?> 
    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
   <?php
}
    
?>
