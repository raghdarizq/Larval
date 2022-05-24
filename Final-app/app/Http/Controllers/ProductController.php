<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Product::all();
		return view('Product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data=Product::all();
		return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'id' => 'required|max:8',
            'productname' => 'required|max:200',
            'NoTasnifAlmuntajat' => 'required|max:10',
            'Productquantity' => 'required|max:180',
            'SupplierNo' => 'required|max:10',
            'ProductsStatus' => 'required|max:180',
            'ImgPro' => 'required|max:200',
            'storeNo' => 'required|max:180',
        ]);
        $model = product::create($request->all());
        $imageName = time().'.'.$request->Picture_pro->extension();  
        $request->Picture_pro->move(public_path('images'), $imageName);
        $model->Picture_pro = $imageName;
        $model->save();
		return redirect('/product');
        return back()->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Product::find($id);
        return view('Product.show',compact('data'));		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Product::find($id);
        return view('Product.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=Product::find($id);
        $data->update($request->all());
        return redirect('/Product');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $data=Product::find($id);
		$data->delete();
		return redirect('/Product');
    }
}
