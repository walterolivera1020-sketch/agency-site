@extends('layouts.admin')

@php
    $pageTitle = 'Inquiries';
    $pageSubtitle = 'Manage and review all client inquiries';
@endphp

@section('content')
<div class="bg-white rounded-3xl shadow-sm p-6 border border-slate-100">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-slate-800">Inquiries List</h2>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded-2xl bg-green-50 border border-green-200 text-green-700 px-4 py-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-slate-200 text-sm text-slate-500">
                    <th class="py-4">Name</th>
                    <th class="py-4">Email</th>
                    <th class="py-4">Position</th>
                    <th class="py-4">Status</th>
                    <th class="py-4">Date</th>
                    <th class="py-4 text-right">Action</th>
                </tr>
            </thead>
            <tbody class="text-sm text-slate-700">
                @forelse($inquiries as $inquiry)
                    <tr class="border-b border-slate-100 hover:bg-slate-50/80 transition">
                        <td class="py-4 font-medium">{{ $inquiry->full_name }}</td>
                        <td class="py-4">{{ $inquiry->email }}</td>
                        <td class="py-4">{{ $inquiry->position ?? 'General Inquiry' }}</td>
                        <td class="py-4">
                            <span class="px-3 py-1 rounded-full text-xs font-semibold
                                @if($inquiry->status === 'new') bg-red-100 text-red-700
                                @elseif($inquiry->status === 'read') bg-yellow-100 text-yellow-700
                                @else bg-green-100 text-green-700
                                @endif">
                                {{ ucfirst($inquiry->status) }}
                            </span>
                        </td>
                        <td class="py-4">{{ $inquiry->created_at->format('M d, Y h:i A') }}</td>
                        <td class="py-4 text-right">
                            <a href="{{ route('admin.inquiries.show', $inquiry) }}"
                               class="inline-flex items-center px-4 py-2 rounded-xl bg-indigo-50 text-indigo-600 hover:bg-indigo-100 font-semibold transition">
                                View Details
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-8 text-center text-slate-500">No inquiries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $inquiries->links() }}
    </div>
</div>
@endsection