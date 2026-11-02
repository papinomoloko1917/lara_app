<x-layout>
    <div>
        <ul>
            @foreach ($posts as $post)
                <li>
                    {{ $post->title }}
                </li>
            @endforeach
        </ul>
    </div>
    <a href="{{ url()->previous(route('posts.index')) }}">Назад</a>
</x-layout>
