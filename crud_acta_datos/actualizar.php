<?php 
    include("conexion.php");
    //$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM acta_datos WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
            <form action="update.php" method="POST">  
                <input type="text" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['id']  ?>">
                <input type="text" class="form-control mb-3" name="libro" placeholder="libro" value="<?php echo $row['libro']  ?>">
                <input type="text" class="form-control mb-3" name="acta" placeholder="acta" value="<?php echo $row['acta']  ?>">
                <input type="text" class="form-control mb-3" name="fecha_registro" placeholder="fecha_registro" value="<?php echo $row['fecha_registro']  ?>">
                <input type="text" class="form-control mb-3" name="folio" placeholder="folio" value="<?php echo $row['folio']  ?>">
                
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                <a href="/proyecto_hernandez_registrocivil/index.php">Inicio</a>
            </form>
                    
        </div>
    </body>
</html>