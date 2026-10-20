<form action="/post" method="POST">
    @csrf
    <input name="title">
    <input name="slug">
    <textarea name="text" ></textarea>
    <input type="submit">
</form>
