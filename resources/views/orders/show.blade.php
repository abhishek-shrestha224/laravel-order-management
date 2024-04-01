@extends('layouts.layout')

@section('title')
    <title>reRecylce :: {{ $order->name }}</title>
@endsection

@section('content')
    <section class="flex h-screen w-screen flex-col items-center justify-center px-10 py-20 text-center">
        <h1 class="mb-4 text-4xl font-bold">Order for {{ $order->name }}</h1>
        <div class="text-lg">
            <h2>
                {{ $order->name }}
            </h2>
            <p>
                {{ $order->address }}
            </p>
            <p>
                {{ $order->product }}
            </p>
            <p>
                {{ $order->weight }}
            </p>
            <div class="flex">
                <a href="{{ route('root') }}">
                    <button
                        class="mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                        type="button">
                        Go Back Home
                    </button>
                </a>
                <a href="/orders">
                    <button
                        class="mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                        type="button">
                        Show all Orders
                    </button>
                </a>
                <form action="route('orders.destroy', ['slug' => $order->id])" method="POST">
                    @csrf
                    @method('DELETE')
                    <input
                        class="mb-2 me-2 cursor-pointer rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                        type="submit" value="Compelete Order" />
                </form>
            </div>

        </div>
    </section>
@endsection
