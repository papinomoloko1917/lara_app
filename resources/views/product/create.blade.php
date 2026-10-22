<form action="{{ route('product.store') }}" method="POST">
    @csrf

    <label for="name">Имя</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <span>{{ $message }}</span>
    @enderror

    <label for="price">Цена</label>
    <input type="number" name="price" value="{{ old('price') }}">
    @error('price')
        <span>{{ $message }}</span>
    @enderror

    <label for="amount">Вес</label>
    <input type="number" name="amount" value="{{ old('amount') }}">
    @error('amount')
        <span>{{ $message }}</span>
    @enderror

    <button type="submit">Создать</button>
</form>

<a href="/products">Ко всем продуктам</a>
