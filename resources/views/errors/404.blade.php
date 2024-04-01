<!doctype html>
<html>

<head>
    <title>404 :: Not Found</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <!-- component -->
    <main class="bg-dark flex h-screen w-full flex-col items-center justify-center">
        <h1 class="text-light text-9xl font-extrabold tracking-widest">404</h1>
        <div class="bg-accent absolute rotate-12 rounded px-2 text-sm">
            Page Not Found
        </div>
        <button class="mt-5">
            <a class="text-accent active:text-accent group relative inline-block text-sm font-medium focus:outline-none focus:ring"
                href="{{ route('root') }}">
                <span
                    class="bg-accent absolute inset-0 translate-x-0.5 translate-y-0.5 transition-transform group-hover:translate-x-0 group-hover:translate-y-0"></span>

                <span class="relative block border border-current bg-[#1A2238] px-8 py-3">
                    <p>Go Home</p>
                </span>
            </a>
        </button>
    </main>
</body>

</html>
