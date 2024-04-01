@extends('layouts.layout')

@section('title')
    <title>reRecylce :: Home</title>
@endsection

@section('content')
    <main class="text-dark bg-cover leading-normal tracking-wider antialiased"
        style="background-image: url('{{ asset('img/bg.png') }}')">
        <div class="h-full w-full bg-black/70">
            <div class="mx-auto my-32 flex h-auto w-2/3 flex-wrap items-center lg:my-0 lg:h-screen">
                <!--Main Col-->
                <div class="text-dark mx-6 w-full rounded-lg bg-white opacity-75 shadow-2xl lg:mx-0 lg:w-3/5 lg:rounded-l-lg lg:rounded-r-none"
                    id="profile">
                    <div class="p-4 text-center md:p-12 lg:text-left">
                        <h1 class="font-heading flex items-center justify-start pt-8 text-2xl font-bold tracking-tight">
                            <figure class="flex h-12 w-12 items-center justify-center""><img
                                    class="h-full w-full object-cover" src="{{ asset('img/logo.webp') }} "></figure>
                            <span>eRecyle</span>
                        </h1>
                        <div class="mx-auto w-4/5 border-b-2 border-green-500 pt-3 opacity-25 lg:mx-0"></div>
                        <h2 class="font-heading my-4 text-5xl font-bold"> {{ $content->title }}</h2>
                        <p class="font mb-8"> {{ $content->message }}</p>

                        <div class="mb-4">
                            <a href="{{ route('orders.create') }}">
                                <button
                                    class="text-accent hover:bg-dark dark:border-accent dark:text-accent dark:hover:bg-accent mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold transition-all duration-100 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:hover:text-white dark:focus:ring-gray-800"
                                    type="button">
                                    {{ $content->cta_text }}
                                </button>
                            </a>
                            @if ($isLoggedIn)
                                <a href="{{ route('orders.index') }}">
                                    <button
                                        class="text-accent hover:bg-dark dark:border-accent dark:text-accent dark:hover:bg-accent mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold transition-all duration-100 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:hover:text-white dark:focus:ring-gray-800"
                                        type="button">
                                        View All Orders
                                    </button>
                                </a>
                            @endif
                            @if ($isLoggedIn)
                                <a href="{{ route('cms.edit', ['slug' => 'home']) }}">
                                    <button
                                        class="text-accent hover:bg-dark dark:border-accent dark:text-accent dark:hover:bg-accent mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold transition-all duration-100 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:hover:text-white dark:focus:ring-gray-800"
                                        type="button">
                                        Edit Homepage
                                    </button>
                                </a>
                            @endif
                        </div>
                        <p class="text-dark text-lg font-medium">{{ session('message') }}</p>

                        <div class="mx-auto mt-6 flex w-4/5 flex-wrap items-center justify-between pb-16 lg:w-full lg:pb-0">
                            <a class="link" data-tippy-content="@github_handle" href="#"><svg
                                    class="text-dark hover:text-accent h-6 fill-current transition-all duration-100 hover:scale-110"
                                    role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <title>GitHub</title>
                                    <path
                                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                </svg></a>
                        </div>

                    </div>
                </div>

                <!--Img Col-->
                <div class="w-full lg:w-2/5">
                    <!-- Big profile image for side bar (desktop) -->
                    <img class="hidden rounded-none shadow-2xl lg:block lg:rounded-lg" src="{{ asset('img/img1.avif') }}" />
                </div>

            </div>
        </div>
        <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@4"></script>
    @endsection
