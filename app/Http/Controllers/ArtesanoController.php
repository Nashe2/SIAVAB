<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artesano;
use App\persona;
use Illuminate\Support\Facades\DB;

class ArtesanoController extends Controller
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
        $artesano = new Artesano;
        $personas = DB::table('personas')->get();
        return view('artesano.create', ["artesano" => $artesano],['personas' => $personas]);
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
            'categoria'=>$request->categoria,
            'discapacidad'=>$request->discapacidad,
            'persona_id'=>$request->persona
        ];

        if(artesano::create($options)){
            return redirect('/');
        }else{
            return view('artesano.create');
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
        $artesano =Artesano::find($id);
        return view("artesano.edit",["artesano" => $artesano]);
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
        $artesano = Artesano::find($id);
        $artesano->categoria = $request->categoria;
        $artesano->discapacidad = $request->discapacidad;
        $artesano->color_id= $request->colorid;


        if($artesano->save()){
            return redirect('/');
        }else{
            return view("artesano.edit", ["artesano" => $artesano]);
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
