    <div class="navbar bg-base-100 shadow-sm">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg aria-label="Menu" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="-1"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                    <li><a href="{{ route('books.index') }}">Книги</a></li>
                </ul>
            </div>
            <a href="{{ route('home') }}" class="btn btn-ghost text-xl">{{ config('app.name') }}</a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('books.index') }}">Книги</a></li>
            </ul>
        </div>
        @guest
            <div class="navbar-end gap-4">
                <a href="{{ route('login') }}" class="btn btn-neutral">Вход</a>
                <a href="{{ route('registration') }}" class="btn btn-neutral">Регистрация</a>
            </div>
        @endguest
        @auth
            <div class="navbar-end gap-5">
                <a href="" class="btn btn-ghost btn-circle" aria-label="Корзина">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m2.05 2.05 1.099-.028a1 1 0 0 1 1.008.815l2.69 14.347A1 1 0 0 0 7.83 18H18" />
                        <path d="M4.563 5h16.435a1 1 0 0 1 .981 1.204l-1.026 6.226A2 2 0 0 1 18.962 14H6.25" />
                        <circle cx="18" cy="20" r="2" />
                        <circle cx="8" cy="20" r="2" />
                    </svg>
                </a>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar avatar-placeholder">
                        <div class="bg-neutral text-neutral-content w-9 rounded-full">
                            <span>{{ Str::upper(Str::substr(Auth::user()->name, 0, 1)) }}</span>
                        </div>
                    </div>

                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-10 mt-3 w-56 p-2 shadow">
                        <li class="menu-title">
                            <span class="text-base-content/70">{{ auth()->user()->name }}</span>
                            <span class="text-xs text-base-content/50">{{ auth()->user()->email }}</span>
                        </li>
                        <li><a href="">Профиль</a></li>
                        <li><a href="">Настройки</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full text-left cursor-pointer">Выход</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @endauth
    </div>
