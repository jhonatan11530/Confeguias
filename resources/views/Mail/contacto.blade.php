<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Nuevo Mensaje Emitido por la pagina web</p>
    <p>Datos de Contacto</p>
    <ul>
        <li>Nombre : {{$mensaje['Nombre']}}</li>
        <li>Correo : {{$mensaje['Correo']}}</li>
        <li>Telefono : {{$mensaje['Telefono']}}</li>
        <li>Asunto : {{$mensaje['Asunto']}}</li>
        <li>Mensaje : {{$mensaje['Mensaje']}}</li>
    </ul>

    <span>Este Mensaje es automatico por favor no responder </span>
</body>
</html>