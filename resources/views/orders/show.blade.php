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
            <a href="{{ url('/orders/') }}/{{ $order->id }}/destroy">
                <button class="underline">
                    Compelete Now
                </button>
            </a>
        </div>
    </section>
@endsection
