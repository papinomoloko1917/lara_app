@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<div>
    <ul style="list-style: none; padding: 0; margin: 0">
        @forelse ($posts as $post)
            <li style="display: flex; align-items: center; gap: 10px; padding: 5px;">
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                <a href="{{ route('posts.edit', $post) }}"><button style="cursor: pointer">Редактировать</button></a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="cursor: pointer">Удалить</button>
                </form>
            </li>

        @empty
            <li>Пусто</li>
        @endforelse
    </ul>
</div>

<a href="{{ route('posts.create') }}">Создать статью</a>
