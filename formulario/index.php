<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Formulario con PHP</h2>
            </div>
            <div class="col-12">
                <form action="datos.php" method="post">
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" value="" class="form-control" name="nombre" placeholder="Nombre">
                        <small class="form-text text-muted">Ingrese el nombre aqui</small>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" value="" class="form-control" name="password" placeholder="Password">
                        <small class="form-text text-muted">Ingrese el password aqui</small>
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" value="" class="form-check-input" name="pasatiempos[]">
                        Display value
                        </label>
                    </div>

                    <div>
                        <label for="">Tipo de documento</label>
                        <select class="form-control "name="doc" id="">
                            <option value="">---</option>
                            <option value="cedula">Cedula</option>
                            <option value="pasaporte">Pasaporte</option>
                            <option value="licencia">Licencia de conducir</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Imagen</label>
                        <input type="file" name="fileImagen" id="" class="form-control-file">
                        <small class="form-text text-muted">Seleccione una imagen</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>