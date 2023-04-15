<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $category;
    private $products;
    private $product;

    public function index(){

        $this->products = Product::orderBy('id', 'desc')->get();
        return view('website.home.home',[

            'products'      => $this->products,
        ]);
    }
    public function category($id){

        $this->category= Category::find($id);
        $this->products = Product::where('category_id', $id)->get();

        return view('website.category.category',[

            'products'      => $this->products,
            'category'      => $this->category
        ]);
    }
    public function detail($id){

        $this->product = Product::find($id);
        return view('website.detail.detail',[

            'product'    => $this->product
        ]);
    }

    public function about(){
        return view('website.about.about');
    }

    public function contact(){
        return view('website.contact.contact');
    }

    public function createContact(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        Contact::newContact($request);
        return redirect()->back()->with('message', 'your message send successfully');
    }

    public function booking(){
        return view('website.book.book');
    }
}
