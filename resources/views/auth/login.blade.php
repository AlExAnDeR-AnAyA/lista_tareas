@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-900">
    <div class="w-full max-w-md p-8 bg-gradient-to-r from-purple-500 via-pink-500 to-purple-800 rounded-lg shadow-lg">
        <div class="text-center text-white mb-8">
            <h1 class="text-4xl font-bold">Bienvenido</h1>
            <p class="text-lg">Inicia sesión para continuar</p>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block text-white text-lg font-semibold mb-2">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="block text-white text-lg font-semibold mb-2">{{ __('Password') }}</label>
                    <input id="password" type="password" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6 flex items-center">
                    <input class="form-check-input mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label text-white" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="flex justify-between items-center">
                    <button type="submit" class="w-full py-2 bg-purple-600 text-white font-bold rounded-md hover:bg-purple-700 transition duration-300">
                        {{ __('Login') }}
                    </button>
                    @if (Route::has('password.request'))
                        <a class="text-purple-300 text-sm mt-2 block text-center" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
