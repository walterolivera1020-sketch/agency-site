@extends('layouts.auth')

@section('content')
<div class="bg-white shadow-lg rounded-2xl p-8">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Login</h1>
        <p class="text-gray-500 mt-2">Sign in to your account</p>
    </div>

    <form action="#" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter your email"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            >
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            >
        </div>

        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2 text-gray-600">
                <input type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                Remember me
            </label>
            <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
        </div>

        <button
            type="submit"
            class="w-full bg-blue-600 text-white py-3 rounded-xl font-semibold hover:bg-blue-700 transition duration-300"
        >
            Sign In
        </button>
    </form>

    <p class="text-center text-sm text-gray-600 mt-6">
        Don’t have an account?
        <a href="{{ route('register') }}" class="text-blue-600 font-medium hover:underline">Register</a>
    </p>
</div>
@endsection