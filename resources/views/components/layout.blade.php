<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Login & Register</title>
</head>
<body class="bg-linear-to-br from-white to-blue-200 h-screen">
    <nav class="bg-white flex justify-between items-center py-4 px-90 border-b border-b-gray-300">
        <h1 class="font-extrabold text-gray-800 text-3xl cursor-default">Trishan</h1>
        <div>
            <ul class="flex space-x-10">
                <li><a href="/" class="font-semibold text-gray-800 text-xl">Dashboard</a></li>
                <li><a href="/" class="font-semibold text-gray-800 text-xl">Log in</a></li>
                <li><a href="/" class="font-semibold text-gray-800 text-xl">Register</a></li>
            </ul>
        </div>
    </nav>
    {{ $slot }}
</body>
</html>
