         <?php
   
  include("../conexion/conexion.php");
                                         $ide = mysqli_real_escape_string($con,(strip_tags($_GET["ide"]))); 
                                         $cedula=$_POST['cedula']; 
                                         $query = "SELECT id,nombre FROM Personas";
                                         $sql = "delete from Personas where id=$ide;";
                                         if (mysqli_query($con, $sql)) {
                                           
                                             header("location:crud.php");
                                           } else {
                                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                                           }
                                       mysqli_close($con);
 if(isset($_POST['eliminar'])){
      $nombre= mysqli_real_escape_string($con,(strip_tags($_row['nombre']))); 
         $sql2 = mysqli_query($con,"delete from personas WHERE id ='$ide'");
                     if ($sql2) {
                     echo "se elimino el usuario"$nombre;                         
                         header("location:editar.php?ide=".$ide);
                      } else {
                echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
                                           }
                           }
        ?>

        ?>
                                      
                            

                                                          <!-- Modal -->
                                                          