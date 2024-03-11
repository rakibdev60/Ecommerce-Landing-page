<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Forms\ProductForm;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        $products = $product->all();
        // dd($products[1]->attributes);

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(ProductForm::class, [
            'method' => 'POST',
            'url' => route('admin.products.store')
        ]);

        return view('admin.product.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->only('name', 'price', 'product_type', 'attributes');

        $data['image'] = $request->file('image')->store('photos');

        $products = Product::create($data);

       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(ProductForm::class, [
            'method' => 'PUT',
            'url' => route('admin.pages.update', $product->id),
            'model' => $product
        ]);

        return view('admin.product.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }
}
