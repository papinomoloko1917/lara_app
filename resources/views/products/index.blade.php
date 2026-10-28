<div>
    <h1>Все продукты:</h1>
    @foreach ($products as $product)
        <span>{{ $product->name }}</span><img src="{{ $product->image }}" alt="{{ $product->name }}">
        <p>{{ $product->description }}</p>
    @endforeach
</div>
