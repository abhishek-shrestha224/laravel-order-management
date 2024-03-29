@extends('layouts.layout')

@section('content')
    <section class="w-screen py-20 px-10">
        <h1 class="text-6xl font-bold font-heading mb-4">Our Products</h1>
        <div>
            @foreach ($products as $product)
                <div class="flex text-3xl font-bold">
                    <p class="font-heading">{{ $product['name'] }}</p>-<p class="font-heading">{{ $product['weight'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection