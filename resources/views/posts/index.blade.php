<x-layout>
    <div>
        <ul>
            @foreach ($posts as $post)
                <li>
                    {{ $loop->iteration }}. {{ $post->title }}
                </li>
            @endforeach
        </ul>
    </div>
    <a href="{{ route('posts.create') }}" class="btn">Создать пост</a>
</x-layout>
