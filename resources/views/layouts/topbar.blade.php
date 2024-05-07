<nav class="fixed bg-neutral-950 w-full z-20 top-0 left-0 border-b border-neutral-700">
    <div class="flex flex-wrap items-center justify-between mx-auto py-4 px-4 md:px-8">
        <a href="/" class="flex items-center">
            <img src="/images/logo_white.png" class="mr-2 w-16" alt="CG Logo" />
            <img src="/images/CaptureGrounds_title.png" class="h-5" alt="CG Logo" />
        </a>
        <div class="flex md:order-2">

            <!-- Right Side Of Navbar -->
            <ul class="flex flex-row justify-center items-center gap-2 md:gap-4 mt-1 md:mt-0">
                @auth
                    @if (Auth::user()->isAdmin())
                        <li>
                            {{-- <a href="{{ route('admin.admin') }}" --}}
                                class="block py-2 pl-3 pr-4 {{ $active_5 ?? 'text-white rounded hover:bg-yellow-400 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0 md:hover:bg-transparent' }}">
                                <svg class="w-6 h-6 text-white hover:text-yellow-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M7.824 5.937a1 1 0 0 0 .726-.312 2.042 2.042 0 0 1 2.835-.065 1 1 0 0 0 1.388-1.441 3.994 3.994 0 0 0-5.674.13 1 1 0 0 0 .725 1.688Z" />
                                    <path
                                        d="M17 7A7 7 0 1 0 3 7a3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V7a5 5 0 1 1 10 0v7.083A2.92 2.92 0 0 1 12.083 17H12a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a1.993 1.993 0 0 0 1.722-1h.361a4.92 4.92 0 0 0 4.824-4H17a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3Z" />
                                </svg>
                            {{-- </a> --}}
                        </li>
                    @endif
                @endauth

                <!-- Authentication Links -->
                @guest
                    <div>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring focus:ring-gray-500"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-12 h-12 rounded-full text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-neutral-950" role="none">
                                Register yourself!
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ route('register') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-400"
                                    role="menuitem">Sign up</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-400"
                                    role="menuitem">Login</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="">
                        <button type="button"
                            class="flex text-sm bg-neutral-900 rounded-full focus:ring focus:ring-gray-500"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            @if (Auth::user()->profilePicture == null)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-10 h-10 rounded-full text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            @elseif (Auth::user()->isAdmin() || Auth::user()->isOwner())
                                <img class="w-10 h-10 rounded-full object-cover"
                                    src="{{ asset('images/' . Auth::user()->profilePicture) }}" alt="user photo">
                            @else
                                <img class="w-10 h-10 rounded-full object-cover"
                                    src="{{ asset('storage/' . Auth::user()->profilePicture) }}" alt="user photo">
                            @endif
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            @if (Auth::user()->isAdmin())
                                <p class="text-sm text-neutral-950" role="none">
                                    Selamat datang kembali, Admin!
                                </p>
                            @else
                                <p class="text-sm text-neutral-950" role="none">
                                    Hello there! Welcome back!
                                </p>
                            @endif

                            <p>
                                <a href="{{ route('profile') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-400"
                                    role="menuitem">Profile</a>
                            </p>
                            <br>
                            @if (Auth::user()->isCustomer())
                            <a href="/CustomerHomePage">
                            @elseif (Auth::user()->isWorker())
                            <a href="/WorkerHomePage">
                            @endif
                            <p class="text-sm text-neutral-950" role="none">
                                {{ Auth::user()->name }}
                            </p>
                            <p class="text-sm font-medium text-neutral-950 truncate" role="none">
                                {{ Auth::user()->email }}
                            </p>
                        </a>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-yellow-400" role="menuitem">
                                    Keluar
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest
            </ul>

            <button data-collapse-toggle="navbar-sticky" type="button"
                class="mt-2 ml-2 md:ml-4 inline-flex items-center p-2 w-10 h-10 justify-center text-sm bg-neutral-950 border border-gray-500 text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">

            <ul
                class="flex flex-col p-4 md:p-0 font-medium rounded-lg bg-neutral-950 md:flex-row md:space-x-8  md:border-0 md:bg-neutral-950">

                <li>
                    <a href="/"
                        class="block py-2 pl-3 pr-4 {{ $active_1 ?? 'text-white rounded hover:bg-yellow-400 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0 md:hover:bg-transparent' }}">Home</a>
                </li>

                <li>
                    <a href="#offer"
                        class="block py-2 pl-3 pr-4 {{ $active_2 ?? 'text-white rounded hover:bg-yellow-400 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0 md:hover:bg-transparent' }}"
                        aria-current="page">Offer</a>
                </li>

                <li>
                    <a href="/"
                        class="block py-2 pl-3 pr-4 {{ $active_3 ?? 'text-white rounded hover:bg-yellow-400 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0 md:hover:bg-transparent' }}">Gallery</a>
                </li>

                <li>
                    <a href="/chat"
                        class="block py-2 pl-3 pr-4 {{ $active_4 ?? 'text-white rounded hover:bg-yellow-400 md:hover:bg-transparent md:hover:text-yellow-400 md:p-0 md:hover:bg-transparent' }}">Chat</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
