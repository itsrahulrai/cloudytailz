<a href="{{ route('admin.pet-visits.index') }}"
    class="nav-link {{ request()->routeIs('admin.pet-visits*') ? 'active' : '' }}">
    <i class="bi bi-house-heart-fill"></i> Pet Visit
    <span class="sidebar-badge">{{ \App\Models\PetVisit::where('status', 'new')->count() }}</span>
</a>
<a href="{{ route('admin.packages.index') }}"
    class="nav-link {{ request()->routeIs('admin.packages*') ? 'active' : '' }}">
    <i class="bi bi-bag-heart-fill"></i> Packages
    <span class="sidebar-badge">{{ \App\Models\PackageInquiry::where('status', 'new')->count() }}</span>
</a>
<a href="{{ route('admin.contacts.index') }}" class="nav-link {{ request()->routeIs('admin.contacts*') ? 'active' : '' }}">
    <i class="bi bi-chat-dots-fill"></i> Contact Forms
    <span class="sidebar-badge">{{ \App\Models\ContactInquiry::where('status', 'new')->count() }}</span>
</a>
