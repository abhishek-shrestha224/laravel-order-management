@extends('layouts.layout')

@section('content')
    <section class="w-screen py-16 px-10 z-1">
        <h1 class="text-6xl font-bold font-heading mb-4">All Orders</h1>
        <div>
            @foreach ($orders as $order)
                <div class="flex text-3xl font-bold border border-light rounded-lg h-20">
                    <p class="font-heading">{{ $order['name'] }}</p>-<p class="font-heading">{{ $order['weight'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection