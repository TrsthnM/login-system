<x-layout>
    <div class="flex justify-center mt-40 lg:mt-35 2xl:mt-65">
        <div class="backdrop-blur-xs bg-white/20 border border-gray-300 rounded-2xl p-8 w-87">
            <h1 class="text-gray-800 font-bold text-2xl text-center mb-10">Forgot Password</h1>
            <form action="{{ route('forgotPassword.submit') }}" method="post">
                @csrf
                <label for="email" class="block text-gray-800 font-bold" value="{{ old('email') }}" >Email Address</label>
                <input type="email" name="email" class="border-b border-b-gray-800 py-1 px-2 w-full mb-5">
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <div class="text-center">
                    <button type="submit" class="bg-gray-800 font-bold text-white w-full py-3 rounded-2xl mb-3 cursor-pointer">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
