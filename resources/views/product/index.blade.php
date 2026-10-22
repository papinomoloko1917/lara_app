<ul>
    @foreach ($products as $product)
        <li style="display: flex; align-items: center; gap: 8px; padding: 5px;">
            <a href="/product/{{ $product->id }}/show">{{ $product->name }}</a>
            <a href="/product/{{ $product->id }}/edit"><button>Редактировать</button></a>
            <form action="/product/{{ $product->id }}/delete" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" style="color: red">Удалить</button>
            </form>
        </li>
    @endforeach
</ul>

<a href="/product/create">Создать продукт</a>
