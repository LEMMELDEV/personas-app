<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agregar Pais</title>
</head>

<body>

    <div class="container">
        <h1>Agregar Pais</h1>
        <form method="POST" action="{{ route('paises.store') }}">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Code</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id">
                <div id="idHelp" class="form-text">Codigo de Pais</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Pais</label>
                <input type="text" required class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Municipio name.">
            </div>
            <label for="capital">Capital:</label>
            <select class="form-select" id="capital" name="code" required>
                <option selected disabled value="">Choose one...</option>
                @foreach ($paises as $pais)
                <option value="{{ $pais->pais_codi }}">{{ $pais->pais_codi }}</option>
                @endforeach
            </select>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('paises.index') }}" class="btn btn-warning">Cancel</a>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>