<form action="/product/store" method="POST">
    <label for="name">Имя</label>
    <input type="text" name="name" value="{{ old('name') }}">

    <label for="price">Цена</label>
    <input type="number" name="price" value="{{ old('price') }}">

    <label for="amount">Вес</label>
    <input type="number" name="amount" value="{{ old('amount') }}">

    <button type="submit">Создать</button>
</form>

<a href="/products">Ко всем продуктам</a>
