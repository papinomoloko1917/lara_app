@extends('layouts.app')

<div>
    <h3>Создание нового поста</h3>
    <form style="display: flex; flex-direction: column; gap: 8px; max-width: 300px;" action="{{ route('posts.store') }}"
        method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title">Название статьи</label>
        <input id="title" type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <span style="color: red">{{ $message }}</span>
        @enderror

        <label for="text">Текст статьи</label>
        <textarea id="text" type="text" name="text">{{ old('text') }}</textarea>
        @error('text')
            <span style="color: red">{{ $message }}</span>
        @enderror

        <label for="user_id">Идентификатор пользователя</label>
        <input type="number" name="user_id" id="user_id">

        <label for="file">Приложенный файл</label>
        <input type="file" name="file" id="file">
        @error('file')
            <span style="color: red">{{ $message }}</span>
        @enderror

        <button style="cursor: pointer" type="submit">Создать</button>
    </form>
</div>
