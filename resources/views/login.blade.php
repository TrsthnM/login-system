<x-layout>
    <div class="flex justify-center mt-20 lg:mt-15 2xl:mt-45">
        <div class="backdrop-blur-xs bg-white/20 border border-gray-300 rounded-2xl p-8 w-87">
            <h1 class="text-gray-800 font-bold text-4xl text-center mb-10">Login</h1>
            <form action="{{ route('login.attempt') }}" method="post">
                @csrf
                <label for="email" class="block text-gray-800 font-bold" value="{{ old('email') }}" >Email Address</label>
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

                <div class="flex mb-5 space-x-2 mt-5">
                    <input type="checkbox" name="remember"{{ old('remember') == 'on' ? 'checked' : '' }}>
                    <label class="text-sm items-center">Remember me</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-gray-800 font-bold text-white w-full py-3 rounded-2xl mb-3 cursor-pointer">Login</button>
                    <a href="{{ route('forgotPassword') }}" class="text-blue-600 underline">Forgot password</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
