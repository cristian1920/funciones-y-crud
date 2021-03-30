    <?php
                                         include("../conexion/conexion.php");
                                         $correo=$_POST['correo'];
                                         $clave=$_POST['clave'];
                                        $nuevo=mysqli_query($con,"select usuario from registro where usuario='$correo' and clave ='$clave'");
                                         if(mysqli_num_rows($nuevo)>0)
                                        {
                                         echo "
                                        <p class='avisos'>Bienvenido</p>
                                        <p class='avisos'><a href='../modal/login.php' class='clase1'><img src='../modal/iconos/c.png' /></a></p>
                                         ";
                                         }
                                        // ------------ Si no esta registrado el e-mail continua el script
                                       else
                                         {
                                           echo "no se encuentra registrado";
                                       }
                                       mysqli_close($con);
 
              
                            
        
        
        
        ?>