<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        $blogs=Blog::all();
        return view('front.blog.index',compact('blogs'));
    }

    public function detail($id){
        $details=Blog::findOrFail($id);
        return view('front.blog.blog-details',compact('details'));
    }
}
