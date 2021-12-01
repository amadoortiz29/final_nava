<?php 
    include("con_db.php");
    $sql="SELECT *  FROM abuelo";
    $query=mysqli_query($con,$sql);
    //$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <title>Formulario abuelo</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="estilos.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../estilo_form.css">	
</head>
<body>
<header>
		<div class="wrapp">
			<div class="logo">
				<a href="#"><img src="img/logo4.png" alt="FalconMasters"></a>
			</div>
			<nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
					<li><a href="padre.php">Padre</a></li>
					<li><a href="registrado.php">Registrado</a></li>
					<li><a href="registro_civil.php">Registro civil</a></li>
					<li><a href="abuelo.php">Abuelo</a></li>
					<li><a href="acta_datos.php">Acta datos</a></li>					
                </ul>
			</nav>
		</div>
		
		
	</header>
	<form method="POST">
		<section class="main">
			<div class="row">
				<div class="col">
					<div class="wrapp">
						<div class="mensaje">
							<h1>Registro de abuelos! </h1>
							
						</div>
						<div class="articulo">
							<article>
							<TD>Ingrese el nombre </TD>
							<TD> <INPUT TYPE="text" NAME="nombre" SIZE=50 MAXLENGTH=50> <br><br>
							<TD>Ingrese el apellido paterno :</TD>
							<TD> <INPUT TYPE="text" NAME="apellido1" SIZE=50 MAXLENGTH=50> <br><br>
							<TD>Ingrese el apellido  materno:</TD>
							<TD> <INPUT TYPE="text" NAME="apellido2" SIZE=50 MAXLENGTH=50> <br><br>
							<input type="submit" class="btn btn-primary" name="submit">	
							<a href="/proyecto_hernandez_registrocivil/index.php">Inicio</a>
						</div> 
					</div>
				</div>
				<div class="col">
					<div class="container mt-5">
						<div class="row"> 
							<div class="col-md-3">
								
							</div>
							<div class="col-md-8">
								<table class="table" >
									<thead class="table-success table-striped" >
										<tr>
											<th>id</th>
											<th>nombre</th>
											<th>apellido1</th>
											<th>apellido2</th>
											<th></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php while($row=mysqli_fetch_array($query)){ ?>
										
											<tr>
												<th><?php  echo $row['id']?></th>
												<th><?php  echo $row['nombre']?></th>
												<th><?php  echo $row['apellido1']?></th>
												<th><?php  echo $row['apellido2']?></th> 
												<th><a href="crud_abuelo/actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
												<th><a href="crud_abuelo/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th> 
												                                     
											</tr>
										<?php  }	?>
									</tbody>
								</table>
							</div>
						</div>  
					</div>
				</div>
			</div>
		</section>
	
		<footer>
			<div class="wrapp">
				<p> No lista 20</p>
				<p> // SUBMÓDULO 2
					Desarrolla aplicaciones Web con conexión a bases de datos</p>
				<p>https://github.com/elinava-web </p>
			</div>
		</footer>
	</form>
	
	<?php include("crud_abuelo/insertar.php"); ?>
</body>
</html>