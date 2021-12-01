<?php
include("con_db.php");

if (isset($_POST['submit'])) {
	if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido1']) >= 1 && strlen($_POST['apellido2'])>= 1 && strlen($_POST['nacionalidad'])>= 1 && strlen($_POST['edad'])) {
	    $nombre = trim($_POST['nombre']);
	    $apellido1 = trim($_POST['apellido1']);
	    $apellido2 = trim($_POST['apellido2']);
        $nacionalidad = trim($_POST['nacionalidad']);
        $edad = trim($_POST['edad']);
	    $consulta = "INSERT INTO padre(nombre, apellido1, apellido2, nacionalidad, edad) VALUES ('$nombre','$apellido1','$apellido2','$nacionalidad','$edad')";
	    $resultado = mysqli_query($con,$consulta);
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


