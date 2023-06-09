<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $products;
    private static $product;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image){
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'product-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function newProduct($request){
        self::$product = new Product();
        self::$product->category_id         = $request->category_id;
        self::$product->name                = $request->name;
        self::$product->code                = $request->code;
        self::$product->regular_price       = $request->regular_price;
        self::$product->selling_price       = $request->selling_price;
        self::$product->stock_amount        = $request->stock_amount;
        self::$product->description         = $request->description;
        self::$product->image               = self::getImageUrl($request->file('image'));
        self::$product->status              = $request->status;
        self::$product->save();
    }

    public static function updateProduct($request, $id){
        self::$product = Product::find($id);
        if($request->file('image')){
            if(file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else{
            self::$imageUrl = self::$product->image;
        }
        self::$product->category_id         = $request->category_id;
        self::$product->name                = $request->name;
        self::$product->code                = $request->code;
        self::$product->regular_price       = $request->regular_price;
        self::$product->selling_price       = $request->selling_price;
        self::$product->stock_amount        = $request->stock_amount;
        self::$product->description         = $request->description;
        self::$product->image               = self::$imageUrl;
        self::$product->status              = $request->status;
        self::$product->save();
    }

    public static function deleteProduct($id){
        self::$product = Product::find($id);
        if(file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
