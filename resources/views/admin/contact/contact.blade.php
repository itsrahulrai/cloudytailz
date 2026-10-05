@extends('layouts.app')
@section('title', 'Contact Inquiries — Cloudytailz')
@section('page-title', 'Contact Inquiries')

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

        .status-select {
            font-size: 11px;
            width: 105px;
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 4px 8px;
            font-weight: 600;
        }

        .sel-new {
            background: #eff6ff;
            color: #2563eb;
        }

        .sel-pending {
            background: #fffbeb;
            color: #d97706;
        }

        .sel-done {
            background: #f0fdf4;
            color: #16a34a;
        }

        .btn-view {
            background: #f4f6fb;
            padding: 4px 12px;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 700;
            text-decoration: none;
        }

        .btn-del {
            background: #fee2e2;
            color: #dc2626;
            padding: 4px 12px;
            border: none;
            border-radius: 8px;
            font-size: 11px;
            font-weight: 700;
        }

        .table thead th {
            font-size: 11px;
            text-transform: uppercase;
            color: #8b92a9;
        }

        .table tbody td {
            padding: 12px 14px;
            vertical-align: middle;
        }
    </style>


    <div class="table-card">

        <div class="table-card-header">
            <h6>📩 Contact Inquiries</h6>
            <span style="font-size:12px;color:#8b92a9;">
                Total: {{ $contactInquiries->total() }}
            </span>
        </div>


        @if (session('success'))
            <div class="alert alert-success mx-4 mt-3">
                {{ session('success') }}
            </div>
        @endif


        <div class="table-responsive">
            <table class="table mb-0">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($contactInquiries as $row)
                        <tr>

                            <td>{{ $row->id }}</td>

                            <td>
                                <strong>
                                    {{ $row->fname }} {{ $row->lname }}
                                </strong>
                            </td>

                            <td>{{ $row->email }}</td>

                            <td>{{ $row->phone }}</td>

                            <td>
                                {{ $row->created_at->format('d M Y') }}
                            </td>

                            <td>
                                <form method="POST" action="{{ route('admin.contacts.status', $row->id) }}">
                                    @csrf
                                    @method('PATCH')

                                    <select name="status" onchange="this.form.submit(); updateSelectStyle(this)"
                                        class="status-select sel-{{ $row->status }}">

                                        <option value="new" {{ $row->status == 'new' ? 'selected' : '' }}>
                                            🔵 New
                                        </option>

                                        <option value="pending" {{ $row->status == 'pending' ? 'selected' : '' }}>
                                            🟡 Pending
                                        </option>

                                        <option value="done" {{ $row->status == 'done' ? 'selected' : '' }}>
                                            🟢 Done
                                        </option>

                                    </select>

                                </form>
                            </td>


                            <td>
                                <div class="d-flex gap-1">

                                    <a href="{{ route('admin.contacts.show', $row->id) }}" class="btn-view">
                                        View
                                    </a>

                                    <form method="POST" action="{{ route('admin.contacts.destroy', $row->id) }}"
                                        onsubmit="return confirm('Delete this inquiry?')">

                                        @csrf
                                        @method('DELETE')

                                        <button class="btn-del">
                                            Del
                                        </button>

                                    </form>

                                </div>
                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="text-center py-5">
                                📭 No contact inquiries found.
                            </td>
                        </tr>
                    @endforelse

                </tbody>

            </table>
        </div>


        <div class="px-4 py-3">
            {{ $contactInquiries->links() }}
        </div>

    </div>


    <script>
        function updateSelectStyle(el) {
            el.className = 'status-select';
            el.classList.add('sel-' + el.value);
        }

        document.querySelectorAll('.status-select').forEach(updateSelectStyle);
    </script>

@endsection
