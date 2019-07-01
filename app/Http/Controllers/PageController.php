<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Product;
use App\Slide;

class PageController extends Controller
{
    public function getIndex()
    {
        $slides = Slide::all();
        $products = Product::orderBy('updated_at', 'desc')->limit(8)->get();
        return view('page.home', compact('products','slides'));
    }
    public function getShop($id)
    {

        $categories = Category::all();
        $allProductount = Product::count();
        if ($id != 'tat-ca') {
            $category = Category::where('id', $id)->first();
            $products = Product::where('category_id', $id)->orderBy('updated_at', 'desc')->paginate(20);
            return view('page.shop', compact('categories', 'category', 'products'));
        }
        else{
            $products = Product::orderBy('updated_at', 'desc')->paginate(21);
            return view('page.shop', compact('categories', 'products'));
        }
        
    }
    public function getProduct($id)
    {
        $product = Product::where('id', $id)->first();
        return view('page.product', compact('product'));
    }
    public function getCart()
    {
        return view('page.cart');
    }
    public function getCheckout()
    {
        return view('page.checkout');
    }
    public function getComplete()
    {
        return view('page.complete');
    }
    public function getAbout()
    {
        return view('page.about');
    }
    public function getContact()
    {
        return view('page.contact');
    }
}
