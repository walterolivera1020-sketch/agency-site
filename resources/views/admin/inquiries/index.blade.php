@extends('layouts.admin')

@section('content')
<div class="bg-white rounded-2xl shadow-sm p-6">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Inquiries</h2>
    </div>

    @if(session('success'))
        <div class="mb-4 rounded-lg bg-green-100 border border-green-200 text-green-700 px-4 py-3">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b text-sm text-gray-500">
                    <th class="py-3">Name</th>
                    <th class="py-3">Email</th>
                    <th class="py-3">Position</th>
                    <th class="py-3">Status</th>
                    <th class="py-3">Date</th>
                    <th class="py-3">Action</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700">
                @forelse($inquiries as $inquiry)
                    <tr class="border-b border-gray-100">
                        <td class="py-4">{{ $inquiry->full_name }}</td>
                        <td class="py-4">{{ $inquiry->email }}</td>
                        <td class="py-4">{{ $inquiry->position ?? 'General Inquiry' }}</td>
                        <td class="py-4">
                            <span class="px-3 py-1 rounded-full text-xs
                                @if($inquiry->status === 'new') bg-red-100 text-red-700
                                @elseif($inquiry->status === 'read') bg-yellow-100 text-yellow-700
                                @else bg-green-100 text-green-700
                                @endif">
                                {{ ucfirst($inquiry->status) }}
                            </span>
                        </td>
                        <td class="py-4">{{ $inquiry->created_at->format('M d, Y h:i A') }}</td>
                        <td class="py-4">
                            <a href="{{ route('admin.inquiries.show', $inquiry) }}"
                               class="text-indigo-600 hover:underline font-medium">
                                View
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-6 text-center text-gray-500">No inquiries found.</td>
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