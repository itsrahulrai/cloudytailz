@extends('layouts.app')
@section('title', 'Package Inquiry Detail — Cloudytailz')
@section('page-title', 'Package Inquiry Detail')

@section('content')
    <style>
        .detail-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 2px 16px rgba(99, 102, 241, 0.07);
            max-width: 520px;
            margin: 0 auto;
            overflow: hidden;
        }

        .detail-header {
            background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            padding: 28px 32px 24px;
            color: #fff;
        }

        .detail-header .inquiry-id {
            font-size: 11px;
            opacity: 0.7;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 6px;
        }

        .detail-header .inquiry-name {
            font-size: 22px;
            font-weight: 800;
            margin: 0;
        }

        .detail-body {
            padding: 28px 32px;
        }

        .detail-row {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 0;
            border-bottom: 1px solid #f0f2f8;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #f0f4ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            flex-shrink: 0;
        }

        .detail-label {
            font-size: 11px;
            color: #8b92a9;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
        }

        .detail-value {
            font-size: 14px;
            font-weight: 700;
            color: #1e293b;
        }

        .pkg-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            background: #f0f4ff;
            color: #4f46e5;
            text-transform: capitalize;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
        }

        .status-badge::before {
            content: '';
            width: 7px;
            height: 7px;
            border-radius: 50%;
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

        .detail-footer {
            padding: 18px 32px;
            background: #fafbff;
            border-top: 1px solid #f0f2f8;
            display: flex;
            gap: 10px;
        }

        .btn-back {
            background: #f0f4ff;
            color: #4f46e5;
            font-size: 13px;
            font-weight: 700;
            border-radius: 10px;
            padding: 9px 20px;
            border: none;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-back:hover {
            background: #e0e7ff;
            color: #4f46e5;
        }

        .btn-delete {
            background: #fee2e2;
            color: #dc2626;
            font-size: 13px;
            font-weight: 700;
            border-radius: 10px;
            padding: 9px 20px;
            border: none;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-delete:hover {
            background: #fecaca;
        }
    </style>

    <div class="detail-card">

        {{-- Header --}}
        <div class="detail-header">
            <div class="inquiry-id"># {{ $packageInquiry->id }}</div>
            <p class="inquiry-name">{{ $packageInquiry->name }}</p>
        </div>

        {{-- Body --}}
        <div class="detail-body">

            <div class="detail-row">
                <div class="detail-icon">📱</div>
                <div>
                    <div class="detail-label">Phone</div>
                    <div class="detail-value">{{ $packageInquiry->phone }}</div>
                </div>
            </div>

            <div class="detail-row">
                <div class="detail-icon">📦</div>
                <div>
                    <div class="detail-label">Package</div>
                    <div class="detail-value">
                        <span class="pkg-badge">{{ str_replace('_', ' ', $packageInquiry->package) }}</span>
                    </div>
                </div>
            </div>

            <div class="detail-row">
                <div class="detail-icon">🗓️</div>
                <div>
                    <div class="detail-label">Submitted On</div>
                    <div class="detail-value">{{ $packageInquiry->created_at->format('d M Y, h:i A') }}</div>
                </div>
            </div>

            <div class="detail-row">
                <div class="detail-icon">🔖</div>
                <div>
                    <div class="detail-label">Status</div>
                    <div class="detail-value">
                        <span class="status-badge status-{{ $packageInquiry->status }}">
                            {{ ucfirst($packageInquiry->status) }}
                        </span>
                    </div>
                </div>
            </div>

        </div>

        {{-- Footer --}}
        <div class="detail-footer">
            <a href="{{ route('admin.packages.index') }}" class="btn-back">← Back to List</a>
            <form method="POST" action="{{ route('admin.packages.destroy', $packageInquiry->id) }}"
                onsubmit="return confirm('Delete this inquiry?')">
                @csrf @method('DELETE')
                <button class="btn-delete">🗑 Delete</button>
            </form>
        </div>

    </div>
@endsection
