<x-layout>
    <div class="w-full max-w-md">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Название поста</legend>
                <input name="title" type="text" class="input" placeholder="Title..." />
                @error('title')
                    <p class="label text-red-500">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn">Создать</button>
            </fieldset>
        </form>
    </div>
</x-layout>
