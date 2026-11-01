<x-clear-layout>
    <div class="w-full max-w-md">
        <div class="flex items-center mb-6 justify-between">
            <h3 class="text-xl">Авторизация</h3>

            <a class="underline underline-offset-3 hover:no-underline" href="{{ route('home') }}">
                На главную
            </a>
        </div>
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Email</legend>
                <input name="email" type="email" class="input w-full" placeholder="Ваш почтовый ящик..."
                    autocomplete="email" required value="{{ old('email') }}" />
                @error('email')
                    <p class="label text-red-500">{{ $message }}</p>
                @enderror

                <legend class="fieldset-legend">Пароль</legend>
                <input name="password" type="password" class="input w-full" placeholder="Введите пароль" required
                    autocomplete="current-password" />
                @error('password')
                    <p class="label text-red-500">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex items-center justify-between mt-4">
                <button type="submit" class="btn btn-neutral">Вход</button>
                <a class="underline underline-offset-3 hover:no-underline" href="{{ route('registration') }}">Нет
                    аккаунта?
                    Регистрация</a>
            </div>
        </form>
    </div>
</x-clear-layout>
