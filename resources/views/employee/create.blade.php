<h1>Создание сотрудника</h1>
<form action="" method="POST">
    <label for="name">Имя</label>
    @error('name')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <input type="text" name="name" value="{{ old('name') }}">
    <label for="surname">Фамилия</label>
    @error('surname')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <input type="text" name="surname" value="{{ old('surname') }}">
    <label for="age">Возраст</label>
    @error('age')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <input type="number" name="age" value="{{ old('age') }}">
    <label for="salary">Зарплата</label>
    @error('salary')
        <span style="color: red">{{ $message }}</span>
    @enderror
    <input type="number" name="salary" value="{{ old('salary') }}">
    <button type="submit">Создать</button>
</form>

<a href="/employees">Ко всем сотрудникам</a>
