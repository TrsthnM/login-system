<x-layout>
    @auth
        <div class="mt-60 lg:mt-60 2xl:mt-90">
            <h1 class="font-bold text-xl text-center lg:text-4xl text-gray-800 mb-10">Welcome to the Dashboard {{ Auth::user()->name }}</h1>
        </div>
    @else
        <div class="mt-30 xl:mt-40 2xl:mt-70">
            <h1 class="font-bold text-xl lg:text-4xl text-gray-800 mb-10">Welcome to My Login & Register System</h1>
            <p class="text-sm lg:text-lg text-justify">This simple login and register system helps you secure your website and manage user access easily.
                It ensures that only authorized users can enter your system and protects important data from unauthorized access.</p>
            <div class="mt-15">
                <a href="/register" class="bg-gray-800 text-white font-bold py-3 px-10 rounded-2xl">Register</a>
            </div>
        </div>
    @endauth
</x-layout>
