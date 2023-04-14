<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $categories;
    private $category;
    private $product;
    private $products;
    public function index(){
        $this->categories = Category::all();
        return view('admin.product.index',['categories' => $this->categories]);
    }

    public function create(Request $request){
        $this->product = Product::newProduct($request);
        return redirect('/manage-product')->with('message', 'Create Product Successfully');
    }
    public function manage(){
        $this->products = Product::all();
        return view('admin.product.manage',['products' => $this->products]);
    }

    public function edit($id){
        $this->product = Product::find($id);
        $this->categories = Category::all();
        return view('admin.product.edit',[
            'product' => $this->product,
            'categories' => $this->categories
        ]);
    }
}
