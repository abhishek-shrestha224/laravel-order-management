@extends('layouts.layout')

@section('content')
    <section class="flex h-screen w-screen flex-col items-center justify-center px-10 py-20 text-center">
        <h1 class="mb-4 text-4xl font-bold">
            Create New Order </h1>

        <form class="mx-auto flex w-[600px] flex-col gap-4 text-left">

            <div>
                <label class="mb-2 block text-lg font-bold text-gray-900 dark:text-white" for="name">
                    Enter Your Name:
                </label>
                <input
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    id="name" type="text">
            </div>

            <div>
                <label class="mb-2 block text-lg font-bold text-gray-900 dark:text-white" for="address">
                    Enter Your Address:
                </label>
                <input
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    id="address" type="text">
            </div>

            <label class="mb-2 block text-lg font-bold text-gray-900 dark:text-white" for="products">
                Select your Item
            </label>

            <div>
                <select
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    id="products">
                    <option selected hidden>
                        Choose an item
                    </option>
                    <option value="Hat">
                        Hats
                    </option>
                    <option value="Wallet">
                        Wallets
                    </option>
                    <option value="Flower Pot">
                        Flower Pots
                    </option>
                    <option value="T-Shirt">
                        T Shirts
                    </option>
                    <option value="Shoes">
                        Shoes
                    </option>
                </select>
            </div>

            <div>
                <label class="mb-2 block text-lg font-bold text-gray-900 dark:text-white" for="products">
                    Select your Item Weight
                </label>
                <select
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    id="products">
                    <option selected value="1kg">
                        1kg
                    </option>
                    <option value="2kg">
                        2kg
                    </option>
                    <option value="5kg">
                        5kg
                    </option>
                </select>
            </div>
            <input
                class="mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-lg font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800 cursor-pointer"
                type="submit" value="Create Order" />
        </form>

    </section>
@endsection
