<!doctype html>
<?php
session_start();
if ( !isset($_SESSION['login']) || empty($_SESSION['login']) ) {
    header("Location: ./login.html");
}
?>

<head>
    <meta charset="utf-8" />
    <title>Login</title>

    <link rel="stylesheet" href="./recursos/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='./css/ModalHeaderColor.css'/>
    <script src="./js/index.js"></script>
    <link rel="stylesheet" href="./css/estilos.css">

</head>

<body>
    <header>
        <div>
            <h1>Formulario de registro (beca Tamaulipas)</h1>
        </div>
    </header>
    <div class="modal fade" id="modalSalida" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
                <button type="button" class="close" data-dismiss="modal">X</button>
                <h2 class="modal-title text-center">Confirmación</h2>
            </div>
            <div class="modal-body text-center">
                <h3>Desea salir del Sistema?</h3>
            </div>
            <div class="modal-footer">
               <a href="./php/logout.php" class="btn btn-default">Si</a>
               <a href="#" data-dismiss="modal" class="btn btn-default">No</a>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 nombre">
                <Label for="nombres">Nombre(s)</Label>
                <input type="text" class="form-control" placeholder="Ej: Francisco Javier" />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 apellido">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" placeholder="Ej: De la Rosa Gómez" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 correo">
                <label for="correo">Correo electrónico</label>
                <input type="email" class="form-control" placeholder="Ej: ejemplo@ejemplo.com" />
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-8 nacimiento">
                <Label for="nacimiento">Día de nacimiento</Label>
                <input type="date" class="form-control">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 genero">
                <label for="sexo">Genero:</label>
                <select class="form-control" name="" id="option">
                    <option value="1">Femenino</option>
                    <option value="2">Masculino</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 numcontrol">
                <Label for="control">N° de control </Label>
                <input type="text" class="form-control" placeholder="18100165" />
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 correoinstitucional">
                <label for="institucional">Correo institucional</label>
                <input type="text" class="form-control" placeholder="L18100165@nlaredo.tecnm.mx" />
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 numerotelefono">
                <label for="numero">Numero de telefono</label>
                <input type="text" class="form-control" placeholder="8671612074" />
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
</body>