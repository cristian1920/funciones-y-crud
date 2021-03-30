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
                    <p style="color:skyblue;"> Trabajo en clase</p>
                </b></h1>
        </div>
        <div class="col-md-4"> </div>
    </div>
  
<?php
    if(isset($_GET['eli'])=='eliminar'){
        $id2=$_GET['id2'];
        $check=mysqli_query($con,"select * from Personas where id='$id2'");
        if(mysqli_num_rows($check)==0){
            echo '
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                               <strong>!Alerta¡</strong> No se encontraron datos.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
';
            
        }else{
            $delete=mysqli_query($con,"delete from Personas where id='$id2';");
            if($delete){
                
                   echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Persona eliminada correctamente.</div>;';
              }else{
                   echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar la persona seleccionada.</div>;';
                  } 
               }
            }

            

            ?>
              <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Registrar</button>
            <!-- registrar -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Ingresar Datos</h4>
                        </div>
                        <div class="modal-body">
                            <form action="..\modal\modal.php" method="post">
                                <div class="form-group row">
                                    <label for="nombre" class="col-sm-2 col-form-label">nombre</label>
                                    <div class="col-sm-5">
                                        <input type="Text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                                    <div class="col-sm-5">
                                        <input type="Text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cedula" class="col-sm-2 col-form-label">Cedula</label>
                                    <div class="col-sm-5">
                                        <input type="Text" class="form-control" id="cedula" name="cedula" placeholder="cedula" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label" for="inlineFormCustomSelectPref">Edad</label>
                                    <select class="custom-select my-20" id="edad" name="edad" required>
                                        <option selected>Edad...</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                                    <div class="col-sm-5">
                                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                                    </div>
                                </div>
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-2 pt-0"></legend>
                                        <div class="col-sm-10">
                                            <div class="radio">
                                                <label><input type="radio" name="sexo" value="hombre" checked required>Hombre</label>
                                            </div>
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label><input type="radio" name="sexo" value="mujer" required>Mujer</label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="enviar" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-2"> </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Ejercicio 5 - Base de datos</div>
            <div class="panel-body">
                <form action="crud.php" method="post">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Cedula</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Acciones</th>
                                
                            </tr>
                        </thead>

                        <?php
                         
                            $sql = mysqli_query($con, "select * from personas Order BY id ASC") ;
                            if(mysqli_num_rows($sql)==0){
                              echo '<tr><td colspan="8">no hay datos.</td></tr>';
                              }else{
                              while($row=mysqli_fetch_assoc($sql)){
                              echo '
                              <tr>

                                  <td>'.$row['cedula'].'</td>
                                  <td>'.$row['nombre'].'</td>
                                  <td>'.$row['apellido'].'</td>
                                  <td>'.$row['edad'].'</td>
                                  <td>'.$row['sexo'].'</td>
                                  <td>'.$row['correo'].'</td>
                                  <td> 
                                 
                                 <a href="../modal/editar.php?ide='.$row['id'].'"title="editar" class="btn btn-primary btn-sm"><img src="../modal/iconos/e.png" /></a>
                                 <a href="../site/crud.php?eli=eliminar&id2='.$row['id'].'"title="eliminar" onclick="return confirm(\'Esta seguro de eliminar el usuario '.$row['nombre'].'?\' )" class="btn btn-primary btn-sm"><img src="../modal/iconos/b.png" /></a>
                                    </td>
                                                          </tr>
                                                          ';
                                                          }
                                                          }
                        ?>
                    </table>
                </form>
            </div>
        </div>

        <button type="submit" class="btn btn-primary"><a href="../index.php" style="text-decoration:none;color:white;(otros)">Regresar</button>
    </div>
    <div class="col-md-2"></div>
</body>

</html>