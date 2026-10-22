<ul>
    @foreach ($products as $product)
        <li style="display: flex; align-items: center; gap: 8px; padding: 5px;">
            <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
            <a href="{{ route('product.edit', $product->id) }}"><button>Редактировать</button></a>
            <form action="{{ route('product.delete', $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" style="color: red">Удалить</button>
            </form>
        </li>
    @endforeach
</ul>

<a href="/product/create">Создать продукт</a>
