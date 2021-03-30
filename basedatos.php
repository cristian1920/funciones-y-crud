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
    <div class="col-md-2"> </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Ejercicio 5 - Base de datos</div>
            <div class="panel-body">
                <form action="formpost.php" method="post">
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-2 col-form-label">nombre</label>
                        <div class="col-sm-5">
                            <input type="Text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                        <div class="col-sm-5">
                            <input type="Text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cedula" class="col-sm-2 col-form-label">Cedula</label>
                        <div class="col-sm-5">
                            <input type="Text" class="form-control" id="cedula" name="cedula" placeholder="cedula">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="inlineFormCustomSelectPref">Edad</label>
                        <select class="custom-select my-20" id="edad" name="edad">
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
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0"></legend>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label><input type="radio" name="optradio" value="hombre" checked>Hombre</label>
                                </div>
                                <div class="form-check">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" value="mujer">Mujer</label>
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
        </div>

        <button type="submit" class="btn btn-primary"><a href="index.php" style="text-decoration:none;color:white;(otros)">Regresar</button>
    </div>
    <div class="col-md-2"></div>
</body>

</html>