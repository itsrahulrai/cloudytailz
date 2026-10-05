<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Cloudytailz'))</title>
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset_url('assets/images/logo-png.png') }}">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --sidebar-width: 260px;
            --sidebar-bg: #1a1f36;
            --sidebar-active: #f97316;
            --sidebar-hover: rgba(249, 115, 22, 0.12);
            --topbar-height: 64px;
            --accent: #f97316;
            --accent-light: #fff7ed;
            --text-muted-custom: #8b92a9;
            --card-radius: 16px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: #f4f6fb;
            color: #1a1f36;
            margin: 0;
        }

        /* ── SIDEBAR ── */
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: var(--sidebar-width);
            height: 100vh;
            background: var(--sidebar-bg);
            display: flex;
            flex-direction: column;
            z-index: 1040;
            transition: transform 0.3s ease;
            overflow-y: auto;
        }

        #sidebar .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 22px 24px 18px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.07);
            text-decoration: none;
        }

        #sidebar .sidebar-brand .brand-icon {
            width: 40px;
            height: 40px;
            background: var(--accent);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        #sidebar .sidebar-brand .brand-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #fff;
            line-height: 1.2;
        }

        #sidebar .sidebar-brand .brand-sub {
            font-size: 11px;
            color: var(--text-muted-custom);
            font-weight: 400;
        }

        .sidebar-section-label {
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            color: var(--text-muted-custom);
            padding: 20px 24px 8px;
        }

        #sidebar .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 24px;
            color: #a0aec0;
            border-radius: 0;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.2s;
            text-decoration: none;
            position: relative;
        }

        #sidebar .nav-link i {
            font-size: 18px;
            width: 22px;
            text-align: center;
        }

        #sidebar .nav-link:hover {
            background: var(--sidebar-hover);
            color: #fff;
        }

        #sidebar .nav-link.active {
            background: var(--sidebar-hover);
            color: var(--accent);
        }

        #sidebar .nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: var(--accent);
            border-radius: 0 4px 4px 0;
        }

        .sidebar-badge {
            margin-left: auto;
            background: var(--accent);
            color: #fff;
            font-size: 10px;
            font-weight: 800;
            padding: 2px 7px;
            border-radius: 20px;
            line-height: 1.6;
        }

        .sidebar-footer {
            margin-top: auto;
            padding: 16px 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.07);
        }

        .sidebar-user {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-user .avatar {
            width: 36px;
            height: 36px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 800;
            font-size: 14px;
            flex-shrink: 0;
        }

        .sidebar-user .user-info .user-name {
            font-size: 13px;
            font-weight: 700;
            color: #fff;
        }

        .sidebar-user .user-info .user-role {
            font-size: 11px;
            color: var(--text-muted-custom);
        }

        /* ── TOPBAR ── */
        #topbar {
            position: fixed;
            top: 0;
            left: var(--sidebar-width);
            right: 0;
            height: var(--topbar-height);
            background: #fff;
            border-bottom: 1px solid #e8ecf4;
            display: flex;
            align-items: center;
            padding: 0 28px;
            z-index: 1030;
            gap: 16px;
        }

        #topbar .topbar-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 17px;
            color: #1a1f36;
            flex: 1;
        }

        .topbar-icon-btn {
            width: 38px;
            height: 38px;
            border: none;
            background: #f4f6fb;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            font-size: 17px;
            cursor: pointer;
            transition: background 0.2s;
            position: relative;
            text-decoration: none;
        }

        .topbar-icon-btn:hover {
            background: #eaecf5;
            color: #1a1f36;
        }

        .topbar-notif-dot {
            position: absolute;
            top: 7px;
            right: 7px;
            width: 8px;
            height: 8px;
            background: var(--accent);
            border-radius: 50%;
            border: 2px solid #fff;
        }

        .topbar-user {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .topbar-user .avatar {
            width: 36px;
            height: 36px;
            background: var(--accent);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 800;
            font-size: 14px;
        }

        /* ── MAIN CONTENT ── */
        #main-content {
            margin-left: var(--sidebar-width);
            padding-top: var(--topbar-height);
            min-height: 100vh;
        }

        .content-wrapper {
            padding: 28px;
        }

        /* ── CARDS ── */
        .stat-card {
            background: #fff;
            border-radius: var(--card-radius);
            padding: 24px;
            border: 1px solid #e8ecf4;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.08);
        }

        .stat-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 16px;
        }

        .stat-value {
            font-family: 'Poppins', sans-serif;
            font-size: 28px;
            font-weight: 700;
            color: #1a1f36;
            line-height: 1;
            margin-bottom: 4px;
        }

        .stat-label {
            font-size: 13px;
            color: #6b7280;
            font-weight: 600;
        }

        .stat-change {
            font-size: 12px;
            font-weight: 700;
            margin-top: 8px;
        }

        .stat-change.up {
            color: #10b981;
        }

        .stat-change.down {
            color: #ef4444;
        }

        /* ── TABLE CARD ── */
        .table-card {
            background: #fff;
            border-radius: var(--card-radius);
            border: 1px solid #e8ecf4;
            overflow: hidden;
        }

        .table-card-header {
            padding: 20px 24px 16px;
            border-bottom: 1px solid #f0f2f8;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .table-card-header h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 15px;
            margin: 0;
            color: #1a1f36;
        }

        .table thead th {
            background: #f8f9fc;
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            color: #8b92a9;
            border-bottom: 1px solid #e8ecf4;
            padding: 12px 16px;
        }

        .table tbody td {
            padding: 13px 16px;
            font-size: 13.5px;
            vertical-align: middle;
            border-bottom: 1px solid #f0f2f8;
            color: #374151;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .badge-type {
            font-size: 11px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 20px;
        }

        .badge-visit {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .badge-package {
            background: #d1fae5;
            color: #065f46;
        }

        .badge-contact {
            background: #fce7f3;
            color: #9d174d;
        }

        .badge-status {
            font-size: 11px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 20px;
        }

        .badge-new {
            background: #fff7ed;
            color: #c2410c;
        }

        .badge-pending {
            background: #fef9c3;
            color: #854d0e;
        }

        .badge-done {
            background: #dcfce7;
            color: #15803d;
        }

        /* ── PAGE TITLE ── */
        .page-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 22px;
            color: #1a1f36;
            margin-bottom: 4px;
        }

        .page-sub {
            font-size: 13px;
            color: #8b92a9;
            margin-bottom: 24px;
        }

        /* ── MOBILE OVERLAY ── */
        #sidebar-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1035;
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 991.98px) {
            #sidebar {
                transform: translateX(-100%);
            }

            #sidebar.open {
                transform: translateX(0);
            }

            #topbar {
                left: 0;
            }

            #main-content {
                margin-left: 0;
            }

            #sidebar-overlay.show {
                display: block;
            }
        }

        /* ── SCROLLBAR ── */
        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #d1d5db;
            border-radius: 10px;
        }

        /* ── SIDEBAR TOGGLE BTN ── */
        #sidebarToggle {
            display: none;
        }

        @media (max-width: 991.98px) {
            #sidebarToggle {
                display: flex;
            }
        }

        /* ── PAGINATION ── */
        .pagination {
            margin-bottom: 0;
            gap: 4px;
        }
        .pagination .page-item .page-link {
            border-radius: 8px !important;
            border: 1px solid #e2e8f0;
            color: #475569;
            font-size: 13px;
            font-weight: 600;
            padding: 6px 13px;
            transition: all 0.2s ease;
        }
        .pagination .page-item .page-link:hover {
            background: #fff7ed;
            color: #ea580c;
            border-color: #fed7aa;
        }
        .pagination .page-item.active .page-link {
            background: #f97316 !important;
            border-color: #f97316 !important;
            color: #ffffff !important;
            box-shadow: 0 2px 8px rgba(249, 115, 22, 0.3);
        }
        .pagination .page-item.disabled .page-link {
            background: #f8fafc;
            color: #94a3b8;
            border-color: #f1f5f9;
        }
    </style>

    @stack('styles')
</head>

<body>

    <!-- Sidebar Overlay (mobile) -->
    <div id="sidebar-overlay" onclick="closeSidebar()"></div>

    <!-- ═══════════════════════════ SIDEBAR ═══════════════════════════ -->
    <nav id="sidebar">
        <!-- Brand -->
        <a class="sidebar-brand" href="{{ route('dashboard') }}">
            <div class="brand-icon">🐾</div>
            <div>
                <div class="brand-text">Cloudytailz</div>
                <div class="brand-sub">Pet Care Management</div>
            </div>
        </a>

        <!-- Nav -->
        <div class="sidebar-section-label">Main</div>
        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="bi bi-grid-1x2-fill"></i> Dashboard
        </a>

        <div class="sidebar-section-label">Inquiries</div>
        <a href="{{ route('admin.pet-visits.index') }}"
            class="nav-link {{ request()->routeIs('admin.pet-visits*') ? 'active' : '' }}">
            <i class="bi bi-house-heart-fill"></i> Pet Visit
        </a>
        <a href="{{ route('admin.packages.index') }}"
            class="nav-link {{ request()->routeIs('admin.packages*') ? 'active' : '' }}">
            <i class="bi bi-bag-heart-fill"></i> Packages
        </a>
        <a href="{{ route('admin.contacts.index') }}"
            class="nav-link {{ request()->routeIs('admin.contacts*') ? 'active' : '' }}">
            <i class="bi bi-chat-dots-fill"></i> Contact Forms
        </a>

        <div class="sidebar-section-label">Blog Management</div>
        <a href="{{ route('admin.categories.index') }}"
            class="nav-link {{ request()->routeIs('admin.categories*') ? 'active' : '' }}">
            <i class="bi bi-tags-fill"></i> Categories
            <span class="sidebar-badge">{{ \App\Models\Category::where('status', true)->count() }}</span>
        </a>
        <a href="{{ route('admin.blogs.index') }}"
            class="nav-link {{ request()->routeIs('admin.blogs*') ? 'active' : '' }}">
            <i class="bi bi-journal-richtext"></i> Blogs
            <span class="sidebar-badge">{{ \App\Models\Blog::where('status', true)->count() }}</span>
        </a>



        <div class="sidebar-section-label">Settings</div>
        <a href="{{ route('profile.edit') }}" class="nav-link">
            <i class="bi bi-person-gear"></i> Profile
        </a>

        <!-- Sidebar Footer -->
        <div class="sidebar-footer">
            @auth
                <div class="sidebar-user">
                    <div class="avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                    <div class="user-info">
                        <div class="user-name">{{ Auth::user()->name }}</div>
                        <div class="user-role">Administrator</div>
                    </div>
                    <form method="POST" action="{{ route('logout') }}" class="ms-auto">
                        @csrf
                        <button type="submit" class="topbar-icon-btn" title="Logout" style="background:transparent;">
                            <i class="bi bi-box-arrow-right" style="color:#f97316;font-size:18px;"></i>
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </nav>

    <!-- ═══════════════════════════ TOPBAR ═══════════════════════════ -->
    <header id="topbar">
        <!-- Mobile toggle -->
        <button id="sidebarToggle" class="topbar-icon-btn" onclick="openSidebar()">
            <i class="bi bi-list"></i>
        </button>

        <div class="topbar-title">@yield('page-title', 'Dashboard')</div>

        <!-- Search -->
        <div class="d-none d-md-flex align-items-center gap-2 me-2"
            style="background:#f4f6fb;border-radius:10px;padding:6px 14px;border:1px solid #e8ecf4;">
            <i class="bi bi-search" style="color:#8b92a9;font-size:14px;"></i>
            <input type="text" placeholder="Search..."
                style="border:none;background:transparent;outline:none;font-size:13px;color:#374151;width:160px;">
        </div>

        <!-- Notif -->
        <a href="#" class="topbar-icon-btn">
            <i class="bi bi-bell-fill"></i>
            <span class="topbar-notif-dot"></span>
        </a>

        <!-- User -->
        @auth
            <div class="dropdown">
                <div class="topbar-user" data-bs-toggle="dropdown">
                    <div class="avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
                    <span class="d-none d-md-inline" style="font-size:13px;font-weight:700;color:#1a1f36;">
                        {{ Auth::user()->name }}
                    </span>
                    <i class="bi bi-chevron-down d-none d-md-inline" style="font-size:11px;color:#8b92a9;"></i>
                </div>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm"
                    style="border-radius:12px;border:1px solid #e8ecf4;min-width:170px;">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                                class="bi bi-person me-2"></i>Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item text-danger" type="submit">
                                <i class="bi bi-box-arrow-right me-2"></i>Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endauth
    </header>

    <!-- ═══════════════════════════ CONTENT ═══════════════════════════ -->
    <div id="main-content">
        <div class="content-wrapper">
            @yield('content')
            {{ $slot ?? '' }}
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function openSidebar() {
            document.getElementById('sidebar').classList.add('open');
            document.getElementById('sidebar-overlay').classList.add('show');
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('open');
            document.getElementById('sidebar-overlay').classList.remove('show');
        }
    </script>

    @stack('scripts')
</body>

</html>
