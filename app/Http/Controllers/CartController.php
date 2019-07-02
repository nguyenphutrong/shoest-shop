<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Mail;

class CartController extends Controller
{
    public function getAddCart($id)
    {
        $item = Product::find($id);
        Cart::add(['id' => $id, 'name' =>  $item->name, 'qty' => 1, 'price' => $item->price, 'weight' => 0, 'options' => ['pic' => $item->pic]]);
        return redirect('gio-hang');
    }
    public function getRemoveCart($id)
    {
        Cart::remove($id);
        return back();
    }

    public function getUpdateCart(Request $req){
        Cart::update($req->rowId,$req->qty);
    }

    public function postComplete(Request $req){
        $data['info'] = $req->all();
        $data['cart'] = Cart::content();
        $data['carttotal'] = Cart::total();
        $email = $req->email;
        $name = $req->name;
        Mail::send('page.mail', $data, function ($message) use($email,$name) {
            $message->from(config('shop.email'), 'Cửa hàng Shoest');
            $message->to($email, $name);
            $message->cc(config('shop.email'), 'Cửa hàng Shoest');
            $message->subject('Xác nhận hóa đơn mua hàng Shoest');
        });

        Cart::store();
        Cart::destroy();
        return redirect('complete');
    }    
}
