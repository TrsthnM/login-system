<x-layout>
    <div class="flex justify-center mt-10 lg:mt-35">
        <div class="backdrop-blur-xs bg-white/20 border border-gray-300 rounded-2xl p-8">
            <h1 class="text-gray-800 font-bold text-4xl text-center mb-10">Register</h1>
            <form action="{{ route('register.store') }}" method="post">
                @csrf
                <label for="name" class="block text-gray-800 font-bold">Name</label>
                <input type="text" name="name" class="border-b border-b-gray-800 py-1 px-2 w-70 lg:w-90 mb-5">

                <label for="email" class="block text-gray-800 font-bold">Email Address</label>
                <input type="email" name="email" class="border-b border-b-gray-800 py-1 px-2 w-70 lg:w-90 mb-5">

                <label for="password" class="block text-gray-800 font-bold">Password</label>
                <input type="password" name="password" class="border-b border-b-gray-800 py-1 px-2 w-70 lg:w-90 mb-5">

                <label for="password_confirmation" class="block text-gray-800 font-bold">Confirm Password</label>
                <input type="password" name="password_confirmation" class="border-b border-b-gray-800 py-1 px-2 w-70 lg:w-90 mb-10">

                <div>
                    <button type="submit" class="bg-gray-800 font-bold text-white w-full py-3 rounded-2xl cursor-pointer">Register</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>

