<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tareas</title>

    <!-- Tailwind CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white font-sans antialiased">

    <div id="app" class="min-h-screen flex flex-col items-center justify-center">
        @yield("content")
    </div>

    @vite(['resources/js/app.js'])

</body>

</html>

