<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $productcategories = ProductCategory::orderBy('ctg_id', 'ASC') ->get();
        return view('product_category.index', compact('productcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('product_category.create');
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
            'category_name' => 'required'
        ]);
        $productCategory = new ProductCategory();
        $productCategory->ctg_desc = $request->input('category_name');
        $productCategory->save();
        return redirect()->route('product_category.index')->with('success', 'Product category added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory): View
    {
        return view('product_category.edit',compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory): RedirectResponse
    {
        $request->validate([
            'category_name' => 'required'
        ]);
        $productCategory->ctg_desc = $request->input('category_name');
        $productCategory->save();
        return redirect()->route('product_category.index')->with('success', 'Product category added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request): RedirectResponse
    {
        $id= $request->input('pcid');

        $productCategory = ProductCategory::find($id);

        $productCategory->delete();

        return redirect()->route ('product_category.index')->with('success', 'Product category deleted successfully.');
    }
}