@php
    $pageTitle = $pageTitle ?? 'Dashboard';
    $pageSubtitle = $pageSubtitle ?? 'Welcome back, Admin';
@endphp

<header class="bg-white/90 backdrop-blur-md border-b border-slate-200 px-6 py-4 flex items-center justify-between sticky top-0 z-30">
    <div>
        <h1 class="text-2xl md:text-3xl font-bold text-slate-800">{{ $pageTitle }}</h1>
        <p class="text-sm text-slate-500">{{ $pageSubtitle }}</p>
    </div>

    <div class="flex items-center gap-4">
        <button class="relative p-2 rounded-full hover:bg-slate-100 transition">
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full"></span>
            <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0a3 3 0 11-6 0m6 0H9" />
            </svg>
        </button>

        <div class="flex items-center gap-3 rounded-2xl px-3 py-2 hover:bg-slate-50 transition">
            <img
                src="{{ asset('images/walter.png') }}"
                alt="Walter"
                class="w-11 h-11 rounded-full object-cover border-2 border-slate-200">

            <div class="hidden sm:block">
                <p class="text-sm font-semibold text-slate-800">Walter Olivera</p>
                <p class="text-xs text-slate-500">Administrator</p>
            </div>
        </div>
    </div>
</header>