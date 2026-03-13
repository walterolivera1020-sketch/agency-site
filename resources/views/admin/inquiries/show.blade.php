@extends('layouts.admin')

@section('content')
<div class="bg-white rounded-2xl shadow-sm p-6">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Inquiry Details</h2>
        <a href="{{ route('admin.inquiries.index') }}" class="text-indigo-600 hover:underline">Back</a>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded-lg bg-green-100 border border-green-200 text-green-700 px-4 py-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="space-y-4">
        <div>
            <p class="text-sm text-gray-500">Full Name</p>
            <p class="font-medium text-gray-800">{{ $inquiry->full_name }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Email</p>
            <p class="font-medium text-gray-800">{{ $inquiry->email }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Phone</p>
            <p class="font-medium text-gray-800">{{ $inquiry->phone ?? 'N/A' }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Position</p>
            <p class="font-medium text-gray-800">{{ $inquiry->position ?? 'General Inquiry' }}</p>
        </div>

        <div>
            <p class="text-sm text-gray-500">Message</p>
            <div class="mt-2 p-4 bg-gray-50 rounded-xl border text-gray-700 whitespace-pre-line">
                {{ $inquiry->message }}
            </div>
        </div>

        <div>
            <p class="text-sm text-gray-500">Status</p>
            <p class="font-medium text-gray-800">{{ ucfirst($inquiry->status) }}</p>
        </div>

        <div class="pt-4 flex gap-3">
            <a href="mailto:{{ $inquiry->email }}"
               class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                Reply by Email
            </a>

            <form action="{{ route('admin.inquiries.replied', $inquiry) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit"
                    class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">
                    Mark as Replied
                </button>
            </form>
        </div>
    </div>
</div>
@endsection