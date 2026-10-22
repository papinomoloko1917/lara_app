<form action="/product/{{ $product->id }}/update" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Имя</label>
    <input type="text" name="name" value="{{ $product->name }}">

    <label for="price">Цена</label>
    <input type="number" name="price" value="{{ $product->price }}">

    <label for="amount">Вес</label>
    <input type="number" name="amount" value="{{ $product->amount }}">

    <button type="submit">Создать</button>
</form>

<a href="/products">Ко всем продуктам</a>
