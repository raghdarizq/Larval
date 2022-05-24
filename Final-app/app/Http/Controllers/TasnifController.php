<?php

namespace App\Http\Controllers;

use App\Models\Tasnif;
use Illuminate\Http\Request;

class TasnifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Tasnif::all();
		return view('Tasnif.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Tasnif::all();
		return view('Tasnif.create');
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
        Tasnif::create($request->all());
		return redirect('/Tasnif');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tasnif  $tasnif
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Tasnif::find($id);
        return view('Tasnif.show',compact('data'));		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tasnif  $tasnif
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Tasnif::find($id);
        return view('Tasnif.edit',compact('data'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tasnif  $tasnif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=Tasnif::find($id);
        $data->update($request->all());
        return redirect('/Tasnif');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tasnif  $tasnif
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $data=Tasnif::find($id);
		$data->delete();
		return redirect('/Tasnif');
    }
}
