<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('apprentice.admin') }}" method="POST" enctype="multipart/form-data">
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

        <label>
            Numero de celular:
            <br>
            <input type="number" name="cell_number">
        </label>
        <br><br>

        <label for="course_id">Cursos:</label>
        <br>

        <select name="course_id" id="course_id" class="form-control">
            <option value="">Seleccione un curso:</option>

            @foreach ($courses as $course)
                <option value="{{ $course->id }}">
                    {{ $course->course_number }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label for="course_id">Computador:</label>
        <br>

        <select name="computer_id">

            <option value="">Seleccione un computador</option>
            @foreach ($computers as $computer)
                <option value="{{ $computer->id }}">
                    {{ $computer->number }}
                </option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Enviar Formulario</button>
    </form>
    
</body>
</html>