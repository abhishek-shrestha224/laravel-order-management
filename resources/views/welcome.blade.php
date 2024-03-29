@extends('layouts.layout')

@section('content')
    <section class="flex h-screen w-screen flex-col items-center justify-center">
        <h1 class="text-center text-9xl font-bold">Hello World🚀</h1>
        <div>
            <a href="/orders/create">
                <button
                    class="mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                    type="button">
                    Create New Order
                </button>
            </a>
            <a href="/orders/">
                <button
                    class="mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                    type="button">
                    Show all Orders
                </button>
            </a>
        </div>
        <p class="text-gray-400  font-bold text-lg">{{ session('message') }}</p>
    </section>
@endsection
