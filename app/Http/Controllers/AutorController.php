<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use app\Http\Requests\NuevoAutorRequest;


class AutorController extends Controller
{
    public function getAll(){

        $autores = Autor::where('estado', 1)->get([

            'id','nombre','estado'
        ]);

        return $autores;

    }


    public function getById(int $id){
        
        $autor = Autor::where('id', $id)->first([

            'id','nombre','estado'
        ]);

        return $autor;

    }

    public function create(Request $request){

        $request -> validate;

        $autor = new Autor([
            'nombre' => $request->nombre,
            'estado' => $request->estado
        ]);
        $autor->save();
                        
        return response()->json($autor, 200);
    }
    
    public function destroy(int $id){

        $autor = Autor::where('id', $id)->first();
        
        $autor->estado = 2;

        $autor->save();
                        
        return response()->json($autor, 200);
    }

    public function update(Request $request, int $id){

        $autor = Autor::where('id', $id)->first();

        $autor->nombre = $request -> nombre;
        $autor->estado = $request -> estado;

        $autor->save();

        return response()->json($autor, 200);

    }
    





}





    

