@extends('layouts.auth')

@section('content')
<div class="bg-white shadow-lg rounded-2xl p-8">

    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Admin Login</h1>
        <p class="text-gray-500 mt-2">Sign in to access the dashboard</p>
    </div>

    {{-- Global Error Message --}}
    @if ($errors->any())
        <div class="mb-4 p-3 rounded-lg bg-red-100 text-red-700 text-sm">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
        @csrf

        {{-- Email --}}
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                Email
            </label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Enter admin email"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                @error('email') border-red-500 @enderror"
            >

            @error('email')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- Password --}}
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                Password
            </label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter password"
                class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
                @error('password') border-red-500 @enderror"
            >

            @error('password')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
        </div>

        {{-- Remember --}}
        <div class="flex items-center justify-between text-sm">
            <label class="flex items-center gap-2 text-gray-600">
                <input
                    type="checkbox"
                    name="remember"
                    value="1"
                    class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                >
                Remember me
            </label>

            <a href="#" class="text-indigo-600 hover:underline">Forgot password?</a>
        </div>

        {{-- Button --}}
        <button
            type="submit"
            class="w-full bg-indigo-600 text-white py-3 rounded-xl font-semibold hover:bg-indigo-700 transition"
        >
            Sign In
        </button>

    </form>
</div>
@endsection