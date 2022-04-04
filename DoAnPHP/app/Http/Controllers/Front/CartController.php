<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    //sử dụng thư viện Cart có sẵn
    public function add($id){
        $product=Product::findOrFail($id);
    //truyen cac thong so
        Cart:: add ([ 'id' => $id , 'name' => $product->name , 'qty' => 1 , 'price' => $product->discount ?? $product->price ,
         'options' => [ 'images' => $product->productImages, ],
        ]);

        //add vao CartItem
        return back();
    }


    public function index(){

        //sử dụng content để lấy dữ liệu
        $carts=Cart::content();//du lieu san pham tu gio hang
        $total=Cart::total();
        $subtotal=Cart::subtotal();
        return view('front.shop.cart',compact('carts','total','subtotal'));
    }

    public function delete($rowId){
        //remove để xóa 1 dòng
        Cart::remove($rowId);
        return back();
    }

    public function deleteAll(){
        //destroy để xóa tất cả
        Cart::destroy();
        return back();
    }
}
