<x-layout>
    <x-flash-message />
    <div>
        <ul>
            @foreach ($posts as $post)
                <li class="flex gap-4 pb-1">
                    <a class="hover:underline underline-offset-3"
                        href="{{ route('posts.show', $post) }}">{{ $loop->iteration }}. {{ $post->title }}</a>
                    <a class="btn btn-xs" href="{{ route('posts.edit', $post->id) }}">Редактировать</a>
                    @can('delete-post', $post)
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs">Удалить</button>
                        </form>
                    @endcan
                    @cannot('delete-post', $post)
                        <span class="text-sm">Нет прав</span>
                    @endcannot
                </li>
            @endforeach
        </ul>
    </div>
    <a href="{{ route('posts.create') }}" class="btn">Создать пост</a>
    <a href="{{ route('posts.user.index', Auth::id()) }}" class="btn">Список постов пользователя -
        {{ Auth::user()->name ?? '' }}</a>
</x-layout>
