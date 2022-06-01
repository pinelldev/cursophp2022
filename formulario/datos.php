<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Password</th>
                <th>Valor</th>
                <th>Documento</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $_POST['nombre']; ?></td>
                <td><?php echo $_POST['password']; ?></td>
                <td><?php echo $_POST['pasatiempos[1]']; ?></td>
                <td><?php echo $_POST['doc']; ?></td>
            </tr>
            
        </tbody>
    </table>
</body>
</html>