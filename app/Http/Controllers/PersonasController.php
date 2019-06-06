<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\persona;

class PersonasController extends Controller
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
        //Para que pueda mostrar la vista cuando también se hayan modificado los datos
        $persona = new Persona;
        return view('personas.create', ["persona" => $persona]);
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
            'paterno'=>$request->paterno,
            'materno'=>$request->materno,
            'nacimiento'=>$request->nacimiento,
            'telefono'=>$request->telefono,
            'rfc'=>$request->rfc,
            'sexo'=>$request->sexo,
        ];

        if(persona::create($options)){
            return redirect('/');
        }else{
            return view('personas.create');
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
        //hace la comunicacion a la base de datos y la vista que lo despliega
        $persona =Persona::find($id);
        return view("personas.edit",["persona" => $persona]);
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
        $persona = Persona::find($id);
        $persona->nombre = $request->nombre;
        $persona->paterno = $request->paterno;
        $persona->materno = $request->materno;
        $persona->nacimiento = $request->nacimiento;
        $persona->telefono = $request->telefono;
        $persona->rfc = $request->rfc;
        $persona->sexo = $request->sexo;

        if($persona->save()){
            return redirect('/');
        }else{
            return view("personas.edit", ["persona" => $persona]);
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
