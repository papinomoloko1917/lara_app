<form action="{{ route('product.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Имя</label>
    <input type="text" name="name" value="{{ old('name', $product->name) }}">
    @error('name')
        <span>{{ $message }}</span>
    @enderror

    <label for="price">Цена</label>
    <input type="number" name="price" value="{{ old('price', $product->price) }}">
    @error('price')
        <span>{{ $message }}</span>
    @enderror

    <label for="amount">Вес</label>
    <input type="number" step="0.01" min="0" name="amount" value="{{ old('amount', $product->amount) }}">
    @error('amount')
        <span>{{ $message }}</span>
    @enderror

    <button type="submit">Редактировать</button>
</form>

<a href="/products">Ко всем продуктам</a>
