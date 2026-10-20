<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function form(Request $request)
    {
        $data = $request->all();

        return view('post.form', ['data' => $data]);

    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->text = $request->input('text');

        $post->save();

        return 'post saved';

    }
}
