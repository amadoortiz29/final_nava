<?php
include("con_db.php");

if (isset($_POST['submit'])) {
	if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido1']) >= 1 && strlen($_POST['apellido2'])>= 1 && strlen($_POST['fecha_nac'])>= 1 && strlen($_POST['lugar_nac'])>= 1 && strlen($_POST['genero'])>= 1 && strlen($_POST['presentado'])) {
        $nombre=$_POST['nombre'];
        $apellido1=$_POST['apellido1'];
        $apellido2=$_POST['apellido2'];
        $fecha_nac['fecha_nac'];
        $lugar_nac=$_POST['lugar_nac'];
        $genero=$_POST['genero'];
        $presentado=$_POST['presentado'];
	    $consulta = "INSERT INTO registrado (nombre, apellido1, apellido2, fecha_nac, lugar_nac, genero, presentado) VALUES ('$nombre','$apellido1','$apellido2','$fecha_nac','$lugar_nac','$genero','$presentado')";
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


