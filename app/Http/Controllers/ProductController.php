<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
     public function Login()
    {
        return view('login');
    }

   
    public function index()
    {
        return view('index', [
            'products' => Product::get()
        ]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        // dd($request->all());

        //validation
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:1000'

        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);


        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('products.Home')->withSuccess('Product created !!!');


    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('edit', ['product' => $product]);
    }
    //
    public function update(Request $request, $id)
    {
        //validation
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif|max:1000'

        ]);


        $product = Product::where('id', $id)->first();

        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $product->image = $imageName;
        }


        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return back()->withSuccess('Product Updated !!!');


    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }


    public function Homepage()
    {
        return view('Home'); // Matches resources/views/Home.blade.php
    }

    public function hospital()
    {
        return view('hospital');  // Ensure you have a view file named 'hospital.blade.php'
    }
    
   
}
