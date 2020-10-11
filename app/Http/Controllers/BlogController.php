<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        //$blogcontent=Blog::all()->where('status','=','1');
        return view ('blog.blog-page');
    }

}
