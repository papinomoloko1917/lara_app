<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function show()
    {
        $categories = Category::with(['posts'])->get();

        foreach ($categories as $category) {
            foreach ($category->posts as $post) {
                debug($post->title);
            }
        }
    }
}
