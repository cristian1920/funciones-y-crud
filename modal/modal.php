                               <?php
                                         include("../conexion/conexion.php");
                                         $nombre=$_POST['nombre'];
                                         $apellido=$_POST['apellido'];
                                         $cedula=$_POST['cedula'];
                                         $edad=$_POST['edad'];
                                         $correo=$_POST['correo'];
                                         $sexo=$_POST['sexo'];
                                         $nuevo=mysqli_query($con,"select cedula from Personas where cedula='$cedula'");
                                         if(mysqli_num_rows($nuevo)>0)
                                        {
                                         echo "
                                        <p class='avisos'>La cedula ya esta registrada</p>
                                        <p class='avisos'><a href='../site/crud.php' class='clase1'><img src='../modal/iconos/c.png' /></a></p>
                                         ";
                                         }
                                        // ------------ Si no esta registrado el e-mail continua el script
                                       else
                                         {
                                         $sql = "INSERT INTO Personas (cedula, nombre, apellido, edad, sexo, correo) VALUES ($cedula, '$nombre', '$apellido',$edad,'$sexo','$correo')";
                                         if (mysqli_query($con, $sql)) {
                                            echo "se ingresaron los datos ";
                                             include("../site/crud.php");
                                           } else {
                                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                                           }
                                       }
                                       mysqli_close($con);
 
              
                               ?>