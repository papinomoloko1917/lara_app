<x-layout>
    <div class="hero bg-base-200">
        <div class="hero-content flex-col lg:flex-row">
            <img alt="{{ $book->title }}" src="{{ $book->image }}" class="max-w-sm rounded-lg shadow-2xl" />
            <div>
                <h1 class="text-5xl font-bold">{{ $book->title }}</h1>
                <p class="py-6">
                    {{ $book->description }}
                </p>
                <div class="flex gap-4">
                    <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                        В корзину</button>
                    <a href="{{ route('books.index') }}">
                        <button class="btn btn-neutral">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-library-big preview-icon">
                                <rect width="8" height="18" x="3" y="3" rx="1" />
                                <path d="M7 3v18" />
                                <path
                                    d="M20.4 18.9c.2.5-.1 1.1-.6 1.3l-1.9.7c-.5.2-1.1-.1-1.3-.6L11.1 5.1c-.2-.5.1-1.1.6-1.3l1.9-.7c.5-.2 1.1.1 1.3.6Z" />
                            </svg>Ко всем книгам</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
