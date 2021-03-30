<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Metodo Post</title>
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
                    <p style="color:skyblue;"> Primer Ejercicio</p>
                </b></h1>
        </div>
        <div class="col-md-4"> </div>
    </div>
    <div class="col-md-2"> </div>
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">Formulario</div>
            <div class="panel-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Constraseña</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Direcion</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Calle principal">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Direccion 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, Estudio, o piso">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Ciudad</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Estado</label>
                            <select id="inputState" class="form-control">
                                <option selected>Escoger...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Edad</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Hombre
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Mujer
                        </label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
         <button type="submit" class="btn btn-primary"><a href="index.php" style="text-decoration:none;color:white;(otros)">Regresar</button>
    </div>
    <div class="col-md-2"></div>
</body>

</html>