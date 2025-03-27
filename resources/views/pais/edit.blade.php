<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar País</title>
</head>

<body>
    <div class="container">
        <h1>Editar País</h1>
        <form method="POST" action="{{ route('paises.update', ['pais' => $pais->pais_codi]) }}">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="id" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" name="id" disabled="disabled" value="{{ $pais->pais_codi }}">
                <div class="form-text">Código del país.</div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nombre del País</label>
                <input type="text" required class="form-control" id="name" name="name" value="{{ $pais->pais_nomb }}">
            </div>

            <div class="mb-3">
                <label for="capital" class="form-label">Capital</label>
                <input type="text" required class="form-control" id="capital" name="capital" value="{{ $pais->pais_capi }}">
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('paises.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>