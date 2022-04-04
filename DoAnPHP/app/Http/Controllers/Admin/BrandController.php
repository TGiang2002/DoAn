<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
    public function index(){
        $listbrand=Brand::all();
        return view('dashboard.brand.index',compact('listbrand'));
    }

    public function create(){
        return view('dashboard.brand.create');
    }

    public function store(Request $request){
        ProductCategory::create($request->all());
        return redirect('/TrangAdmin/brand');
    }

    public function edit($id){
        $brands=ProductCategory::findOrFail($id);
        return view('dashboard.brand.edit',compact('brands'));
    }

    public function update(Request $request, $id){
       $brands=ProductCategory::findOrFail($id);
       $brands->update($request->all());
       $brands->save();
       return redirect('/TrangAdmin/brand');
    }


    public function delete($id){
        $brands=ProductCategory::findOrFail($id);
        $brands->delete();
        return redirect('/TrangAdmin/brand');
    }
}
