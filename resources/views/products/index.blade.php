@extends('layouts.layout')

@section('content')
    <section class="w-screen py-20 px-10">
        <h1 class="text-6xl font-bold font-heading mb-12">Our Products</h1>
        <div>
            @foreach ($products as $product)
                <div>
                    <h2>{{ $product['name'] }}</h2>-<p>{{ $product['weight'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
