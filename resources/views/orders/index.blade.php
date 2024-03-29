@extends('layouts.layout')

@section('content')
    <section class="z-1 w-screen px-10 py-20">
        <h1 class="font-heading mb-4 text-6xl font-bold">All Orders</h1>

        <div class="relative overflow-x-auto shadow-md">
            <table class="text-light text-md w-full text-left">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="w-4 px-2 py-3" scope="col">
                            Id
                        </th>
                        <th class="w-56 px-6 py-3" scope="col">
                            Name
                        </th>
                        <th class="w-76 px-6 py-3" scope="col">
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
                            <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                scope="row">
                                {{ $order->id }}
                            </th>
                            <td class="pxn-6 py-4">
                                {{ $order->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->address }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->product }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $order->weight }}
                            </td>
                            <td class="px-6 py-4">
                                <a class="complete-link underline" href="#">Compelete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </section>

    <!-- Include Axios for making AJAX requests -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        // Add click event listener to all elements with class 'complete-link'
        document.querySelectorAll('.complete-link').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default link behavior

                // Get the order ID from the data-order-id attribute
                const orderId = this.getAttribute('data-order-id');

                // Confirm with the user before proceeding with deletion
                if (confirm('Are you sure you want to complete this order?')) {
                    // Send DELETE request to the server
                    axios.delete(`/orders/${orderId}`)
                        .then(response => {
                            // Handle successful response
                            console.log(response.data);
                            // Optionally, you can reload the page or update the UI accordingly
                            window.location.reload();
                        })
                        .catch(error => {
                            // Handle error
                            console.error(error);
                        });
                }
            });
        });
    </script>
@endsection
