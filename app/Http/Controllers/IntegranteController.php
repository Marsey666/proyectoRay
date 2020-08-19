<?php

namespace App\Http\Controllers;

use App\integrante;
use Illuminate\Http\Request;

class IntegranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $integrantes = Integrante::get();
        echo json_encode($integrantes);
    }
    public function filter(){
        $data = array();
        return view ("integrante/filter",$data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $integrante = new Integrante();
        $integrante->name = $request->input('name');
        $integrante->lastname = $request->input('lastname');
        $integrante->carrera = $request->input('carrera');
        $integrante->save();
        echo json_encode($integrante);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\integrante  $integrante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, integrante $integrante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\integrante  $integrante
     * @return \Illuminate\Http\Response
     */
    public function destroy(integrante $integrante)
    {
        //
    }
}
