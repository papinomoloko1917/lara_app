<x-layout>
    <div>
        <h1 class="text-3xl font-semibold">{{ $post->title }}</h1>
        <a class="underline underline-offset-3" href="{{ route('posts.index') }}">Ко всем статьям</a>
    </div>
</x-layout>
