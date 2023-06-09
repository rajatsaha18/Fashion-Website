<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;
    private $categories;
    public function index(){
        return view('admin.category.index');
    }

    // =============Create New Category using Category Model============
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $this->category = Category::newCategory($request);
        return redirect('/manage-category')->with('message','Create Category Successfully');

    }
    public function manage(){
        $this->categories = Category::all();
        return view('admin.category.manage',['categories' => $this->categories]);
    }

    //=========Edit Category===========
    public function edit($id){
        $this->category = Category::find($id);
        return view('admin.category.edit', ['category' => $this->category]);
    }

    //=========== Update Category using Category Model==============
    public function update(Request $request, $id){
        Category::updateCategory($request, $id);
        return redirect('/manage-category')->with('message', 'Update Category Successfully');

    }

    // ========== Delete Category using Category Model=========
    public function delete($id){
        Category::deleteCategory($id);
        return redirect('/manage-category')->with('message', 'Delete Category Successfully');
    }
}
