<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
//hasfile
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        //view all products
//        $products = Product::all();
//        return view('shop.shophome', compact('products'));

        // View all products with pagination
        $products = Product::paginate(9); // Paginate with 9 products per page
        return view('home', compact('products'));



    }
    //ccc
    public function ccc()
    {
        return view('admin.product.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'qty' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Save product details to database
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->qty = $request->input('qty');
        $product->slug = Str::slug($request->input('name'));

        // Save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $image->move('uploads/product/', $filename);
            $product->image = $filename;
        } else {
            $product->image = 'noimage.jpg';
        }

        $product->save();
        return redirect()->back()->with('success', 'Item add successfully.');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products = Product::find($id);
        return view('shop.more', compact('products'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editsave(Request $request,$id)
    {
        //get product by id adn update after edit
        $product = Product::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'qty' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Save product details to database
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->qty = $request->input('qty');
        $product->slug = Str::slug($request->input('name'));

        // Save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $image->move('uploads/product/', $filename);
            $product->image = $filename;
        } else {
            $product->image = 'noimage.jpg';
        }

        $product->update();
        return redirect()->back()->with('success', 'Item add successfully.');


    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'nullable|string',
        'qty' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->description = $request->input('description');
    $product->qty = $request->input('qty');

    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($product->image) {
            Storage::delete('public/' . $product->image);
        }

        $filePath = $request->file('image')->store('products', 'public');
        $product->image = $filePath;
    }

    $product->save();

    return redirect()->back()->with('success', 'Item update successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //delete product from database
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('success', 'Item deleted successfully.');

    }

    //viewproducts
    public function viewproducts()
    {
        //view all products
        $products = Product::all();
        return view('admin.product.show', compact('products'));

    }
}
