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
        $request->validate([
            'category_id'   => 'required',
            'name'          => 'required|unique:products,name',
            'code'          => 'required|unique:products,code',
            'regular_price' => 'required',
            'selling_price' => 'required',
            'stock_amount'  => 'required',
            'description'   => 'required',
            'image'         => 'required|image',
        ]);
        $this->product = Product::newProduct($request);
        return redirect('/manage-product')->with('message', 'Create Product Successfully');
    }
    public function manage(){
        $this->products = Product::all();
        return view('admin.product.manage',['products' => $this->products]);
    }

    public function detailProduct($id)
    {
        $this->product = Product::find($id);
        return view('admin.product.detail',['product' => $this->product]);
    }

    public function edit($id){
        $this->product = Product::find($id);
        $this->categories = Category::all();
        return view('admin.product.edit',[
            'product' => $this->product,
            'categories' => $this->categories
        ]);
    }

    public function update(Request $request, $id){
        Product::updateProduct($request, $id);
        return redirect('/manage-product')->with('message', 'Update Product Successfully');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        return redirect('/manage-product')->with('message', 'Delete Product Successfully');
    }


}
