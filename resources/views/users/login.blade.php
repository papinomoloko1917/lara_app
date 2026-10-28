<div>
    <h2>Вход в аккаунт</h2>
    <form action="{{ route('user.login') }}" method="POST">
        @csrf

        <label for="name">Email</label>
        <input type="text" name="email" id="email">
        @error('email')
            {{ $message }}
        @enderror

        <label for="password">Пароль</label>
        <input type="text" name="password" id="password">
        @error('password')
            {{ $message }}
        @enderror

        <button type="submit">Вход</button>

    </form>
</div>
