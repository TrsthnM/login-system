<x-layout>
    <div class="flex justify-center mt-2 md:mt-10 xl:mt-10 2xl:mt-35">
        <div class="backdrop-blur-xs bg-white/20 border border-gray-300 rounded-2xl p-8 w-107 mb-10">
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
                <div class="flex items-center border-b border-b-gray-800">
                    <input type="password" name="password" id="password" class="py-1 px-2 w-full">
                    <i class="fa-regular fa-eye cursor-pointer" id="eyeicon"></i>
                </div>
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <label for="password_confirmation" class="block text-gray-800 font-bold mt-5">Confirm Password</label>
                <div class="flex items-center border-b border-b-gray-800">
                    <input type="password" name="password_confirmation" id="passwordd" class="py-1 px-2 w-full">
                    <i class="fa-regular fa-eye cursor-pointer" id="eyeiconn"></i>
                </div>

                <div class="mt-10">
                    <button type="submit" class="bg-gray-800 font-bold text-white w-full py-3 rounded-2xl cursor-pointer">Register</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

