<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request){
        $products = DB::table('products')->get();
        $products = Product::all();

        return view('product.index', compact('products'));
    }
    public function add(ProductRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $products = Product::create($params);
            if($products->id){
                Session::flash('success','thêm mới thành công');
                return redirect()->route('index');
            }
        }
        return view('product.add');
    }
    public function edit(ProductRequest $request, $id) {
        $products = Product::find($id);
        
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            $result = Product::where('id', $id)->update($params);
    
            if ($result) {
                Session::flash('success', 'Cập nhật thành công');
                return redirect()->route('edit', ['id' => $id]);
            } else {
                Session::flash('error', 'Cập nhật thất bại');
            }
        }
    
        return view('product.edit', compact('products'));
    }
    public function delete($id){
        Product::where('id', $id)->delete();
        Session::flash('success', 'xóa  thành công');
        return redirect()->route('index');
    }
    
}
