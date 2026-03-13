@extends('layouts.app')
@section('content')
    <div class="min-h-[85vh] flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div
            class="max-w-5xl w-full space-y-8 bg-white shadow-2xl rounded-2xl overflow-hidden flex flex-col md:flex-row-reverse">
            <div
                class="hidden md:flex md:w-1/2 bg-[#0d537c] p-12 text-white flex-col justify-center items-center text-center relative">
                <div class="absolute inset-0 opacity-40">
                    <img src="https://images.unsplash.com/photo-1520208422220-d12a3c588e6c?auto=format&fit=crop&q=80&w=2070"
                        alt="Base Camp" class="w-full h-full object-cover">
                </div>
                <div class="relative z-10">
                    <h2 class="text-4xl font-bold mb-4">Start Your Journey</h2>
                    <p class="text-blue-100 text-lg">Create an account to track your trekking routes, book guides, and join
                        our adventure community.</p>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-8 md:p-12 border-r border-gray-100">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl font-extrabold text-gray-900">Create Account</h2>
                    <p class="mt-2 text-sm text-gray-600 mb-8">

                        have an account?
                        <a href="{{ url('login') }}" class="font-medium text-orange-500 hover:text-orange-600">
                            Login
                            here
                        </a>
                    </p>
                </div>
                <form class="space-y-5" action="{{ route('register.submit') }}" method="POST">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-700">Full Name</label>
                        <input id="name" name="name" type="text" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                            placeholder="John Doe">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700">Email Address</label>
                        <input id="email" name="email" type="email" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                            placeholder="name@example.com">
                    </div>

                    <!-- New Phone field with country code support -->
                    <div>
                        <label for="phone" class="block text-sm font-semibold text-gray-700">Phone Number (with country
                            code)</label>
                        <input id="phone" name="phone" type="tel" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                            placeholder="+977 9801234567">
                        @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                        <input id="password" name="password" type="password" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                            placeholder="••••••••">
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-semibold text-gray-700">Confirm
                            Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                            class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 sm:text-sm"
                            placeholder="••••••••">
                    </div>

                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" name="terms" type="checkbox" required
                                class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="text-gray-600">I agree to the <a href="#"
                                    class="text-orange-500 underline">Terms and Conditions</a></label>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-lg text-lg font-bold text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500 transition-all transform hover:-translate-y-1">
                            Register Now
                        </button>
                    </div>
                    <div class="mt-6">
                        <div class="relative">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-2 bg-white text-gray-500">Or continue with</span>
                            </div>
                        </div>

                        <div class="mt-6">
                            <a href="{{ url('/auth/google') }}"
                                class="w-full flex items-center justify-center gap-3 bg-white border border-gray-300 rounded-lg py-2 hover:bg-gray-100 transition">

                                <img src="https://developers.google.com/identity/images/g-logo.png" class="w-5 h-5">
                                <span class="text-gray-700 font-medium">Continue with Google</span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        @if (session('registration_success'))
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    title: 'Registration Successful!',
                    html: 'Welcome, <strong>{{ session('registered_name') ?? 'Adventurer' }}</strong>!<br>You can now log in and start planning your trek.',
                    icon: 'success',
                    confirmButtonColor: '#f97316',   // your orange color
                    confirmButtonText: 'Go to Login',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{ route('login.form') }}';
                    }
                });
            });
        @endif
    </script>
@endsection