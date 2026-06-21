<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('computer.admin')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Numero:
    <br>
    <input type="number" name="number">
</label>
<br><br>

<label>
    Marca:
    <br>
    <input type="text" name="brand">
</label>
<br><br>


<button type="submit">Enviar Formulario</button>
</form>
</body>
</html>