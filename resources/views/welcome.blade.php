@extends('layouts.layout')

@section('content')
    <h1 class="flex h-screen w-screen items-center justify-center text-9xl font-bold">Hello World🚀</h1>
    <p>{{ session('message') }}</p>
@endsection
