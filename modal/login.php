
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trabajo De clase IUMAFIS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <div class="row">
            <div class="col-md-4"> </div>
            <div class="col-md-4">
                <h1><b>
                        <p style="color:skyblue;"> Trabajo en clase</p>
                    </b></h1>
            </div>
            <div class="col-md-4"> </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
           <form action="..\modal\registro.php" method="post">
            <div class="panel panel-default">
                <div class="panel-heading"><img src="../imagenes/8.png" /> Login Parcial</div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control"  name='correo'>
                    </div>
                </div>             
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <div class="col-sm-5">
                    <input type="password" class="form-control" id="exampleInputPassword1" name='clave'>
                    </div>
                </div>
                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="enviar" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="row">
                <div class="col-md-4">
                <button type="submit" class="btn btn-primary"><a href="../index.php" style="text-decoration:none;color:white;(otros)">INICIO</button></div>
                <div class="col-md-4">
                    <img src="../imagenes/unnamed.png">
                </div>
                <div class="col-md-4">*</div>
            </div>
            </form>
        </div>
    </header>