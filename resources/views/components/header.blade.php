<div>
    @php
        dump($attributes);
    @endphp
    <h1>{{ $message }}</h1>
    <header>
        @foreach ($categories as $category)
            <p>{{ $category->name }}</p>
        @endforeach
    </header>
</div>
