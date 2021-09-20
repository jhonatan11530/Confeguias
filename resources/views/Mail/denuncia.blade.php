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
    <p>Datos de la persona que ha realizado una Denuncia</p>
    <ul>
        <li>Nombre Denunciante : {{$mensaje['NombreDenunciante']}}</li>
        <li>Tipo De Documento : {{$mensaje['TipoDocumento']}}</li>
        <li>N° De Documento : {{$mensaje['NumeroDocumento']}}</li>
        <li>N° Tarjeta Profesional : {{$mensaje['NTarjetaProfesional']}}</li>
        <li>Correo Eléctronico : {{$mensaje['Correo']}}</li>
        <li>Telefono : {{$mensaje['Telefono']}}</li>
        <li>Titulo Denuncia : {{$mensaje['TituloQueja']}}</li>
        <li>Descripcion Denuncia : {{$mensaje['DescripcionQueja']}}</li>
        <li>Para poder ver las Imagenes Adjuntos en este correo porfavor Ingrese al sistema para ver las imagenes</li>
    </ul>


    <span>Este Mensaje es automatico por favor no responder </span>
</body>
</html>