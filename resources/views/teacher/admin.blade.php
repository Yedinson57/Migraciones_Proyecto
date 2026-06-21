<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('teacher.admin') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br><br>
        <label>
            Email:
            <br>
            <input type="email" name="email">
        </label>
        <br><br>

        <label for="area_id">Area:</label>
        <br>

        <select name="area_id" id="area_id" class="form-control">
            <option value="">Seleccione una area</option>

            @foreach ($areas as $area)
                <option value="{{ $area->id }}">
                    {{ $area->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="area_id">Centro de formacion:</label>
        <br>

        <select name="training_center_id">

            <option value="">Seleccione un centro de formación</option>
            @foreach ($training_centers as $training)
                <option value="{{ $training->id }}">
                    {{ $training->name }}
                </option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Enviar Formulario</button>
    </form>
</body>

</html>