<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\libro;

class LibroController extends Controller
{
 
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        //
        $libro = libro::where('estado', 1)->get([

            'titulo', 'autor_id', 'estado'
        ]);

        return $libro;
    }

    public function getById(int $id){
        
        $libro = libro::where('id', $id)->get([

            'titulo', 'autor_id', 'estado'
        ]);

        return $libro;

    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $request -> validate;

        $libro = new libro([
            'titulo' => $request->titulo,
            'autor_id' => $request->autor_id,
            'estado' => $request->estado
        ]);
        $libro->save();
                        
        return response()->json($libro, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, int $id)
    {
        $libro = libro::where('id', $id)->first();
        
        $libro->titulo = $request -> titulo;
        $libro->autor_id = $request -> autor_id;
        $libro->estado = $request -> estado;

        $libro->save();

        return response()->json($libro, 200);
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
        $libro = libro::where('id', $id)->first();
        
        $libro->estado = 2;

        $libro->save();
                        
        return response()->json($libro, 200);
    }






}
