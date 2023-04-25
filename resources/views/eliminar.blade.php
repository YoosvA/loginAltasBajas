@extends('layouts/main')

@section('contenido')
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            <h5 class="text-center mt-4">¿Deseas eliminar por completo este registro?</h5>
                            <form action="{{route('destroy', $items->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="text-center">
                                    <button class="btn btn-danger mt-3"><i class="fas fa-trash"></i> Eliminar Definitivamente</button>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection