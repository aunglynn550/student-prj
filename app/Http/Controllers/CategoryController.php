<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class CategoryController extends Controller
{
    //
    public function index($id)
    {
        $blogs = Blog::where('categories_id',$id)->get();

        if($id==1)
        {
            return view('blog/history',['blogs'=>$blogs]);
        }
       
            return view('blog/ancient',['blogs'=>$blogs]);
    }
}
