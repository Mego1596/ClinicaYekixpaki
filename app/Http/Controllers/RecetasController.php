<?php

namespace App\Http\Controllers;

use App\Recetas;
use App\Events;
use App\Paciente;
use Illuminate\Http\Request;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $recetas = Recetas::paginate();
        return view('receta.index',compact('recetas','id')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
        $evento   = Events::find($id);
        $paciente = Paciente::find($evento->paciente_id);
        json_decode($paciente);
        return view('receta.create',compact('id','paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Recetas::create($request->all());
        return redirect()->route('receta.index',$request->events_id)->with('info','Receta Guardada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function show(Recetas $recetas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function edit($id,Recetas $recetas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recetas $recetas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recetas  $recetas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recetas $recetas)
    {
        //
    }
}