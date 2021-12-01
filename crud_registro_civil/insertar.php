<?php
include("con_db.php");

if (isset($_POST['submit'])) {
	if (strlen($_POST['entidad']) >= 1 && strlen($_POST['municipio']) >= 1  && strlen($_POST['juzgado']) && strlen($_POST['juez'])) {
	    $entidad = trim($_POST['entidad']);
	    $municipio = trim($_POST['municipio']);
		$juzgado = trim($_POST['juzgado']);
	    $juez = trim($_POST['juez']);
	    $consulta = "INSERT INTO registro_civil(entidad, municipio, juzgado, juez) VALUES ('$entidad','$municipio', '$juzgado','$juez')";
	    $resultado = mysqli_query($con,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Se registro correctamente!</h3>
            
           <?php
           
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>