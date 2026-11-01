<x-layout>
    <div>
        @auth
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
        @endauth
        @guest
            <div class="flex justify-center">
                <div role="alert" class="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="stroke-current text-info h-6 w-6 shrink-0">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Авторизируйтесь чтобы просматривать книги</span>
                </div>
            </div>
        @endguest
    </div>
</x-layout>
