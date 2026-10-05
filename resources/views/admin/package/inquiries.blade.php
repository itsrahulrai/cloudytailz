@extends('layouts.app')
@section('title', 'Package Inquiries — Cloudytailz')
@section('page-title', 'Package Inquiries')

@section('content')
    <style>
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.4px;
        }

        .status-badge::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            display: inline-block;
        }

        .status-new {
            background: #eff6ff;
            color: #2563eb;
        }

        .status-new::before {
            background: #2563eb;
        }

        .status-pending {
            background: #fffbeb;
            color: #d97706;
        }

        .status-pending::before {
            background: #d97706;
        }

        .status-done {
            background: #f0fdf4;
            color: #16a34a;
        }

        .status-done::before {
            background: #16a34a;
        }

        .pkg-badge {
            display: inline-block;
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            background: #f0f4ff;
            color: #4f46e5;
            text-transform: capitalize;
        }

        .status-select {
            font-size: 11px;
            width: 105px;
            border-radius: 8px;
            border: 1.5px solid #e5e7eb;
            padding: 3px 6px;
            cursor: pointer;
            font-weight: 600;
            outline: none;
            transition: border 0.2s;
        }

        .status-select:focus {
            border-color: #6366f1;
        }

        .status-select.sel-new {
            background: #eff6ff;
            color: #2563eb;
        }

        .status-select.sel-pending {
            background: #fffbeb;
            color: #d97706;
        }

        .status-select.sel-done {
            background: #f0fdf4;
            color: #16a34a;
        }

        .btn-view {
            background: #f4f6fb;
            color: #374151;
            font-size: 11px;
            font-weight: 700;
            border-radius: 8px;
            padding: 4px 12px;
            border: none;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-view:hover {
            background: #e0e7ff;
            color: #4f46e5;
        }

        .btn-del {
            background: #fee2e2;
            color: #dc2626;
            font-size: 11px;
            font-weight: 700;
            border-radius: 8px;
            padding: 4px 12px;
            border: none;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-del:hover {
            background: #fecaca;
        }

        .table thead th {
            font-size: 11px;
            font-weight: 700;
            color: #8b92a9;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #f0f2f8;
            padding: 10px 14px;
        }

        .table tbody td {
            padding: 12px 14px;
            vertical-align: middle;
            border-bottom: 1px solid #f7f8fc;
        }

        .table tbody tr:hover {
            background: #fafbff;
        }
    </style>

    <div class="table-card">
        <div class="table-card-header">
            <h6>📦 Package Inquiries</h6>
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
                        <th>Phone</th>
                        <th>Package</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($inquiries as $row)
                        <tr>
                            <td style="color:#8b92a9;font-size:12px;">{{ $row->id }}</td>

                            <td style="font-weight:700;color:#1e293b;">{{ $row->name }}</td>

                            <td style="font-size:13px;color:#374151;">{{ $row->phone }}</td>

                            <td>
                                <span class="pkg-badge">{{ str_replace('_', ' ', $row->package) }}</span>
                            </td>

                            <td style="font-size:12px;color:#8b92a9;">{{ $row->created_at->format('d M Y') }}</td>

                            <td>
                                <form method="POST" action="{{ route('admin.packages.status', $row->id) }}">
                                    @csrf @method('PATCH')
                                    <select name="status" onchange="this.form.submit(); updateSelectStyle(this)"
                                        class="status-select sel-{{ $row->status }}">
                                        <option value="new" {{ $row->status === 'new' ? 'selected' : '' }}>🔵 New
                                        </option>
                                        <option value="pending" {{ $row->status === 'pending' ? 'selected' : '' }}>🟡
                                            Pending</option>
                                        <option value="done" {{ $row->status === 'done' ? 'selected' : '' }}>🟢 Done
                                        </option>
                                    </select>
                                </form>
                            </td>

                            <td>
                                <div class="d-flex gap-1 align-items-center">
                                    <a href="{{ route('admin.packages.show', $row->id) }}" class="btn-view">View</a>
                                    <form method="POST" action="{{ route('admin.packages.destroy', $row->id) }}"
                                        onsubmit="return confirm('Delete this inquiry?')">
                                        @csrf @method('DELETE')
                                        <button class="btn-del">Del</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center py-5" style="color:#8b92a9;">
                                <div style="font-size:32px;">📭</div>
                                <div style="margin-top:8px;font-size:13px;">No package inquiries yet.</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="px-4 py-3" style="border-top:1px solid #f0f2f8;">
            {{ $inquiries->links() }}
        </div>
    </div>

    <script>
        // Select change hone par color update
        function updateSelectStyle(el) {
            el.className = 'status-select';
            el.classList.add('sel-' + el.value);
        }

        // Page load par bhi apply karo
        document.querySelectorAll('.status-select').forEach(updateSelectStyle);
    </script>
@endsection
