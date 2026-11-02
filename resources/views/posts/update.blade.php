<x-layout>
    <div class="w-full max-w-md">
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Название поста</legend>
                <input name="title" type="text" class="input" value="{{ old('title', $post->title) }}" />
                @error('title')
                    <p class="label text-red-500">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn">Редактировать</button>
            </fieldset>
        </form>
    </div>
</x-layout>
