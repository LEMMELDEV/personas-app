<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit</title>
</head>

<body>
    <div class="container">
        <h1>Editar Municipio</h1>
        <form method="POST" action="{{ route('municipios.update', ['municipio' => $municipio->muni_codi]) }}">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="codigo" class="form-label">ID</label>
                <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id"
                    disabled="disabled" value="{{ $municipio->muni_codi }}">
                <div id="codigoHelp" class="form-text">Municipio Id.</div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nombre Departamento</label>
                <input type="text" required class="form-control" id="name" placeholder="Departamento name"
                    name="name" value="{{ $municipio->muni_nomb }}">
            </div>

            <label for="departamento">Departamento:</label>
            <select class="form-select" id="departamento" name="code" required>
                <option selected disabled value="">Choose one...</option>
                @foreach ($departamentos as $departamento)
                @if ($departamento->depa_codi == $municipio->depa_codi)
                <option selected value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
                @else
                <option value="{{ $departamento->depa_codi }}">{{ $departamento->depa_nomb }}</option>
                @endif
                @endforeach
            </select>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('municipios.index') }}" class="btn btn-warning">Cancel</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>