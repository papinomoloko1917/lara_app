<div>
    <h1>HomePage</h1>
    @forelse($posts as $post)
    <ul>
        <li>
            {{$post->title}}
        </li>
    </ul>
    @empty
    <h1>Пусто</h1>
    @endforelse
</div>
