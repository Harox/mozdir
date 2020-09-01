<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Bitfumes\Multiauth\Model\Admin;
use Bitfumes\Multiauth\Model\Role;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    use AuthorizesRequests;

    public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
        $this->adminModel = config('multiauth.models.admin');
    }

    public function index()
    {
        // $products = Product::all();
        // return view('multiauth::admin.product.index')->with('products', $products);

        $admin_id = auth()->user()->id;
        $user = Admin::find($admin_id);
        $user = Admin::find($admin_id);

        return view('multiauth::admin.product.index')->with('products', $user->products);

    }

    public function create()
    {
        return view('multiauth::admin.product.create');
    }


    public function store(Request $request)
    {
        
        $nameFile = 'noImage.jpg';

        if ($request->hasFile('image')) {
            $genName = uniqid(date('HisYmd'));
            $extension = $request->image->extension();
            $nameFile = "{$genName}.{$extension}";
            $upload = $request->image->storeAs('public/images', $nameFile);
            if ( !$upload )
            return redirect()->back()->with('error', 'Upload Error')->withInput();
        }

        $product = new Product;
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->regular_price = $request->input('regular_price');
        $product->sale_price = $request->input('sale_price');
        $product->stock = $request->input('stock');
        $product->stock_status = $request->input('stock_status');
        $product->Weight = $request->input('Weight');
        $product->length = $request->input('length');
        $product->width = $request->input('width');
        $product->height = $request->input('height');
        $product->purchase_notes = $request->input('purchase_notes');
        $product->min_order = $request->input('min_order');
        $product->keyword = $request->input('keyword');
        $product->image = $nameFile;
        $product->admin_id = auth()->user()->id;
        $product->save();

        return redirect('/admin/product')->with('success', 'Product Created');

    }


    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
