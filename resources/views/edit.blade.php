@extends('layouts/main')

@section('contenido')
    <div class="container-fluid mt-4">
        <h5 class="text-center mt-4">Actualizar</h5>
        <div class="row">
            <div class="col">
                <form action="{{route('update', $items->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <label for="tipo">Tipo</label>
                        <select type="text" name="tipo" id="tipo" class="form-select" value="{{$items->tipo}}" required>
                            <option value="">Selecciona una opcion</option>
                            <option value="pagos">pagos</option>
                            <option value="gastos">gastos</option>
                        </select>
                        <label for="categoria">Categoria</label>
                        <select name="categoria" id="categoria" class="form-select" value="{{$items->categoria}}"required>
                            <option value="" selected>Selecciona una opcion</option>
                                @foreach ($items2 as $item)
                                    <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                                @endforeach
                        </select>
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{$items->cantidad}}" required>
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" value="{{$items->descripcion}}" required></textarea>
                        <label for="fecha">Fecha</label>
                        <input type="date" name="fecha" id="fecha" class="form-control" value="{{$items->fecha}}" required>
                        <button class="btn btn-warning mt-3"><i class="fas fa-pen-square"></i> Actualizar</button>
                        <a href="/altasbajas" class="btn btn-info mt-3"><i class="fas fa-long-arrow-left"></i> regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection