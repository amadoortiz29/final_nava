<?php 
    include("conexion.php");
    //$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM registro_civil WHERE id='$id'";
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
                <input type="text" class="form-control mb-3" name="entidad" placeholder="entidad" value="<?php echo $row['entidad']  ?>">
                <input type="text" class="form-control mb-3" name="municipio" placeholder="municipio" value="<?php echo $row['municipio']  ?>">
                <input type="text" class="form-control mb-3" name="juzgado" placeholder="juzgado" value="<?php echo $row['juzgado']  ?>">
                <input type="text" class="form-control mb-3" name="juez" placeholder="juez" value="<?php echo $row['juez']  ?>">
                
                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                <a href="/proyecto_hernandez_registrocivil/index.php">Inicio</a>
            </form>
                    
        </div>
    </body>
</html>
