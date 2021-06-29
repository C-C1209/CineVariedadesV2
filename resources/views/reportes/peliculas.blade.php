<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Peliculas</title>

    <style>

        h1{

            text-align:center;

            color:red;

        }

        thead{

            background-color:#ffff;

            width:100%;

            height:50px;

        }

    </style>

</head>

<body>

    <h1>REPORTE DE PELICULAS DEL {{ $fecha}}</h1>

    <table>

    <thead>

              <tr>

                <th>Nombre</th>

                <th>Idioma</th>

                <th>Subtitulos</th>

                <th>Director</th>

                <th>Fecha</th>

                <th>Descripcion</th>

               

                <th></th>

              </tr>

    </thead>

     <tbody>

     @foreach($datos as $p)

                <tr>              

                 

                  <td>{{$p->Nombre}}</td>

                  <td>{{$p->Idioma}}</td>

                  <td>{{$p->Subtitulos}}</td>

                  <td>{{$p->Director}}</td>

                  <td>{{$p->Fecha}}</td>

                  <td>{{$p->Descripcion}}</td>

                  <td>

    @endforeach

     </tbody>

    </table>

</body>

</html>