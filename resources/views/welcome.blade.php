@extends('layouts.layout')

@section('content')
    <section class="backgroundImg">
        <div class="backgroundOverlay flex">

            <article class="heroWrapper">
                <h1 class="heroHeading text-gray-200">
                    Lets Make A Difference
                </h1>
                <p class="heroPara text-xl text-gray-400">
                    "Start your journey towards a cleaner planet today! Join our plastic recycling initiative and not only
                    contribute to a greener environment but also earn exciting rewards along the way. Together, let's turn
                    plastic waste into valuable resources and make a lasting impact on our planet. Join us now and be a part
                    of the change!"
                </p>
                <div>

                    <a href="/orders/create">
                        <button
                            class="mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                            type="button">
                            Create New Order
                        </button>
                    </a>
                    @if ($isLoggedIn)
                        <a href="/orders/">
                            <button
                                class="mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                                type="button">
                                View All Orders
                            </button>
                        </a>
                    @endif
                    @if ($isLoggedIn)
                        <a href="/contents/edit/home">
                            <button
                                class="mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                                type="button">
                                Edit Homepage
                            </button>
                        </a>
                    @endif
                </div>
                <p class="text-2xl font-bold text-gray-400">{{ session('message') }}</p>
            </article>
        </div>
    </section>
@endsection
