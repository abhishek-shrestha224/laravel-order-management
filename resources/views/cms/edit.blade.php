@extends('layouts.layout')
@section('title')
    <title>reRecylce :: Edit Home Page</title>
@endsection

@section('content')
    <section class="flex h-screen w-screen flex-col items-center justify-center px-10 py-20 text-center">
        <h1 class="mb-4 text-4xl font-bold">
            Edit Home Page
        </h1>

        <form class="mx-auto flex w-2/3 flex-col gap-4 text-left" action="/orders" method="POST" enctype="multipart/form-data">
            <a href="{{ route('root') }}">
                <button
                    class="mb-2 me-2 rounded-lg border border-gray-800 px-5 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                    type="button">
                    Go Back Home
                </button>
            </a>
            @csrf
            <div>
                <label class="mb-2 block text-lg font-bold text-gray-900 dark:text-white" for="title">
                    Title:
                </label>
                <input
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    id="title" type="text" name="title" value="hello">
            </div>

            <div>

                <label class="mb-2 block text-lg font-bold text-gray-900 dark:text-white" for="message">Your
                    message</label>
                <textarea
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    id="message" name="message"  rows="12">Hello</textarea>

            </div>
            <div>
                <label class="mb-2 block text-lg font-bold text-gray-900 dark:text-white" for="cta_text">
                    CTA Text:
                </label>
                <input
                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                    id="cta_text" type="text" name="cta_text" >
            </div>
            <div>
                <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="bg_img">
                    Upload file
                </label>
                <input
                    class="file:text-md block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 file:me-4 file:border-0 file:bg-gray-50 file:px-4 file:py-3 file:font-bold file:tracking-wide file:hover:bg-gray-500 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400 dark:file:bg-gray-600 dark:file:text-gray-100"
                    type="file" name="bg_img">

            </div>

            <input
                class="mb-2 me-2 cursor-pointer rounded-lg border border-gray-800 px-5 py-2.5 text-center text-lg font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800"
                type="submit" value="Submit" />
        </form>

    </section>
@endsection
