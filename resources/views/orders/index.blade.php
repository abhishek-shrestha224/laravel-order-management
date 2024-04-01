@extends('layouts.layout')

@section('title')
    <title>reRecylce :: All Orders</title>
@endsection

@section('content')
    <section class="w-screen px-10 py-20">
        <h1 class="mb-4 text-6xl font-bold">All Orders</h1>
        <a href="/">
            <button
                class="mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                type="button">
                Go Back Home
            </button>
        </a>    <a href="/orders/create">
            <button
                class="mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                type="button">
               Create New Order
            </button>
        </a>
        <p class="text-gray-400  mb-2 font-bold text-lg">{{ session('message') }}</p>
        <div class="relative overflow-x-auto shadow-md">
            <table class="text-light text-md w-full text-left">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="w-4 px-6 py-3" scope="col">
                            Id
                        </th>
                        <th class="w-[300px] px-6 py-3" scope="col">
                            Name
                        </th>
                        <th class="px-6 py-3" scope="col">
                            Address
                        </th>
                        <th class="px-6 py-3" scope="col">
                            Product
                        </th>
                        <th class="px-6 py-3" scope="col">
                            Weight
                        </th>
                        <th class="w-[200px] px-6 py-3" scope="col">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr class="border-b odd:bg-white even:bg-gray-50 odd:dark:bg-gray-900 even:dark:bg-gray-800">
                            <td class="w-8 whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                scope="row">
                                <a class="w-full" href="{{ url('/orders/') }}/{{ $order->id }}">
                                    {{ $order->id }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ url('/orders/') }}/{{ $order->id }}">
                                    {{ $order->name }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ url('/orders/') }}/{{ $order->id }}">
                                    {{ $order->address }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ url('/orders/') }}/{{ $order->id }}">
                                    {{ $order->product }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ url('/orders/') }}/{{ $order->id }}">
                                    {{ $order->weight }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="/orders/{{ $order->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input
                                        class="mb-2 me-2 cursor-pointer rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                                        type="submit" value="Compelete Order" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </section>
@endsection
