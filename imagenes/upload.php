<?php

include_once '../imagenes/config.php';

//tabla de la BD
$tabla = 'files';

//Directorio donde se guardaran los archivos
$uploadDir = 'uploads';

if (!empty($_FILES['file']['name'])) 
{
    //Asignar esas variables
    $tmpFile = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileSize = $_FILES['file']['size'];

    //Subir archivos al directorio
    $fileName = time().'-'.$_FILES['file']['name'];
    $urlDoc = $uploadDir.'/'.$fileName;

    //Obtener el MIME
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $filecontents = file_get_contents($tmpFile);
    $mimeType = $finfo->buffer($filecontents);

    //Validamos las extensiones validas
    //$extensionesValidas = ['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'];

    //Mover del directorio temporal al nuevo directorio
    move_uploaded_file($tmpFile, $urlDoc);

    $cadena = Connection::connect()
    ->prepare("INSERT INTO $tabla (nombre, url, file, type, size) 
    VALUES (:name, :url, :file, :type, :size)");

    $cadena->bindParam(":name",$fileName, PDO::PARAM_STR);
    $cadena->bindParam(":url", $urlDoc, PDO::PARAM_STR);
    $cadena->bindParam(":file", $tmpFile, PDO::PARAM_STR);
    $cadena->bindParam(":type", $fileType, PDO::PARAM_STR);
    $cadena->bindParam(":size", $fileSize, PDO::PARAM_STR);

    if ($cadena->execute()) 
    {
        try 
        {
            header('location: index.php');
        } 
        catch (Error $e) 
        {
            echo $e->getMessage();
        }
    }

    $cadena = null;
}