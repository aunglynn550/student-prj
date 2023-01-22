<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogsController extends Controller
{
    //
    public function index()
    {
        $histories = Blog::where('categories_id',1)->paginate(6);
        $ancients = Blog::where('categories_id',2)->paginate(6);
        return view('blog/index',['histories'=>$histories,'ancients'=>$ancients]);
    }
}
