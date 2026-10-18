<?php

namespace App\Http\Controllers;

use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {

        dump(Category::find(1)->posts()->count());

        // return view('home');
    }
}
