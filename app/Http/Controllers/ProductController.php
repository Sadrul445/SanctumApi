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
        $request->validate(
            [
                'name'=>'required',
                'slug'=>'required',
                'price'=>'required',
            ]
            );
            return Product::create($request->all());
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

        // dd($request->price);
        // Product::where('id',$id)->update('price',$request->price);

        // return Product::where('id',$id)->update(
        //     [
        //         'name' => $request->name,
        //         'slug' => $request->slug,
        //         'description' => $request->description,
        //         'price' => $request->price
        //     ]
        //     ) ? true : false;
    }
    public function destroy(Request $request,$id)
    {
        return Product::destroy($id);
    }
    public function search(Request $request , $name)
    {
        return Product::where('name','like','%'.$name.'%')->get();
    }
}
