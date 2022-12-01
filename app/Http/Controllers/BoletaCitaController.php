<?php

namespace App\Http\Controllers;

use App\Models\Boleta_Cita;
use Illuminate\Http\Request;

class BoletaCitaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index(){
        $boleta_cita = Boleta_Cita::all() ;
        return view('boletas.index',compact("boleta_cita"));
    }
    public function store(Request $request){
        $boleta_citas = new Boleta_Cita();
        $boleta_citas->id_cita = $request->id_cita;
        $boleta_citas->cantidad_pagada = $request->cantidad_pagada;
        $boleta_citas->descripcion = $request-> descripcion;
        $boleta_citas->tipo_de_pago = $request-> tipo_de_pago;
        $boleta_citas->save();
        return redirect()->route('boletas.index');
    }
    public function destroy(Boleta_Cita $boleta_citas){
        $boleta_citas->delete();
        return redirect()->route('boletas.index');
    }
    public function edit(Boleta_Cita $boleta_citas){
        return view("boletas.edit",compact("boleta_citas"));
    }
    public function update(Boleta_Cita $boleta_citas,Request $request){
        
        $boleta_citas->id_cita = $request->id_cita;
        $boleta_citas->cantidad_pagada = $request->cantidad_pagada;
        $boleta_citas->descripcion = $request-> descripcion;
        $boleta_citas->tipo_de_pago = $request-> tipo_de_pago;
        $boleta_citas->save();
        return redirect()->route('boletas.index');
    }
   
}
