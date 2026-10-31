<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body class="min-h-screen flex flex-col">
    <x-header />
    <main class="flex-1">
        <div class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            {{ $slot }}
        </div>
    </main>
    <x-footer />
</body>

</html>
