<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\cities;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        //
        $cities = cities::where('status', 1)->get([

            'state_id', 'names', 'status'
        ]);

        return $cities;
    }

    public function getById(int $id){
        
        $cities = cities::where('id', $id)->first([

            'state_id', 'names', 'status'
        ]);

        return $cities;

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

        $cities = new cities([
            'state_id' => $request->state_id,
            'names' => $request->names,
            'status' => $request->status
        ]);
        $cities->save();
                        
        return response()->json($cities, 200);
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
    public function update(Request $request, int $id)
    {
        $cities = cities::where('id', $id)->first();
        
        $cities->state_id = $request -> state_id;
        $cities->names = $request -> names;
        $cities->status = $request -> status;

        $cities->save();

        return response()->json($cities, 200);
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
        $cities = cities::where('id', $id)->first();
        
        $cities->status = 2;

        $cities->save();
                        
        return response()->json($cities, 200);
    }

    
}
