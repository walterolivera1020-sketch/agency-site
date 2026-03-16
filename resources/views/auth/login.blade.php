@extends('layouts.auth')

@section('content')
<!-- Custom Styles for Minimal Centered Glass -->
<style>
    /* 1. Force Center & No Scroll */
    html, body {
        margin: 0;
        padding: 0;
        height: 100vh;
        width: 100%;
        overflow: hidden; /* Removes scroll bars */
        background-color: #0f172a; /* Fallback */
        background-size: cover;
        background-position: center;
        font-family: 'Inter', sans-serif;

        /* Perfect Centering */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Minimal Glass Card */
    .glass-card {
        background: rgba(255, 255, 255, 0.07);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.2);
    }

    /* Minimal Inputs */
    .glass-input {
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #fff;
        transition: all 0.2s ease;
    }

    .glass-input::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .glass-input:focus {
        background: rgba(0, 0, 0, 0.4);
        border-color: rgba(16, 185, 129, 0.8); 
        box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.1);
        outline: none;
    }

    /* Button */
    .btn-glow {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        transition: all 0.2s ease;
    }

    .btn-glow:hover {
        transform: translateY(-1px);
        box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
    }

    /* Checkbox */
    input[type="checkbox"] {
        appearance: none;
        -webkit-appearance: none;
        background-color: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 4px;
        cursor: pointer;
        position: relative;
        transition: all 0.2s;
    }

    input[type="checkbox"]:checked {
        background-color: #10b981;
        border-color: #10b981;
    }

    input[type="checkbox"]:checked::after {
        content: '✔';
        position: absolute;
        font-size: 9px;
        color: white;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .text-shadow {
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }
</style>

<!-- MINIMAL Card: max-w-xs (320px), tighter padding p-6 -->
<div class="glass-card rounded-2xl p-6 max-w-xs w-full relative z-10">

    <!-- Logo Section -->
    <div class="text-center mb-6">
        <div class="relative inline-block">
            <div class="absolute inset-0 blur-xl bg-emerald-500/20 rounded-full scale-125"></div>
            
            <img
                src="{{ asset('images/Logo3.png') }}"
                alt="Joseline Logo"
                class="relative w-16 h-16 mx-auto object-contain drop-shadow-xl">
        </div>
            
        <h1 class="text-xl font-bold text-white tracking-tight mt-4 text-shadow">
            Admin Login
        </h1>
        <p class="text-white/50 text-xs mt-1 text-shadow">
            Access dashboard
        </p>
    </div>

    <!-- Error Messages -->
    @if(session('error'))
        <div class="mb-4 rounded-lg bg-red-500/20 backdrop-blur border border-red-400/30 px-3 py-2.5 text-xs text-red-200 flex items-center gap-2">
            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('error') }}</span>
        </div>
    @endif

    @if($errors->any())
        <div class="mb-4 rounded-lg bg-red-500/20 backdrop-blur border border-red-400/30 px-3 py-2.5 text-xs text-red-200 flex items-center gap-2">
            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ $errors->first() }}</span>
        </div>
    @endif

    <!-- Form -->
    <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-4" id="loginForm">
        @csrf

        <div>
            <label for="email" class="block text-[10px] font-semibold text-white/70 mb-1.5 uppercase tracking-wider text-shadow">
                Email
            </label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="admin@example.com"
                class="glass-input w-full h-10 px-3 rounded-lg text-white placeholder-white/40 text-sm outline-none"
                required>
        </div>

        <div>
            <label for="password" class="block text-[10px] font-semibold text-white/70 mb-1.5 uppercase tracking-wider text-shadow">
                Password
            </label>
            <div class="relative">
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter password"
                    class="glass-input w-full h-10 px-3 pr-10 rounded-lg text-white placeholder-white/40 text-sm outline-none"
                    required>

                <button
                    type="button"
                    onclick="togglePassword()"
                    class="absolute inset-y-0 right-3 flex items-center text-white/40 hover:text-emerald-400 transition-colors"
                    aria-label="Toggle password visibility">
                    <svg id="eye-open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <svg id="eye-closed" class="w-4 h-4 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10 10 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.956 9.956 0 012.042-3.368M6.223 6.223A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.97 9.97 0 01-4.132 5.411M15 12a3 3 0 00-4.243-4.243M3 3l18 18" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="flex items-center justify-between text-[10px] pt-1">
            <label class="flex items-center gap-1.5 text-white/70 cursor-pointer group">
                <input
                    type="checkbox"
                    name="remember"
                    class="w-3 h-3 rounded border-white/20 bg-white/10 text-emerald-500 focus:ring-emerald-500 cursor-pointer transition-colors">
                <span class="group-hover:text-white transition-colors text-shadow">Remember</span>
            </label>

            <a href="#" class="font-semibold text-emerald-400 hover:text-emerald-300 transition-colors hover:underline underline-offset-2 text-shadow">
                Forgot?
            </a>
        </div>

        <button
            type="submit"
            class="btn-glow w-full h-10 rounded-lg text-white font-bold text-xs uppercase tracking-wider">
            Sign In
        </button>
    </form>

    <!-- Footer -->
    <div class="mt-6 pt-4 border-t border-white/5 text-center">
        <p class="text-[10px] text-white/40 text-shadow">
            © {{ date('Y') }} Joseline International Manpower
        </p>
    </div>
</div>

<script>
    function togglePassword() {
        const password = document.getElementById('password');
        const eyeOpen = document.getElementById('eye-open');
        const eyeClosed = document.getElementById('eye-closed');

        if (password.type === 'password') {
            password.type = 'text';
            eyeOpen.classList.add('hidden');
            eyeClosed.classList.remove('hidden');
        } else {
            password.type = 'password';
            eyeOpen.classList.remove('hidden');
            eyeClosed.classList.add('hidden');
        }
    }
</script>
@endsection