<x-layout>
    <div class="flex justify-center mt-20 lg:mt-45">
        <div class="backdrop-blur-xs bg-white/20 border border-gray-300 rounded-2xl p-8">
            <h1 class="text-gray-800 font-bold text-4xl text-center mb-10">Login</h1>
            <form action="{{ route('login.attempt') }}" method="post">
                @csrf
                <label for="email" class="block text-gray-800 font-bold" value="{{ old('email') }}" >Email Address</label>
                <input type="email" name="email" class="border-b border-b-gray-800 py-1 px-2 w-70 mb-5">

                <label for="password" class="block text-gray-800 font-bold">Password</label>
                <input type="password" name="password" class="border-b border-b-gray-800 py-1 px-2 w-70 mb-5">

                <div class="flex items-center h-screen-0 mb-5 space-x-2">
                    <input type="checkbox" name="remember"{{ old('remember') == 'on' ? 'checked' : '' }}>
                    <label class="text-sm items-center">Remember me</label>
                </div>

                <div>
                    <button type="submit" class="bg-gray-800 font-bold text-white w-full py-3 rounded-2xl cursor-pointer">Login</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
