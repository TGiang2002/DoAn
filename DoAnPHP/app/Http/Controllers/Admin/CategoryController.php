<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $listcategory=ProductCategory::all();
        return view('dashboard.category.index',compact('listcategory'));
    }

    public function create(){
        return view('dashboard.category.create');
    }

    public function store(Request $request){
        ProductCategory::create($request->all());
        return redirect('/TrangAdmin/category');
    }

    public function edit($id){
        $categorys=ProductCategory::findOrFail($id);
        return view('dashboard.category.edit',compact('categorys'));
    }

    public function update(Request $request, $id){
       $categorys=ProductCategory::findOrFail($id);
       $categorys->update($request->all());
       $categorys->save();
       return redirect('/TrangAdmin/category');
    }


    public function delete($id){
        $categorys=ProductCategory::findOrFail($id);
        $categorys->delete();
        return redirect('/TrangAdmin/category');
    }
}
