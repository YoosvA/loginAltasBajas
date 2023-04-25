<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatable5.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{$titulo}}</title>
</head>
<body style="background-image: url('img/pichon.png')">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="text-center position-absolute top-50 start-50 translate-middle">
                    <div class="card" style="width: 20rem;" id="border">
                        <div class="card-body">
                            <h4>Login</h4>
                            <img src="{{ asset('img/logo.png')}}" alt="" id="imagen">
                            <form action="{{ route('logear')}}" method="post">
                                @csrf
                                @method('POST')
                                <label for="name" class="mt-3">Usuario</label>
                                <input type="text" class="form-control" name="name">
                                <label for="password" class="mt-3">Password</label>
                                <input type="password" class="form-control" name="password">
                                <button class="btn btn mt-3" id="boton">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{mix('js/app.js')}}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jqueryta.js') }}"></script>
    <script src="{{ asset('js/datatable.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>