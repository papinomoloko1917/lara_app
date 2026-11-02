<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $request->user()
            ->posts()
            ->create($data);

        return redirect()->route('posts.index')->with('successStorePost', 'Новый пост успешно добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);

        return view('posts.update', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $post = Post::findOrFail($id);

        $data = $request->validated();

        $post->update($data);

        return redirect()->route('posts.index')->with('updateSuccess', 'Обновление успешно');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Gate::authorize('delete-post', $post);

        $post->destroy($post->id);

        return redirect()->route('posts.index')->with('destroy', 'Успешное удаление');
    }

    public function indexUser(int $id)
    {
        $user = User::findOrFail($id);

        $posts = $user->posts()->get();

        return view('posts.user.index', compact('posts'));
    }
}
