<x-layout>
    <div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
            @foreach ($books as $book)
                <x-books.card-book :book="$book" />
            @endforeach
        </div>
    </div>
</x-layout>
