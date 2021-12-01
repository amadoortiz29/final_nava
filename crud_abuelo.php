<?php 

include("con_db.php");

if (isset($_POST['submit'])) {
	var_dump("entro");
	    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido1']) >= 1 && strlen($_POST['apellido2'])) {
	    $nombre = trim($_POST['nombre']);
	    $apellido1 = trim($_POST['apellido1']);
	    $apellido2 = trim($_POST['apellido2']);
	    $consulta = "INSERT INTO abuelo(nombre, apellido1, apellido2) VALUES ('$nombre','$apellido1','$apellido2')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscrito correctamente!</h3>
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