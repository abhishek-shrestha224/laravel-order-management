@extends('layouts.layout')

@section('content')
    <section class="w-screen px-10 py-20">
        <h1 class="font-heading mb-4 text-6xl font-bold">Our Products</h1>
        <div>
            <div class="flex text-3xl font-bold">
                <p class="font-heading">{{ $product['name'] }}</p>-<p class="font-heading">{{ $product['weight'] }}</p>
            </div>
        </div>
    </section>
@endsection
