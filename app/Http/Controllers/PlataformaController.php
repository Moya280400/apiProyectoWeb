<?php

namespace App\Http\Controllers;

use App\Models\Plataforma;
use Illuminate\Http\Request;

class PlataformaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $Plataforma=Plataforma::all();
            $response=$Plataforma;
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
     * @param  \App\Models\plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $Plataforma=Plataforma::where('id',$id)->first();
            $response=$Plataforma;
            return response()->json($response,200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(),200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function edit(plataforma $plataforma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, plataforma $plataforma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function destroy(plataforma $plataforma)
    {
        //
    }
}
