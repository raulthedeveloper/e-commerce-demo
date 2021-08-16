<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = Product::all();
        return view('products/index')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'name'=> 'required',
            'price'=> 'required',
            'description'=> 'required',
            'small'=> 'required',
            'medium'=> 'required',
            'large'=> 'required',
            'image'=> 'required'
        ]);
            $product = new Product;
            $product-> name = $request->input('name');
            $product-> image = $request->input('image');
            $product-> price = $request->input('price');
        $product-> description = $request->input('description');
            $product-> small = $request->input('small');
            $product-> medium = $request->input('medium');
            $product-> large = $request->input('large');

            $product->save();

            return redirect('/product')->with('success','Product Added');


//        return view('inc/messages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::find($product);
        return view('products/show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
//        Allow to edit products
        $editPost = Product::find($product);
        return view('products/edit')->with('product',$editPost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'name'=> 'required',
            'price'=> 'required',
            'description'=> 'required',
            'small'=> 'required',
            'medium'=> 'required',
            'large'=> 'required',
            'image'=> 'required'
        ]);
        $product = Product::find($id);
        $product-> name = $request->input('name');
        $product-> image = $request->input('image');
        $product-> price = $request->input('price');
        $product-> description = $request->input('description');
        $product-> small = $request->input('small');
        $product-> medium = $request->input('medium');
        $product-> large = $request->input('large');

        $product->save();

        return redirect('/product')->with('success','Product Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Product::find($id);
        $post->delete();

        return redirect('/product')->with('success','Product Removed');

    }
}
