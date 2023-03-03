<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\EmployerBlog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = EmployerBlog::with(['categories'])->latest()->paginate(10);

//        return $blogs;

        return view('blog',compact('blogs'));
    }
}
