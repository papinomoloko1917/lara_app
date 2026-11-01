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
                    <button class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-shopping-cart-plus preview-icon">
                            <path d="M16 5h6" />
                            <path d="M19 2v6" />
                            <path d="m2.05 2.05 1.099-.028a1 1 0 011.008.815l2.69 14.347A1 1 0 007.83 18H18" />
                            <path d="M4.564 5H12" />
                            <path d="M6.25 14h12.712a2 2 0 001.991-1.57l.172-1.041" />
                            <circle cx="18" cy="20" r="2" />
                            <circle cx="8" cy="20" r="2" />
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
