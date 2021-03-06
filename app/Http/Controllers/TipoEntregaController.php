<?php

namespace App\Http\Controllers;

use App\Models\Tipo_entrega;
use Illuminate\Http\Request;

class TipoEntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Tipo_entrega=Tipo_entrega::all();
            $response=$Tipo_entrega;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_entrega  $tipo_entrega
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Tipo_entrega=Tipo_entrega::where('id',$id)->first();
            $response=$Tipo_entrega;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_entrega  $tipo_entrega
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_entrega $tipo_entrega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tipo_entrega  $tipo_entrega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo_entrega $tipo_entrega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_entrega  $tipo_entrega
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_entrega $tipo_entrega)
    {
        //
    }
}
