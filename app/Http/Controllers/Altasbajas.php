<?php

namespace App\Http\Controllers;

use App\Models\Altabaja;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Altasbajas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        //funcion auth por defecto-> metodos que necesitan ser autenticados
        $this->middleware(['auth'])->only(['index','altasbajas','create','show','edit']);
    }

    public function index(){

        $titulo = 'principio';

        $sumagastos = DB::table('altasbajas')
            ->where('tipo', '=', 'gastos')
            ->sum('cantidad');

        $sumapagos = DB::table('altasbajas')
            ->where('tipo', '=', 'pagos')
            ->sum('cantidad');

        return view('index', compact('titulo','sumagastos','sumapagos')); 
    }

    public function altasbajas(){
        $titulo = 'Altasbajas';
        $items = Altabaja::all();
        return view('altasbajas', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Agregar';
        $items = Categoria::all();
        return view('create', compact('titulo', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Altabaja();
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->fecha = $request->fecha;
        $item->save();
        return redirect('/altasbajas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = "Eliminar";
        $items = Altabaja::find($id);
        return view("eliminar", compact('items', 'titulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = 'Actualizar';
        $items2 = Categoria::all();
        $items = Altabaja::find($id);
        return view('edit', compact('items', 'titulo','items2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Altabaja::find($id);
        $item->tipo = $request->tipo;
        $item->categoria = $request->categoria;
        $item->cantidad = $request->cantidad;
        $item->descripcion = $request->descripcion;
        $item->fecha = $request->fecha;
        $item->save();
        return redirect('/altasbajas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Altabaja::find($id);
        $item->delete();
        return redirect('/altasbajas');
    }
}
