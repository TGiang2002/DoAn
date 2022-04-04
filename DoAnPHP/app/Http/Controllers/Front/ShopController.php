<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function show($id){
       
        // Brand san pham
        $brands=Brand::all();
        $product=Product::findOrFail($id);

        $relatedProducts=Product::where('brand_id', $product->brand_id)->limit(4)->get();


        return view('front.shop.show',compact('product','relatedProducts','brands'));
    }
     

   
    public function postComment(Request $request){
        ProductComment::create($request->all());
            return redirect()->back();
    }

    public function index(Request $request ){
        
        // Brand san pham
       $brands=Brand::all();
        /////////
        $perPage=$request->show ?? 3 ; //nếu giá trị không xác định(null) mặc định là 3
        $products=Product::paginate($perPage);
            // tim kiem
        if($search=request()->search)
            $products=Product::where('name','like','%'.$search.'%')->paginate(3);
        return view('front.shop.index',compact('products','brands'));
    }

    public function category($categoryName, Request $request){
        // danh muc san pham
        $brands=Brand::all();
        //brand
        $perPage=$request->show ?? 3;
        //lay danh sach san pham theo danh mục
        $products=Brand::where('name',$categoryName)->first()->products->toQuery()->paginate($perPage);

        return view('front.shop.index',compact('products','brands'));
    }


}
