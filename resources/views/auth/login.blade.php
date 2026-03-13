@extends('layouts.app')

@section('content')
<div class="min-h-[85vh] flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl w-full space-y-8 bg-white shadow-2xl rounded-2xl overflow-hidden flex flex-col md:flex-row">
        
        <div class="hidden md:flex md:w-1/2 bg-[#0d537c] p-12 text-white flex-col justify-center items-center text-center relative">
            <div class="absolute inset-0 opacity-30">
                <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&q=80&w=2070" 
                     alt="Mountains" class="w-full h-full object-cover">
            </div>
            <div class="relative z-10">
                <h2 class="text-4xl font-bold mb-4">Welcome Back!</h2>
                <p class="text-blue-100 text-lg">Log in to manage your upcoming Everest adventures and trekking permits.</p>
            </div>
        </div>

        <div class="w-full md:w-1/2 p-8 md:p-12">
            <div class="text-center md:text-left">
                <h2 class="text-3xl font-extrabold text-gray-900">Sign In</h2>
                <p class="mt-2 text-sm text-gray-600 mb-8">
                    Don't have an account? 
                    <a href="{{ url('register') }}" class="font-medium text-orange-500 hover:text-orange-600 underline">
                        Register here
                    </a>
                </p>
            </div>

            <form class="space-y-6" action="{{ route('login.submit') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                    <input id="email" name="email" type="email" autocomplete="email" required 
                           class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" 
                           placeholder="you@example.com">
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-medium text-[#0d537c] hover:underline">Forgot password?</a>
                        </div>
                    </div>
                    <input id="password" name="password" type="password" required 
                           class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm" 
                           placeholder="••••••••">
                </div>

                <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" 
                           class="h-4 w-4 text-orange-500 focus:ring-orange-500 border-gray-300 rounded">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                </div>

                <div>
                    <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-lg font-bold text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition-all transform hover:-translate-y-1">
                        Log In
                    </button>
                </div>
            </form>

            <div class="mt-8 pt-8 border-t border-gray-100">
                <p class="text-xs text-center text-gray-400">
                    &copy; 2026 Everest Trekking Routes Pvt. Ltd. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection