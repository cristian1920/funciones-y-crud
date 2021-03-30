<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Resultado Get</title>
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
                    <p style="color:skyblue;"> Resultado metodo POST</p>
                </b></h1>
        </div>
        <div class="col-md-4"> </div>
    </div>
    
    <div class="col-md-2"> </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Resultado Metodo POST</div>
            <div class="panel-body">
                <?php
                echo"Datos enviados por metodo Post:<br>";
                if ($_POST['edad'] >= 18) {
                
                    $cond = "si";
                }else{
                  
                    $cond="no";
                }
                echo "<br>";
                echo '<table class="table table-striped table-bordered table-hover" >';
echo '<thead class="thead-dark">';
echo '<tr>';
echo '<th id="Nombre">Nombre</th>';
echo '<th id="apellido">Apellido</th>';
echo '<th id="edad">Edad</th>';
echo '<th id="condi">Mayor de edad</th>';               
echo '<th id="departamento">departamento</th>';
                echo '<th id="ciudad">Ciudad</th>';
                echo '<th id="correo">Correo</th>';  
                echo '<th id="clave">Clave</th>';  
                echo '<th id="sexo">Sexo</th>';  
echo '</tr>';
echo '</thead>';
echo '<tbody>';

echo '<tr>';
echo  '<td>'.$_POST['nombre'].'</td>';
echo  '<td>'.$_POST['apellido'].'</td>';
echo  '<td>'.$_POST['edad'].'</td>';
echo  '<td>'.$cond.'</td>';
echo  '<td>'.$_POST['departamento'].'</td>';
                echo  '<td>'.$_POST['ciudad'].'</td>';
                echo  '<td>'.$_POST['correo'].'</td>';
                echo  '<td>'.$_POST['clave'].'</td>';
                echo  '<td>'.$_POST['optradio'].'</td>';
echo '</tr>';

echo '</tbody>';
                echo"</table>";
                ?>

            </div>
        </div>
         <button type="submit" class="btn btn-primary"><a href="metodopost.php" style="text-decoration:none;color:white;(otros)">Regresar</button>
    </div> 
    
     
    <div class="col-md-2"></div>
       
          
</body>
</html>