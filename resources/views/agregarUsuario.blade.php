<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>{{$titulo}}</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="text-center mt-4">Agregar Usuario</h5>
                        <form action="/agregarNuevo" method="post" class="mt-3">
                            @csrf
                            @method('POST')
                            <label for="name" class="mt-2">Nombre Usuario</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                            <label for="password" class="mt-2">Contraseña</label>
                            <input type="text" name="password" id="password" class="form-control" required>
                            
                            <button class="btn btn-primary mt-3">Guardar</button>
                            <a href="/" class="btn btn-info mt-3"><i class="fas fa-long-arrow-left"></i> regresar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>