
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Document</title>
</head>
<body>
    <center>
<?php
//Accede a las variable
    $nombre = $_POST['name'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    //Imprime cada uno de los datos
    echo "Hola $nombre";
    echo "<br>";
    echo "<hr>";
    echo "Tienes $edad años";
    echo "<br>";
    echo "<hr>";
    echo "Tu numeo de Teléfono es $telefono";
    echo "<hr>";
    echo "<a href='../html/greetingForm.html'>Regresar</a>";


?>
</center>
</body>
</html>