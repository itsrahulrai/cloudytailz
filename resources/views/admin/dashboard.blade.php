@extends('layouts.app')

@section('title', 'Dashboard — Cloudytailz')
@section('page-title', 'Dashboard')

@push('styles')
    <link rel="stylesheet" href="{{ asset_url('assets/css/dashboard.css') }}">
@endpush

@section('content')

    {{-- ── WELCOME BANNER ── --}}
    <div class="welcome-banner">
        <div class="welcome-text">
            <h2>Welcome back, {{ Auth::user()->name ?? 'Admin' }} 👋</h2>
            <p>Here's what's happening with your pet clinic today — {{ now()->format('l, d M Y') }}</p>
            <div class="welcome-actions">
                <a href="{{ route('admin.pet-visits.index') }}" class="btn-banner-primary">🏠 Pet Visits</a>
                <a href="{{ route('admin.packages.index') }}" class="btn-banner-ghost">📦 Packages</a>
                <a href="{{ route('admin.contacts.index') }}" class="btn-banner-ghost">💬 Contacts</a>
                <a href="{{ route('admin.categories.index') }}" class="btn-banner-ghost">🏷️ Categories</a>
                <a href="{{ route('admin.blogs.index') }}" class="btn-banner-ghost">📰 Blogs</a>
            </div>
        </div>
        <div class="welcome-emoji d-none d-md-block">🐾</div>
    </div>



    {{-- ── SECOND ROW ── --}}
    <div class="row g-3 mb-4">

        {{-- Status Summary --}}
        <div class="col-md-4">
            <div class="table-card h-100">
                <div class="table-card-header">
                    <h6>📊 Inquiry Status</h6>
                </div>

                <div class="d-flex quick-stats-row">
                    <div class="quick-stat flex-fill">
                        <div class="quick-stat-val color-red">{{ $stats['new_count'] }}</div>
                        <div class="quick-stat-lbl">New</div>
                    </div>
                    <div class="quick-stat flex-fill">
                        <div class="quick-stat-val color-yellow">{{ $stats['pending'] }}</div>
                        <div class="quick-stat-lbl">Pending</div>
                    </div>
                    <div class="quick-stat flex-fill">
                        <div class="quick-stat-val color-green">{{ $stats['done'] }}</div>
                        <div class="quick-stat-lbl">Done</div>
                    </div>
                </div>

                @php
                    $total = max($stats['total'], 1);
                    $newPct = round(($stats['new_count'] / $total) * 100);
                    $pendPct = round(($stats['pending'] / $total) * 100);
                    $donePct = round(($stats['done'] / $total) * 100);
                @endphp

                <div class="p-4">
                    <div class="progress-item mb-3">
                        <div class="progress-label">
                            <span>🔴 New</span>
                            <span class="color-red">{{ $newPct }}%</span>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bar-red" style="width:{{ $newPct }}%"></div>
                        </div>
                    </div>
                    <div class="progress-item mb-3">
                        <div class="progress-label">
                            <span>🟡 Pending</span>
                            <span class="color-yellow">{{ $pendPct }}%</span>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bar-yellow" style="width:{{ $pendPct }}%"></div>
                        </div>
                    </div>
                    <div class="progress-item">
                        <div class="progress-label">
                            <span>🟢 Resolved</span>
                            <span class="color-green">{{ $donePct }}%</span>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bar-green" style="width:{{ $donePct }}%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Inquiry Breakdown --}}
        <div class="col-md-8">
            <div class="table-card h-100">
                <div class="table-card-header">
                    <h6>📋 Inquiry Breakdown</h6>
                    <span class="text-muted-sm">Total {{ $stats['total'] }} inquiries</span>
                </div>
                <div class="p-4">

                    <div class="breakdown-item">
                        <div class="breakdown-icon icon-blue">🏠</div>
                        <div class="flex-grow-1">
                            <div class="breakdown-title">Pet Visit at Home</div>
                            <div class="breakdown-sub">Home/clinic visits for dogs & cats</div>
                        </div>
                        <div class="text-end">
                            <div class="breakdown-count color-blue">{{ $stats['pet_visits'] }}</div>
                            <a href="{{ route('admin.pet-visits.index') }}" class="badge-type badge-visit link-badge">View
                                All →</a>
                        </div>
                    </div>

                    <div class="breakdown-item">
                        <div class="breakdown-icon icon-green">📦</div>
                        <div class="flex-grow-1">
                            <div class="breakdown-title">Packages</div>
                            <div class="breakdown-sub">Care & grooming package inquiries</div>
                        </div>
                        <div class="text-end">
                            <div class="breakdown-count color-teal">{{ $stats['packages'] }}</div>
                            <a href="{{ route('admin.packages.index') }}"
                                class="badge-type badge-package link-badge">View All →</a>
                        </div>
                    </div>

                    <div class="breakdown-item">
                        <div class="breakdown-icon icon-pink">💬</div>
                        <div class="flex-grow-1">
                            <div class="breakdown-title">Contact Form</div>
                            <div class="breakdown-sub">General queries & messages</div>
                        </div>
                        <div class="text-end">
                            <div class="breakdown-count color-pink">{{ $stats['contacts'] }}</div>
                            <a href="{{ route('admin.contacts.index') }}"
                                class="badge-type badge-contact link-badge">View All →</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    {{-- ── RECENT INQUIRIES TABLE ── --}}
    <div class="table-card">
        <div class="table-card-header">
            <h6>🕐 Recent Inquiries</h6>
            <span class="text-muted-sm">Last 10 entries</span>
        </div>

        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Type</th>
                        <th>Details</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $avatarBg = ['#fff7ed','#dbeafe','#d1fae5','#fce7f3']; @endphp

                    @forelse($recent as $i => $row)
                        <tr>
                            <td class="row-id">#{{ str_pad($i + 1, 3, '0', STR_PAD_LEFT) }}</td>

                            <td>
                                <div class="name-cell">
                                    <div class="avatar-initial" style="background:{{ $avatarBg[$i % 4] }};">
                                        {{ strtoupper(substr($row['type'] === 'contact' ? $row['fname'] : $row['name'], 0, 1)) }}
                                    </div>
                                    <div>
                                        <div class="name-main">
                                            {{ $row['type'] === 'contact' ? $row['fname'] . ' ' . $row['lname'] : $row['name'] }}
                                        </div>
                                        <div class="name-sub">{{ $row['phone'] ?? '—' }}</div>
                                    </div>
                                </div>
                            </td>

                            <td class="cell-muted">{{ $row['email'] ?? '—' }}</td>

                            <td>
                                @if ($row['type'] === 'pet_visit')
                                    <span class="badge-type badge-visit">🏠 Pet Visit</span>
                                @elseif($row['type'] === 'package')
                                    <span class="badge-type badge-package">📦 Package</span>
                                @else
                                    <span class="badge-type badge-contact">💬 Contact</span>
                                @endif
                            </td>

                            <td class="cell-truncate">
                                {{ $row['message'] ?? ($row['package'] ?? ($row['services'] ?? '—')) }}
                            </td>

                            <td class="cell-date">
                                <i class="bi bi-calendar3"></i>
                                {{ \Carbon\Carbon::parse($row['created_at'])->format('d M Y') }}
                                <div class="date-ago">
                                    {{ \Carbon\Carbon::parse($row['created_at'])->diffForHumans() }}
                                </div>
                            </td>

                            <td>
                                @if ($row['status'] === 'new')
                                    <span class="badge-status badge-new">● New</span>
                                @elseif($row['status'] === 'pending')
                                    <span class="badge-status badge-pending">● Pending</span>
                                @else
                                    <span class="badge-status badge-done">✓ Done</span>
                                @endif
                            </td>

                            <td>
                                @if ($row['type'] === 'pet_visit')
                                    <a href="{{ route('admin.pet-visits.show', $row['id']) }}" class="btn-view">View
                                        →</a>
                                @elseif($row['type'] === 'package')
                                    <a href="{{ route('admin.packages.show', $row['id']) }}" class="btn-view">View →</a>
                                @else
                                    <a href="{{ route('admin.contacts.show', $row['id']) }}" class="btn-view">View →</a>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8">
                                <div class="empty-state">
                                    <div class="empty-icon">🐾</div>
                                    <p>No inquiries yet. They'll show up here once submitted!</p>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="table-footer">
            <span class="text-muted-sm">
                Showing {{ count($recent) }} of {{ $stats['total'] }} total inquiries
            </span>
            <a href="{{ route('admin.pet-visits.index') }}" class="link-orange">
                View All Pet Visits →
            </a>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset_url('assets/js/dashboard-us.js') }}"></script>
@endpush
