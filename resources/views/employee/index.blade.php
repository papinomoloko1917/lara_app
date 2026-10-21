@if (session('success'))
    <span>{{ session('success') }}</span>
@endif
<table>
    <tr>
        <th> № п.п. </th>
        <th> Имя </th>
        <th> Фамилия </th>
        <th> Возраст </th>
        <th> Зарплата </th>
        <th> Редактирвоать </th>
        <th> Удалить </th>
    </tr>
    @foreach ($employees as $employee)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->surname }}</td>
            <td>{{ $employee->age }}</td>
            <td>{{ $employee->salary }}</td>
            <td>
                <a href="/employee/{{ $employee->id }}/edit"><button>Изм.</button></a>
            </td>
            <td>
                <form action="/employee/{{ $employee->id }}/delete" method="POST">
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

<a href="/employees/create">Добавить сотрудника</a>
