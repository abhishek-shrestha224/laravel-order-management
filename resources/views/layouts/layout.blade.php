<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-dark text-light">
    <nav class="shadow-accent bg-dark fixed top-0 z-10 w-screen px-12 py-4 shadow-sm">
        <ul class="flex gap-12 text-2xl font-bold">
            <li>
                <a class="hover:text-accent" href="/">Home</a>
            </li>
            <li>
                <a class="hover:text-accent" href="/orders">Orders</a>
            </li>
        </ul>

    </nav>

    @yield('content')
</body>

</html>
