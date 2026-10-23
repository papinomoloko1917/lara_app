<div>
    <h3>Создание нового поста</h3>
    <form style="display: flex; flex-direction: column; gap: 8px; max-width: 300px;" action="{{ route('posts.store') }}"
        method="POST">
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

        <button style="cursor: pointer" type="submit">Создать</button>
    </form>
</div>
