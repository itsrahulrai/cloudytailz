@extends('layouts.app')

@section('title', 'Pet Visit Inquiry Details')
@section('page-title', 'Pet Visit Inquiry Details')

@section('content')

    <style>
        .detail-card {
            max-width: 800px;
            margin: auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .05);
            overflow: hidden;
        }

        .detail-header {
            padding: 30px;
            border-bottom: 1px solid #eef2f7;
        }

        .inquiry-id {
            font-size: 12px;
            color: #8b92a9;
            font-weight: 600;
        }

        .inquiry-name {
            font-size: 28px;
            font-weight: 700;
            margin: 8px 0;
            color: #1e293b;
        }

        .inquiry-email {
            color: #64748b;
            font-size: 14px;
        }

        .detail-body {
            padding: 30px;
        }

        .detail-row {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .detail-icon {
            font-size: 20px;
            width: 35px;
        }

        .detail-label {
            font-size: 12px;
            font-weight: 700;
            color: #8b92a9;
            text-transform: uppercase;
        }

        .detail-value {
            font-size: 15px;
            font-weight: 600;
            color: #334155;
        }

        .msg {
            line-height: 1.6;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
        }

        .status-new {
            background: #eff6ff;
            color: #2563eb;
        }

        .status-pending {
            background: #fffbeb;
            color: #d97706;
        }

        .status-done {
            background: #f0fdf4;
            color: #16a34a;
        }

        .detail-footer {
            padding: 25px 30px;
            border-top: 1px solid #eef2f7;
            display: flex;
            justify-content: space-between;
        }

        .btn-back {
            background: #f4f6fb;
            padding: 10px 16px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 700;
        }

        .btn-delete {
            background: #fee2e2;
            border: none;
            padding: 10px 16px;
            border-radius: 10px;
            font-weight: 700;
            color: #dc2626;
        }
    </style>


    <div class="detail-card">

        <div class="detail-header">
            <div class="inquiry-id">
                # {{ $inquiry->id }}
            </div>

            <p class="inquiry-name">
                {{ $inquiry->name }}
            </p>

            <div class="inquiry-email">
                {{ $inquiry->email }}
            </div>
        </div>


        <div class="detail-body">

            <div class="detail-row">
                <div class="detail-icon">📱</div>
                <div>
                    <div class="detail-label">Phone</div>
                    <div class="detail-value">
                        {{ $inquiry->phone }}
                    </div>
                </div>
            </div>


            <div class="detail-row">
                <div class="detail-icon">🏠</div>
                <div>
                    <div class="detail-label">Service</div>
                    <div class="detail-value">
                        {{ str_replace('_', ' ', $inquiry->services) }}
                    </div>
                </div>
            </div>


            <div class="detail-row">
                <div class="detail-icon">💬</div>
                <div>
                    <div class="detail-label">Message</div>
                    <div class="detail-value msg">
                        {{ $inquiry->message ?? '—' }}
                    </div>
                </div>
            </div>


            <div class="detail-row">
                <div class="detail-icon">🗓️</div>
                <div>
                    <div class="detail-label">Submitted On</div>
                    <div class="detail-value">
                        {{ $inquiry->created_at->format('d M Y, h:i A') }}
                    </div>
                </div>
            </div>


            <div class="detail-row">
                <div class="detail-icon">🔖</div>
                <div>
                    <div class="detail-label">Status</div>

                    <div class="detail-value">
                        <span class="status-badge status-{{ $inquiry->status }}">
                            {{ ucfirst($inquiry->status) }}
                        </span>
                    </div>

                </div>
            </div>

        </div>


        <div class="detail-footer">

            <a href="{{ route('admin.pet-visits.index') }}" class="btn-back">
                ← Back to List
            </a>

            <form method="POST" action="{{ route('admin.pet-visits.destroy', $inquiry->id) }}"
                onsubmit="return confirm('Delete this inquiry?')">

                @csrf
                @method('DELETE')

                <button class="btn-delete">
                    🗑 Delete
                </button>

            </form>

        </div>

    </div>

@endsection
