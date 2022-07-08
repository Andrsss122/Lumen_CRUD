<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\states;




class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $states = states::where('status', 1)->get([

            'id', 'name', 'status'
        ]);

        return $states;
    }

    
    public function getById(int $id){
        
        $states = states::where('id', $id)->get([

            'id', 'name', 'status'
        ]);

        return $states;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request -> validate;

        $states = new states([
            'name' => $request->name,
            'status' => $request->status,
            
        ]);
        $states->save();
                        
        return response()->json($states, 200);
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
        $states = states::where('id', $id)->first();
        
        $states->name = $request -> name;
        $states->status = $request -> status;

        $states->save();

        return response()->json($states, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //borrado suave

            //
            $states = states::where('id', $id)->first();
        
            $states->status = 2;
    
            $states->save();
                            
            return response()->json($states, 200);
        
    }




}
