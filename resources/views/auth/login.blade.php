<x-guest-layout>
    <div class="bg-slate-700">

        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>
    
            <x-jet-validation-errors class="mb-4"/>
    
            <p class="">
                <h1>Login Account</h1> <hr><hr>
                <strong>Name</strong> = admin@gmail.com <br>
                <strong>Password</strong> = 12345678
            </p>
    
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
    
            <form method="POST" action="{{ route('login') }}" class="mt-5">
                @csrf
    
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">
                        Email
                    </label>
                    <input id="email" type="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('email') }}" required autofocus>
                </div>
    
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-bold mb-2">
                        Password
                    </label>
                    <input id="password" type="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required autocomplete="current-password">
                </div>
    
                <div class="block mb-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
    
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-4">
                    Log in
                </button>
                </div>
            </form>
    
        </x-jet-authentication-card>
    </div>
</x-guest-layout>
