<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $categories;
    private $products;
    public function index(){
        $this->categories = Category::all();
        $this->products = Product::orderBy('id', 'desc')->get();
        return view('website.home.home',[
            'categories' => $this->categories,
            'products' => $this->products,
        ]);
    }
    public function about(){
        return view('website.about.about');
    }
    public function contact(){
        return view('website.contact.contact');
    }
    public function booking(){
        return view('website.book.book');
    }
}
