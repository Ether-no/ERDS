<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('agregarU');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //     $tags = explode(',',$request->tags);
    //     //algo general...
    //        //enviamos los datos a la vista
    $datosproducto = request()->all();
    //    if($request->hasFile('Foto')){
    //        $datosproducto['Foto']=$request->file('Foto')->store('uploads','public');
    //    }
    //    if($request->hasFile('fotovista1')){
    //        $datosproducto['fotovista1']=$request->file('fotovista1')->store('uploads','public');
    //    }
    //    if($request->hasFile('fotovista2')){
    //        $datosproducto['fotovista2']=$request->file('fotovista2')->store('uploads','public');
    //    }
    //    if($request->hasFile('fotograbado')){
    //        $datosproducto['fotograbado']=$request->file('fotograbado')->store('uploads','public');
    //    }
    //    $prod = Usuario::create($datosproducto);
    //    $countags = count($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosproducto = request()->except(['_token','_method']);
        $datosproducto = request()->all();
        if($request->hasFile('foto')){
            $datosproducto['foto']=$request->file('foto')->store('uploads','public');
        }
        //    if($request->hasFile('fotovista1')){
        //        $datosproducto['fotovista1']=$request->file('fotovista1')->store('uploads','public');
        //    }
        //    if($request->hasFile('fotovista2')){
        //        $datosproducto['fotovista2']=$request->file('fotovista2')->store('uploads','public');
        //    }
        //    if($request->hasFile('fotograbado')){
        //        $datosproducto['fotograbado']=$request->file('fotograbado')->store('uploads','public');
        //    }
        Usuario::create($datosproducto);
        return redirect()->action('UsuariosController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        $detalles = Usuario::find($usuario);
        return view('consulta', compact('detalles'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
