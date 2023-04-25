@extends('layouts/main')   

@section('contenido')
<div class="container-fluid">
  <div class="row">
    <div class="col">
             {{-- sucess --}}
             <div class="card mt-4">
              <div class="card-body">
                  <div class="alert alert-success" role="alert">
                      Total de Ganancias: ${{$sumapagos}}
                  </div>
              </div>
            </div>
        
            {{-- danger --}}
            <div class="card mt-4">
              <div class="card-body">
                  <div class="alert alert-danger" role="alert">
                      Total de Gastos: ${{$sumagastos}}
                    </div>
              </div>
            </div>
    </div>
  </div>
</div>
@endsection

