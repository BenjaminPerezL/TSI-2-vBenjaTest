<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitasController extends Controller
{
     public function __construct() {
        $this->middleware('auth');
    }
    public function index(){
        $citas = Cita::all() ;
        return view('cita.index',compact("cita"));
    }
    public function store(Request $request){
        $citas = new Cita();
        $citas->rut_cliente = $request->rut_cliente;
        $citas->tipo_servicio = $request->tipo_servicio;
        $citas->fecha = $request->fecha;
        $citas->descripcion = $request-> descripcion;
        $citas->estado = $request-> estado;
        $citas->save();
        return redirect()->route('cita.index');
    }
    public function destroy(Cita $citas){
        $citas->delete();
        return redirect()->route('cita.index');
    }
    public function edit(Cita $citas){
        return view("cita.edit",compact("citas"));
    }
    public function update(Cita $citas,Request $request){
        $citas->rut_cliente = $request->rut_cliente;
        $citas->tipo_servicio = $request->tipo_servicio;
        $citas->fecha = $request->fecha;
        $citas->descripcion = $request-> descripcion;
        $citas->estado = $request-> estado;
        $citas->save();
        return redirect()->route('cita.index');
    }
}
