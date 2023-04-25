@include('sweetalert::alert')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/datatable.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatable5.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{$titulo}}</title>
</head>
<body>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col">
                @include('shared/menu')
                @include('sweetalert::alert')
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                @yield('contenido')
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