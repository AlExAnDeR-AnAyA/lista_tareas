@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-900">
    <div class="w-full max-w-md p-8 bg-gradient-to-r from-purple-500 via-pink-500 to-purple-800 rounded-lg shadow-lg">
        <div class="text-center text-white mb-8">
            <h1 class="text-4xl font-bold">Regístrate</h1>
            <p class="text-lg">Crea una nueva cuenta</p>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-6">
                    <label for="name" class="block text-white text-lg font-semibold mb-2">{{ __('Name') }}</label>
                    <input id="name" type="text" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-white text-lg font-semibold mb-2">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-white text-lg font-semibold mb-2">{{ __('Password') }}</label>
                    <input id="password" type="password" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password-confirm" class="block text-white text-lg font-semibold mb-2">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="w-full py-2 bg-purple-600 text-white font-bold rounded-md hover:bg-purple-700 transition duration-300">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
