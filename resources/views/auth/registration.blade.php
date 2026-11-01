<x-clear-layout>
    <div class="w-full max-w-md">
        <div class="flex items-center mb-6 justify-between">
            <h3 class="text-xl">Регистрация</h3>

            <a class="underline underline-offset-3 hover:no-underline" href="{{ route('home') }}">
                На главную
            </a>
        </div>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <fieldset class="fieldset">
                <legend class="fieldset-legend">Имя</legend>
                <input name="name" type="text" class="input w-full" placeholder="Ваше имя..."
                    value="{{ old('name') }}" />
                @error('name')
                    <p class="label text-red-500">{{ $message }}</p>
                @enderror

                <legend class="fieldset-legend">Email</legend>
                <input name="email" type="email" class="input w-full" placeholder="Ваш почтовый ящик..."
                    value="{{ old('email') }}" />
                @error('email')
                    <p class="label text-red-500">{{ $message }}</p>
                @enderror

                <legend class="fieldset-legend">Пароль</legend>
                <input name="password" type="password" class="input w-full" placeholder="Придумайте пароль" />
                @error('password')
                    <p class="label text-red-500">{{ $message }}</p>
                @enderror

                <legend class="fieldset-legend">Подтверждение пароля</legend>
                <input name="password_confirmation" type="password" class="input w-full"
                    placeholder="Подтвердите пароль" />
            </fieldset>

            <div class="flex items-center justify-between mt-4">
                <button type="submit" class="btn btn-neutral">Зарегистрироваться</button>
                <a class="underline underline-offset-3 hover:no-underline" href="{{ route('login') }}">Уже есть
                    аккаунт</a>
            </div>
        </form>
    </div>
</x-clear-layout>
