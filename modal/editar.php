<?php
include("../conexion/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crud base de datos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="row">
        <div class="col-md-4"> </div>
        <div class="col-md-4">
            <h1><b>
                    <p style="color:skyblue;"> Actualizar</p>
                </b></h1>
        </div>
        <div class="col-md-4"> </div>
    </div>

    <?php
    $ide = mysqli_real_escape_string($con,(strip_tags($_GET["ide"]))); 
     $ide2=$ide; 
    $sql=mysqli_query($con,"select * from Personas where id='$ide'"); 
    if(mysqli_num_rows($sql) == 0){
     header("location:..\site\crud.php");
    }else{
      
        $row=mysqli_fetch_assoc($sql);
    }
     if(isset($_POST['guardar'])){
         $cedula= mysqli_real_escape_string($con,(strip_tags($_POST['cedula'])));   
         $nombre= mysqli_real_escape_string($con,(strip_tags($_POST['nombre'])));   
         $apellido= mysqli_real_escape_string($con,(strip_tags($_POST['apellido'])));   
         $edad= mysqli_real_escape_string($con,(strip_tags($_POST['edad'])));   
         $sexo= mysqli_real_escape_string($con,(strip_tags($_POST['sexo']))); 
          $correo= mysqli_real_escape_string($con,(strip_tags($_POST['correo']))); 
         $sql2 = mysqli_query($con,"UPDATE Personas SET cedula='$cedula', nombre = '$nombre', apellido = '$apellido', edad = '$edad', sexo = '$sexo', correo = '$correo' WHERE id ='$ide'");
                     if ($sql2) {
                     echo "se actualizaron los datos ";                         
                         header("location:editar.php?ide=".$ide);
                      } else {
                echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
                                           }
                           }
        ?>
               <div class="col-md-2"> </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Ejercicio 6 - Actualizar datos</div>
            <div class="panel-body">
              <form class="Form-horizontal" action="" method="post">
               <div class="form-group row">
            <label for="cedula" class="col-sm-2 col-form-label">Cedula</label>
            <div class="col-sm-5">
                <input type="Text" class="form-control" id="cedula" name="cedula" value="<?php echo $row['cedula'];?>" placeholder="Cedula" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-5">
                <input type="Text" class="form-control" name="nombre" value="<?php echo $row ['nombre']; ?>" placeholder="Nombre" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
            <div class="col-sm-5">
                <input type="Text" class="form-control" id="apellido" name="apellido" value="<?php echo $row['apellido']?>" placeholder="Apellido" required>
            </div>
        </div>
 
        <div class="form-group row">
            <label for="edad" class="col-sm-2 col-form-label">Edad</label>
            <div class="col-sm-5">
                <input type="Text" class="form-control"  name="edad" value="<?php echo $row['edad'];?>" placeholder="edad" required>
            </div>
        </div>
         <div class="form-group row">
            <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
            <div class="col-sm-5">
                <input type="sexo" class="form-control" id="sexo" name="sexo" value="<?php echo $row['sexo'];?>" placeholder="Sexo" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="correo" class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" name="correo" value="<?php echo $row['correo'];?>" placeholder="Correo" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <input type="submit" name="guardar" class="btn btn-primary" value="guardar">
                <a href="../site/crud.php" class="btn btn-sm btn-success">Volver</a>
            </div>
        </div>
    </form>
  
    </div>
       
        </div>
        <button type="submit" class="btn btn-primary"><a href="../index.php" style="text-decoration:none;color:white;(otros)">INICIO</button>
    </div>
    
    <div class="col-md-2"></div>
</body>

</html>
