<div class="card card-side bg-base-100 shadow-sm">
    <figure class="w-40 shrink-0">
        <img src="{{ $book->image }}" alt="{{ $book->title }}" class="w-full h-full object-cover" />
    </figure>

    <div class="card-body min-w-0">
        <h2 class="card-title">{{ $book->title }}</h2>

        <p class="line-clamp-3">
            {{ $book->description }}
        </p>

        <div class="card-actions justify-end">
            <button class="btn btn-primary">Читать</button>
        </div>
    </div>
</div>
