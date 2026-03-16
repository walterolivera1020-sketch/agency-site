@extends('layouts.admin')

@php
    $pageTitle = 'Inquiry Details';
    $pageSubtitle = 'Review and respond to inquiry information';
@endphp

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-sm p-6 sm:p-8 border border-slate-100">
    <div class="flex items-center justify-between mb-8">
        <div>
            <h2 class="text-2xl font-bold text-slate-800">Inquiry Information</h2>
            <p class="text-sm text-slate-500 mt-1">Submitted on {{ $inquiry->created_at->format('M d, Y h:i A') }}</p>
        </div>

        <a href="{{ route('admin.inquiries.index') }}" class="px-4 py-2 rounded-xl bg-slate-100 text-slate-700 hover:bg-slate-200 transition font-medium">
            Back
        </a>
    </div>

    @if(session('success'))
        <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 text-green-700 px-4 py-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid sm:grid-cols-2 gap-6 mb-6">
        <div class="rounded-2xl bg-slate-50 p-5 border border-slate-100">
            <p class="text-sm text-slate-500">Full Name</p>
            <p class="font-semibold text-slate-800 mt-1">{{ $inquiry->full_name }}</p>
        </div>

        <div class="rounded-2xl bg-slate-50 p-5 border border-slate-100">
            <p class="text-sm text-slate-500">Email</p>
            <p class="font-semibold text-slate-800 mt-1">{{ $inquiry->email }}</p>
        </div>

        <div class="rounded-2xl bg-slate-50 p-5 border border-slate-100">
            <p class="text-sm text-slate-500">Phone</p>
            <p class="font-semibold text-slate-800 mt-1">{{ $inquiry->phone ?? 'N/A' }}</p>
        </div>

        <div class="rounded-2xl bg-slate-50 p-5 border border-slate-100">
            <p class="text-sm text-slate-500">Position</p>
            <p class="font-semibold text-slate-800 mt-1">{{ $inquiry->position ?? 'General Inquiry' }}</p>
        </div>

        <div class="rounded-2xl bg-slate-50 p-5 border border-slate-100 sm:col-span-2">
            <p class="text-sm text-slate-500">Status</p>
            <p class="font-semibold text-slate-800 mt-1">{{ ucfirst($inquiry->status) }}</p>
        </div>
    </div>

    <div class="mb-8">
        <p class="text-sm text-slate-500 mb-2">Message</p>
        <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 text-slate-700 whitespace-pre-line leading-relaxed">
            {{ $inquiry->message }}
        </div>
    </div>

    <div class="flex flex-col sm:flex-row gap-3">
        <a href="mailto:{{ $inquiry->email }}"
           class="px-5 py-3 bg-indigo-600 text-white rounded-2xl hover:bg-indigo-700 transition font-semibold text-center">
            Reply by Email
        </a>

        <form action="{{ route('admin.inquiries.replied', $inquiry) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit"
                class="w-full sm:w-auto px-5 py-3 bg-green-600 text-white rounded-2xl hover:bg-green-700 transition font-semibold">
                Mark as Replied
            </button>
        </form>
    </div>
</div>
@endsection