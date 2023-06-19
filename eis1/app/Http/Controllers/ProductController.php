<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('p_id', 'ASC')->get();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'p_code' => 'required',
            'p_name' => 'required',        
            'p_ctg' => 'required',
            'p_price' => 'required',
            'p_sellPrice' => 'required',
            'p_supplierID' => 'required'        
        ]);

        $product = new Product();
        $product->p_code = $request->input('p_code'); 
        $product->p_name = $request->input('p_name');
        $product->p_image = $request->input('p_iamge');
        $product->p_ctg = $request->input('p_ctg');
        $product->p_desc = $request->input('p_desc');
        $product->p_price = $request->input('p_price');
        $product->p_sellPrice = $request->input('p_sellPrice');
        $product->p_stock = $request->input('p_stock');
        $product->p_supplierID = $request->input('p_supplierID');
        $product->p_status = $request->input('p_status');
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        $product = Product::findOrFail($id);

        return view ('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view ('product.edit', compact('product'));
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
        $request->validate([
            'p_code' => 'required',
            'p_name' => 'required',
            'p_ctg' => 'required',
            'p_price' => 'required',
            'p_sellPrice' => 'required',
            'p_supplierID' => 'required'        
        ]);

        $product = Product::find($id);
        $product->p_code = $request->input('p_code'); 
        $product->p_name = $request->input('p_name');
        $product->p_ctg = $request->input('p_ctg');
        $product->p_price = $request->input('p_price');
        $product->p_sellPrice = $request->input('p_sellPrice');
        $product->p_supplierID = $request->input('p_supplierID');
        $product->p_status = $request->input('p_status');
        $product->save();

        return redirect()->route('product.index')->with('success', 'Product added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->input('supid');
    
        $product = Supplier::find($id);
    
        if ($product) {
            $product->delete();
            return redirect()->route('product.index')->with('success', 'Product deleted successfully');
        } else {
            return redirect()->route('product.index')->with('error', 'Product not found');
        }
    }
}
