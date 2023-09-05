<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
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
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $products = Product::create($request->all());
        return new ProductResource($products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $products = Product::find($id);
        if(!$products){
            return response()->json([
                'status' => 404,
                'message' => 'Product Not Found'
            ]);
        }
        return new ProductResource($products);
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
        //
        $products = Product::find($id);
        if(!$products){
            return response()->json([
                'status' => 404,
                'message' => 'Product not found'
            ]);
        }
        $products->update($request->all());
        return new ProductResource($products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products = Product::find($id);
        if($products){
            $products->delete();
            return response()->json([
                'status'=>200,
                'message'=> 'xoa ok'
            ]);
        }else{
            return response()->json([
                'status'=>404,
                'message'=> 'not found'
            ]);
        }
    }
}
