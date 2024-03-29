@extends('layouts.layout')

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
            <form action="/orders/{{ $order->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input
                    class="mb-2 me-2 cursor-pointer rounded-lg border border-gray-800 px-5 py-2.5 text-center font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                    type="submit" value="Compelete Order" />
            </form>
        </div>
    </section>
@endsection
