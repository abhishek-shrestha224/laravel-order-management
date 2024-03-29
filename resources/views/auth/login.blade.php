@extends('layouts.app')

@section('content')
    <div class="container mx-auto mt-20 flex w-[600px] items-center justify-center ">
        <div class="row justify-content-center w-full">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header font-heading mb-4 text-center text-4xl font-bold">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label class="mb-2 block text-lg font-bold text-gray-900 dark:text-white"
                                    for="email">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input
                                        class="form-control @error('email') is-invalid @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="email" type="email" name="email" value="{{ old('email') }}" required
                                        autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="mb-2 block text-lg font-bold text-gray-900 dark:text-white"
                                    for="password">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input
                                        class="form-control @error('password') is-invalid @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        id="password" type="password" name="password" required
                                        autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" id="remember" type="checkbox" name="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label ms-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button class="btn btn-primary mb-2 me-2 cursor-pointer rounded-lg border border-gray-800 px-5 py-2.5 text-center text-lg font-bold text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-800" type="submit">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
