<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
use App\Models\Alumno;

$alumno= new Alumno();

$alumno->nombre= 'Marcos';
$alumno->save();

return $alumno;


?>
</body>
</html>