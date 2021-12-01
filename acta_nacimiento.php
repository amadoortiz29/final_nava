<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>acta denacimiento</title>
    
	<link rel="stylesheet" href="estilos.css">
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
					<li><a href="empleado.php">Empleado</a></li>
					<li><a href="crud_padre.php">Padre</a></li>
					<li><a href="crud_registrado.php">Registrado</a></li>
					<li><a href="crud_registro_civil.php">Registro civil</a></li>
					<li><a href="abuelo.php">Abuelo</a></li>
					<li><a href="crud_acta_datos.php">Acta datos</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Solicita tu acta de nacimiento a qui! </h1>
			</div>

			<div class="articulo">
				<article>
				Acta de nacimiento:foranea <INPUT TYPE="RADIO" NAME="clase" VALUE="A">
                    local <INPUT TYPE="RADIO" NAME="clase" VALUE="B"> <br><br>

					Genero:hombre <INPUT TYPE="RADIO" NAME="clase" VALUE="A">
                    mujer <INPUT TYPE="RADIO" NAME="clase" VALUE="B"> <br><br>
					
				<TD>Ingrese su nombre completo:</TD>
                  <TD> <INPUT TYPE="text" NAME="nombre" SIZE=18 MAXLENGTH=18> <br><br

					<TD>Ingrese su CURP:</TD>
                  <TD> <INPUT TYPE="text" NAME="nombre" SIZE=18 MAXLENGTH=18> <br><br>

				  Año de nac:
                  <INPUT TYPE="text" NAME="edad" SIZE=8 MAXLENGTH=8> <br><br>
				   Nombre del padre:
                  <INPUT TYPE="text" NAME="dni" SIZE=8 MAXLENGTH=8></TD> <br><br>

				  Nombre del madre:
                  <INPUT TYPE="text" NAME="dni" SIZE=8 MAXLENGTH=8></TD> <br><br>

				  <TD>Ciudad de nacimiento</TD>
                  <TD> <SELECT NAME="OPCION">
                 <OPTION>Juarez
            	 <OPTION>Parral
                 <OPTION>Chihuahua
				 <OPTION> otra <br>

				 </SELECT>Escoja una opción</TD> <br><br>
				
			en caso de no aparecer su ciudad de origen escribela a qui:
                  <INPUT TYPE="text" NAME="edad" SIZE=8 MAXLENGTH=8> <br><br>

				  <TD>Estado  de nacimiento</TD>
                  <TD> <SELECT NAME="OPCION">
                 <OPTION>Baja California Sur
            	 <OPTION>Aguascalientes
                 <OPTION>Chihuahua
				 <OPTION>DF <br>
                 <OPTION>Oaxaca
            	 <OPTION>Veracruz
                 <OPTION>Sonora
				 <OPTION> otra<br><br>
				 </SELECT>Escoja una opción</TD> <br><br>
				 otra:
                  <INPUT TYPE="text" NAME="dni" SIZE=8 MAXLENGTH=8></TD> <br><br>
				</article>
			</div>

			<aside>
				<div class="widget">
					<h3>Informacion de interes</h3>
					<ul>
					<li><a href="#">Quieres casarte</a></li>
						<li><a href="#">Actas de nacimiento disponibles para ti</a></li>
						<li><a href="#">Citas </a></li>
						<li><a href="#">Informacionde contacto</a></li>
						<li><a href="#">direccion</a></li>
					</ul>
				</div>
			</aside>
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
</body>
</html>