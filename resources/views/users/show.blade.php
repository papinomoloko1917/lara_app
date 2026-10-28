<div>
    <form action="{{ route('user.register') }}" method="POST">
        @csrf

        <label for="name">Имя</label>
        <input type="text" name="name" id="name">
        @error('name')
            {{ $message }}
        @enderror

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

        <button type="submit">Создать</button>

    </form>
</div>
