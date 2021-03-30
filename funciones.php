<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Arreglos y funciones</title>
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
                    <p style="color:skyblue;"> Arreglos y Funciones</p>
                </b></h1>
        </div>
        <div class="col-md-4"> </div>
    </div>
    <div class="col-md-2"> </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Funciones</div>
            <div class="panel-body">
               <?php
                echo"<strong>Arrays simples </strong><br>";
                echo "<br>";
                $grupoPHP = array('alumno 1'=>"Cristian",'Alumno 2'=>"Brandon",'Alumno 3'=>"Brayan",'Alumno 4'=>"Diego",'Alumno 4'=>"Pablo",'Maestro'=>"Duver");
                echo"<strong>Grupo de lenguaje de programacion :</strong> <br> ";
                foreach($grupoPHP as $Cargo=>$persona )
                {
                echo "El ". $Cargo. " Es ". $persona;
                echo "<br>";
                }
                echo"<br>";
                print_r ($grupoPHP);
                echo"<br><br>";

                $primertrimestre = array('materia 1'=>"Lenguaje de programacion",'materia 2'=>"Emprendimiento 3",'materia 3'=>"Electiva");
                echo"<strong>analisis y desarrollo de software </strong><br>";
                echo"<br>";
                foreach($primertrimestre as $materias => $nombrem )
                {
                echo"La ". $materias. " Es ". $nombrem;
                echo "<br>";
                }
                echo "<br>";
                var_dump($primertrimestre);
                echo"<br><br>";

                $Celulares = array('HUAWEI'=>"P30 pro",'IPHONE'=>"11 PRO",'SAMSUNG'=>"S20 Ultra");
                echo"<strong>Dispositivos Moviles </strong><br>";
                echo"<br>";
                foreach($Celulares as $marca => $referencia )
                {
                echo"Marca ". $marca. " Referencia ". $referencia;
                echo "<br>";
                }
                echo "<br>";
                print_r($Celulares);
                echo "<br><br>";
                echo "<strong>Arrays bidimensionales </strong><br>";
                echo "<br>";
                  echo"<strong>Concesionario</strong><br>";
                echo"<br>";
                $Concesionario= array('Coche 1:'=> array('Marca'=>"Renault",'Nombre'=>"Logan",'Modelo'=>2019),
                                      'Coche 2:'=> array('Marca'=>"Chevrolet",'Nombre'=>"Spark GT",'Modelo'=>2020)

                );
                
                foreach($Concesionario as $coche => $info){
                    echo '<strong>'. $coche. '</strong><br>';
                    foreach($info as $especi){
                        echo $especi.'<br>';
                    }
                     echo"<br>";
                }
                echo"<br>";
                var_dump($Concesionario);
                 echo"<br>";
                 echo "<br>";
                $tiendacelu = array('Celular 1:'=> array('Marca'=>"Iphone",'Referencia'=>"11 Pro",'Precio'=>"5'349,900"),
                                      'Coche 2:'=> array('Marca'=>"Samsung",'Referencia'=>"A70 ",'Precio'=>"1'247,000"),
                                       'Coche 3:'=> array('Marca'=>"Huawei",'Referencia'=>"P40 pro",'Precio'=>"3'459,900")

                );
                  echo"<strong>Tienda de celulares </strong><br>";
                echo"<br>";
                foreach($tiendacelu as $celular => $info){
                    echo '<strong>'. $celular. '</strong><br>';
                    foreach($info as $especi){
                        echo $especi.'<br>';
                    }
                    echo"<br>";
                }
                echo"<br>";
                print_r($tiendacelu);
                 echo"<br>";
              
                
                ?>
                
            </div>
        </div>
         <button type="submit" class="btn btn-primary"><a href="index.php" style="text-decoration:none;color:white;(otros)">Regresar</button>
    </div>
    <div class="col-md-2"></div>
</body>

</html>