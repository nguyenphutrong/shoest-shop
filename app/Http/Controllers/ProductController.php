<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.product.index', compact('products','categories'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {      
        
        $fileName = time()."_".$request->pic->getClientOriginalName();       

        $product = new Product();
        $product->category_id = $request->cate;
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->pic = $fileName;
        $product->spec = $request->spec;
        $product->desc = $request->desc;
        $product->short_desc = $request->short_desc;
        $product->price = $request->price;             
        $product->save();
        $request->pic->move('uploads',$fileName);

        return back()->with('thongbao','Thêm thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id); 
        $categories = Category::all();
        return view('admin.product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $product =  Product::find($id);
        $product->category_id = $request->cate;
        $product->name = $request->name;
        $product->slug = str_slug($request->name);        
        $product->spec = $request->spec;
        $product->desc = $request->desc;
        $product->short_desc = $request->short_desc;
        $product->price = $request->price;             


        if($request->hasFile('pic')){
            $fileName = time()."_".$request->pic->getClientOriginalName();         
            $request->pic->move('uploads',$fileName);
            unlink("uploads/".$product->pic);
            $product->pic = $fileName;
        }

        $product->save();        

        return back()->with('thongbao','Sửa thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back()->with('thongbao','Xóa thành công!');
    }
}
