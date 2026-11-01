<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <main class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md px-4 sm:px-6">
            {{ $slot }}
        </div>
    </main>
</body>

</html>
