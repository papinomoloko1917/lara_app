<x-layout>
    <div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
            @forelse ($books as $book)
                <x-books.card-book :book="$book" />
            @empty
                <div class="col-span-full flex justify-center items-center py-16">
                    <p class="text-center text-base-content/70">Книг еще нет</p>
                </div>
            @endforelse
        </div>
        <div class="flex justify-center mt-8">
            {{ $books->links('pagination.books') }}
        </div>
    </div>
</x-layout>
