@extends('layouts.app')
@section('title', 'Pet Visit Inquiries — Cloudytailz')
@section('page-title', 'Pet Visit Inquiries')

@section('content')
    <div class="table-card">
        <div class="table-card-header">
            <h6>🏠 Pet Visit Requests</h6>
            <span style="font-size:12px;color:#8b92a9;">Total: {{ $inquiries->total() }}</span>
        </div>

        @if (session('success'))
            <div class="alert alert-success mx-4 mt-3">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Service</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($inquiries as $row)
                        <tr>
                            <td style="color:#8b92a9;font-size:12px;">{{ $row->id }}</td>
                            <td style="font-weight:700;">{{ $row->name }}</td>
                            <td style="font-size:12px;">{{ $row->email }}</td>
                            <td>{{ $row->phone }}</td>
                            <td><span class="badge-type badge-visit">{{ str_replace('_', ' ', $row->services) }}</span></td>
                            <td
                                style="max-width:160px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-size:12px;color:#6b7280;">
                                {{ $row->message ?? '—' }}
                            </td>
                            <td>
                                <form method="POST" action="{{ route('admin.pet-visits.status', $row->id) }}">
                                    @csrf @method('PATCH')
                                    <select name="status" onchange="this.form.submit()" class="form-select form-select-sm"
                                        style="font-size:11px;width:100px;border-radius:8px;">
                                        <option value="new" {{ $row->status === 'new' ? 'selected' : '' }}>New</option>
                                        <option value="pending" {{ $row->status === 'pending' ? 'selected' : '' }}>Pending
                                        </option>
                                        <option value="done" {{ $row->status === 'done' ? 'selected' : '' }}>Done</option>
                                    </select>
                                </form>
                            </td>
                            <td class="d-flex gap-1">
                                <a href="{{ route('admin.pet-visits.show', $row->id) }}" class="btn btn-sm"
                                    style="background:#f4f6fb;color:#374151;font-size:11px;font-weight:700;border-radius:8px;padding:3px 10px;">View</a>
                                <form method="POST" action="{{ route('admin.pet-visits.destroy', $row->id) }}"
                                    onsubmit="return confirm('Delete?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm"
                                        style="background:#fee2e2;color:#dc2626;font-size:11px;font-weight:700;border-radius:8px;padding:3px 10px;">Del</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center py-4" style="color:#8b92a9;">No records found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-4 py-3" style="border-top:1px solid #f0f2f8;">
            {{ $inquiries->links() }}
        </div>
    </div>
@endsection
