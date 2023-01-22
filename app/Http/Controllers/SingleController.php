<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SingleController extends Controller
{
    //
    public function index()
    {
           return view('blog/ancient',['blogs'=>$blogs]);
    }
}
