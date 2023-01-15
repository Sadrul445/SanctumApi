<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        //create
        $product = $request -> validate(
            [
                'name' =>'required',
                'desc' =>'required',
                'price'=>'required',
            ]
            );
        return Product::create($request-> all());
    }

    public function show(Request $request,$id)
    {
        return Product::find($id);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product -> update($request->all());
        return $product; 
    }

    public function destroy(Request $request,$id)
    {
        return Product::destroy($id);
    }
    public function search(Request $request , $name)
    {
        return Product::where('name','like', '%' . $name .'%')-> get();

    }
}
