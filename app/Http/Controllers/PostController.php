<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Thumbnail;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::all();

        $category = Category::find(1);

        $postsCategory = $category->posts;

        foreach($postsCategory as $post){
            dump($post->id);
        }

        return view('home')->with('posts', $posts);
    }
}
