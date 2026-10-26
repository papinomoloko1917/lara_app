@extends('layouts.app')

<div>
    <h3>Редактирование поста</h3>
    <form style="display: flex; flex-direction: column; gap: 8px; max-width: 300px;"
        action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Название статьи</label>
        <input id="title" type="text" name="title" value="{{ old('title', $post->title) }}">
        @error('title')
            <span style="color: red">{{ $message }}</span>
        @enderror

        <label for="text">Текст статьи</label>
        <textarea id="text" type="text" name="text">{{ old('text', $post->text) }}</textarea>
        @error('text')
            <span style="color: red">{{ $message }}</span>
        @enderror

        <button style="cursor: pointer" type="submit">Редактировать</button>
    </form>
</div>
