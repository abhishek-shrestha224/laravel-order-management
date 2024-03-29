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
            <a data-order-id="{{ $order->id }}" href="#"class="complete-link"><button class="underline">Compelete
                    Now</button></a>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        document.querySelectorAll('.complete-link').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();


                const orderId = this.getAttribute('data-order-id');


                if (confirm('Are you sure you want to complete this order?')) {

                    axios.delete(`/orders/${orderId}`)
                        .then(response => {
                            console.log(response.data);
                            window.location.reload();
                        })
                        .catch(error => {
                            console.error(error);
                        });
                }
            });
        });
    </script>
@endsection
