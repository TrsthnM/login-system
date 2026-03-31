<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Login & Register</title>
</head>
<body class="bg-linear-to-b from-white to-blue-200 lg:bg-linear-to-br lg:from-white lg:to-blue-200 min-h-screen">
    <nav class="flex justify-between items-center bg-white lg:bg-transparent py-4 px-4 md:px-30 xl:px-90 relative">
        <h1 class="font-extrabold text-gray-800 text-2xl lg:text-3xl cursor-default">Tristhan</h1>
        <div class="lg:hidden">
            <input type="checkbox" id="menu" class="hidden peer"/>
            <label for="menu" class="cursor-pointer block p-2 font-bold">
                <span class="block w-6 h-0.5 bg-gray-800 mb-1"></span>
                <span class="block w-6 h-0.5 bg-gray-800 mb-1"></span>
                <span class="block w-6 h-0.5 bg-gray-800"></span>
            </label>
            <ul class="flex flex-col items-center justify-center absolute top-full left-0 w-full h-screen bg-linear-to-b from-white to-blue-200 space-y-5 max-h-0 overflow-hidden peer-checked:max-h-150 z-1000">
                @if ( request()->is('login') )
                    <li><a href="/" class="font-semibold text-gray-800 text-xl">Dashboard</a></li>
                @else
                    @auth
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="font-semibold text-gray-800 text-xl cursor-pointer">Log out</button>
                        </form>
                    @else
                        <li><a href="/" class="font-semibold text-gray-800 text-xl">Dashboard</a></li>
                        <li><a href="/login" class="font-semibold text-gray-800 text-xl">Log in</a></li>
                    @endauth
                @endif
            </ul>
        </div>
        <div class="hidden lg:flex space-x-10">
            @if ( request()->is('login') )
                <a href="/" class="font-semibold text-gray-800 text-md lg:text-xl tracking-wide">Dashboard</a>
            @else
                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="font-semibold text-gray-800 text-xl cursor-pointer">Log out</button>
                    </form>
                @else
                    <a href="/" class="font-semibold text-gray-800 text-xl">Dashboard</a>
                    <a href="/login" class="font-semibold text-gray-800 text-xl">Log in</a>
                @endauth
            @endif
        </div>
    </nav>
    <main class="px-4 md:px-30 xl:px-90">
        {{ $slot }}
    </main>
</body>
</html>
