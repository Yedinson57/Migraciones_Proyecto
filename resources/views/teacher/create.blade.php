<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('teacher.admin')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>

<label>
    Email:
    <br>
    <input type="email" name="email">
</label>
<br>

<label for="area_id">Area</label>

    <select name="area_id" id="area_id" class="form-control">
        <option value="">Seleccione el area</option>

        @foreach($areas as $area)
            <option value="{{ $area->id }}">
                {{ $area->name }}
            </option>
        @endforeach
    </select>

<br>
<br><br>


<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>