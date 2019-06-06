<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\material;

class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $material = new Material;
        return view('materiales.create', ["material" => $material]);

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
         $options=[
            'nombre'=>$request->nombre,
            'descripcion'=>$request->descripcion,
            'cantidad'=>$request->cantidad,
            'precio_unitario'=>$request->precio_unitario,
            'es_hilo'=>$request->es_hilo,
        ];

        if(material::create($options)){
            return redirect('/');
        }else{
            return view('materiales.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $material =Material::find($id);
        return view("materiales.edit",["material" => $material]);
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
        //
        $material = Material::find($id);
        $material->nombre = $request->nombre;
        $material->descripcion = $request->descripcion;
        $material->cantidad = $request->cantidad;
        $material->precio_unitario = $request->precio_unitario;
        $material->es_hilo = $request->es_hilo;

        if($material->save()){
            return redirect('/');
        }else{
            return view("materiales.edit", ["material" => $material]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
