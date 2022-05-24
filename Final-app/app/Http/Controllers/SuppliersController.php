<?php

namespace App\Http\Controllers;

use App\Models\suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Suppliers::all();
		return view('Suppliers.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Suppliers::all();
		return view('Suppliers.create');
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
        Suppliers::create($request->all());
		return redirect('/Suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Suppliers::find($id);
        return view('Suppliers.show',compact('data'));		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Suppliers::find($id);
        return view('Suppliers.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=Suppliers::find($id);
        $data->update($request->all());
        return redirect('/Suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\suppliers  $suppliers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data=Suppliers::find($id);
		$data->delete();
		return redirect('/Suppliers');
    }
}
