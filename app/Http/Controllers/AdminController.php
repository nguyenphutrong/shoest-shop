<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use \App\Http\Controllers\OrderController;
use App\ShoppingCart;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
        $category = Category::all()->count();
        $product = Product::all()->count();
        $cart = ShoppingCart::getOrdersCount();
        $revenue = ShoppingCart::getOrdersTotal();
        return view('admin.home', compact('category', 'product', 'cart', 'revenue'));
    }
    public function approval()
    {
        return view('admin.approval');
    }

    public function getchangePassword()
    {
        return view('auth.passwords.changepassword');
    }
    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Mật khẩu của bạn không giống với mật khẩu vừa nhập. Vui lòng kiểm tra lại.");
        }
        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "Mật khẩu mới không thể trùng với mật khẩu cũ. Vui lòng chọn mật khẩu khác.");
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = Hash::make($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("thongbao", "Đổi mật khẩu thành công!");
    }
}
