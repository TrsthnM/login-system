<x-layout>
    <div class="flex justify-center mt-10 lg:mt-35">
        <div class="backdrop-blur-xs bg-white/20 border border-gray-300 rounded-2xl p-8 w-107">
            <h1 class="text-gray-800 font-bold text-4xl text-center mb-10">Register</h1>
            <form action="{{ route('register.store') }}" method="post">
                @csrf
                <label for="name" class="block text-gray-800 font-bold">Name</label>
                <input type="text" name="name" class="border-b border-b-gray-800 py-1 px-2 w-full mb-2">
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <label for="email" class="block text-gray-800 font-bold mt-5">Email Address</label>
                <input type="email" name="email" class="border-b border-b-gray-800 py-1 px-2 w-full mb-2">
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <label for="password" class="block text-gray-800 font-bold mt-5">Password</label>
                <input type="password" name="password" class="border-b border-b-gray-800 py-1 px-2 w-full mb-2">
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <label for="password_confirmation" class="block text-gray-800 font-bold mt-5">Confirm Password</label>
                <input type="password" name="password_confirmation" class="border-b border-b-gray-800 py-1 px-2 w-full mb-2">

                <div class="mt-10">
                    <button type="submit" class="bg-gray-800 font-bold text-white w-full py-3 rounded-2xl cursor-pointer">Register</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

