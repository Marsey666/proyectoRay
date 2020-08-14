<?php

namespace App\Http\Controllers;

use App\direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $direcciones = Direccion::get();
        json_encode($direcciones);
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $direccion = new Direccion();
        $direccion->name = $request->input('name');
        $direccion->referencia = $request->input('referencia');
        
        $direccion->save();
        echo json_encode($direccion);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, direccion $direccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\direccion  $direccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(direccion $direccion)
    {
        //
    }
}