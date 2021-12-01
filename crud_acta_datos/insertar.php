<?php
include("con_db.php");

if (isset($_POST['submit'])) {
	if (strlen($_POST['libro']) >= 1 && strlen($_POST['acta']) >= 1 && strlen($_POST['anio']) >= 1 && strlen($_POST['folio']) >= 1) {
        
	    $libro=$_POST['libro'];
        $acta=$_POST['acta'];
        $anio=$_POST['anio'];
        $fecha_registro=$_POST['fecha_registro'];
        $folio=$_POST['folio'];
	    $consulta = "INSERT INTO acta_datos(libro, acta, anio, fecha_registro, folio) VALUES('$libro','$acta','$anio','$fecha_registro','$folio')";
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


