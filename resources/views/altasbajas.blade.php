@extends('layouts/main')

@section('contenido')
    <div class="conatiner mt-4">
        <div class="row">
            <div class="col">
                <a href="/create" class="btn btn-primary"><i class="fas fa-plus"></i> nuevo</a>
                <div class="mt-3"></div>
                <table class="table table-sm" id="table">
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Categoria</th>
                            <th>Cantidad</th>
                            <th>Descripción</th>
                            <th>Fecha</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <td>{{$item->tipo}}</td>
                            <td>{{$item->categoria}}</td>
                            <td>{{$item->cantidad}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>{{$item->fecha}}</td>
                            <td>
                                <a href="{{route('edit', $item->id)}}" class="btn btn-warning"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td>
                                <a href="{{route('show', $item->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection