<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Document' }}</title>
</head>

<body>
    <x-header type="error" class="alert" :message="3 + 10" />
    {{ $slot }}
</body>

</html>
