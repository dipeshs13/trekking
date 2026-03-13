<nav class="bg-[#0d537c] shadow-md">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-center items-center h-14">

            <ul class="flex items-center gap-8 text-white">

                <li>
                    <a href="{{ url('/') }}"
                        class="text-[15px] font-medium hover:text-orange-400 py-2 px-1 transition-colors">Home</a>
                </li>

                <li class="relative group">
                    <button
                        class="flex items-center gap-1 text-[15px] font-medium dropdown-btn hover:text-orange-400 py-2 px-1">
                        Company Info
                        <svg class="w-3 h-3 fill-current opacity-70" viewBox="0 0 20 20">
                            <path
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                    <ul
                        class="absolute top-full left-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-xl opacity-0 invisible dropdown-menu z-50 py-2">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">About Us</a></li>
                    </ul>
                </li>

                <li class="relative group">
                    <button
                        class="flex items-center gap-1 text-[15px] font-medium dropdown-btn hover:text-orange-400 py-2 px-1">
                        Trekking
                        <svg class="w-3 h-3 fill-current opacity-70" viewBox="0 0 20 20">
                            <path
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </li>

                <li class="relative group">
                    <button
                        class="flex items-center gap-1 text-[15px] font-medium dropdown-btn hover:text-orange-400 py-2 px-1">
                        Climbing
                        <svg class="w-3 h-3 fill-current opacity-70" viewBox="0 0 20 20">
                            <path
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                </li>

                <li>
                    <a href="#" class="text-[15px] font-medium hover:text-orange-400 py-2 px-1">Reviews</a>
                </li>

                <li>
                    <a href="#" class="text-[15px] font-medium hover:text-orange-400 py-2 px-1">Contact</a>
                </li>

                <div class="h-5 w-[1px] bg-white/30 mx-2"></div>

                @auth
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-[15px] font-bold hover:text-red-500">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth

                {{-- Show Login/Register only if user is NOT logged in --}}
                @guest
                    <li>
                        <a href="{{ url('login') }}" class="text-[15px] font-bold hover:text-orange-400">Login</a>
                    </li>
                    <li>
                        <a href="{{ url('register') }}" class="text-[15px] font-bold hover:text-orange-400">Register</a>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>