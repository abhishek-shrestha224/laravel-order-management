@extends('layouts.layout')

@section('content')
    <section class="w-screen px-10 py-20">
        <h1 class="mb-4 text-6xl font-bold">All Orders</h1>

        <div class="relative overflow-x-auto shadow-md">
            <table class="text-light text-md w-full text-left">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3" scope="col">
                            Id
                        </th>
                        <th class="px-6 py-3" scope="col">
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
                        <th class="px-6 py-3" scope="col">
                            Action
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr class="border-b odd:bg-white even:bg-gray-50 odd:dark:bg-gray-900 even:dark:bg-gray-800">
                            <td class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white w-8"
                                scope="row">
                                <a href="{{ url('/orders/') }}/{{ $order->id }}" class=" w-full">
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
                                <a href="{{ url('/orders/') }}/{{ $order->id }}/destroy">
                                    <button class="underline">
                                        Compelete Now
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </section>
@endsection
