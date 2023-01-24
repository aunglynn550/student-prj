<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SingleController extends Controller
{
    //
    public function index($id)
    {
            $blog= Blog::where('id',$id)->first();
           return view('blog/single',['blog'=>$blog]);
    }
}
