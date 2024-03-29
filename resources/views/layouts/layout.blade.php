<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-dark text-light">
    <nav class="navbar-nav ms-auto flex justify-center mt-8 w-screen mx-auto fixed top-0">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <div class="nav-item">
                    <a class="nav-link mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800" href="{{ route('login') }}">{{ __('Login') }}</a>
                </div>
            @endif

            @if (Route::has('register'))
                <div class="nav-item">
                    <a class="nav-link mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800" href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
            @endif
        @else
        <div class="nav-item flex items-center justify-center gap-4">
            <a class="nav-link font-regular text-xl" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ Auth::user()->name }}
            </a>
            <form class="d-none" id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" value="Logout"  class="rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800 h-full">
            </form>
        </div>
        
        @endguest
    </nav>
    @yield('content')
</body>

</html>
