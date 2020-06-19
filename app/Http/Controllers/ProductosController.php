<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\ShoppingCart;
use App\Http\Resources\ProductosCollection;
use App\Http\Resources\ProductosControllection;

class ProductosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //rutas rest de colección
    public function index(Request $request)
    {

       // \session::remove('shopping_cart_id');

        //vista para mostrar los productos 
        $producto = Producto::paginate(6);

//*
     //   if ($request=wantsJson($producto)){
      //      return ProductosCollection();
        //}
//*videos: props y v-bind, enviar json desde el servidor

        return view('productos.index',['productos' => $producto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Crear productos
    public function create()
    {
        //
        $producto = new Producto;

        return view('productos.create', ["producto" => $producto]);
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
            'title'=>$request->title,
            'description'=>$request->description,
            'price'=>$request->price,
            'cantidad'=>$request->cantidad,
        ];

        if(Producto::create($options)){
            return redirect('/productos');
        }else{
            return view('productos.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //rutas rest de recursos
    public function show($id)
    {
        //
        $producto =Producto::find($id);
        return view("productos.show",["producto" => $producto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Editar los campos de productos//
    public function edit($id)
    {
        //
        $producto =Producto::find($id);
        return view("productos.edit",["producto" => $producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Actualizar un recurso en específico (producto)
    public function update(Request $request, $id)
    {
        //
        $producto = Producto::find($id);
        $producto->title = $request->title;
        $producto->description = $request->description;
        $producto->price = $request->price;
        $producto->cantidad = $request->cantidad;

        if($producto->save()){
            return redirect('/');
        }else{
            return view("productos.edit", ["producto" => $producto]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Eliminar un producto
    public function destroy($id)
    {
        //
        Producto::destroy($id);
        return redirect('/productos');
    }
}
