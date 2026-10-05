<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PetVisit;
use App\Models\PackageInquiry;
use App\Models\ContactInquiry;
use App\Models\Category;
use App\Models\Blog;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total'        => PetVisit::count() + PackageInquiry::count() + ContactInquiry::count(),
            'pet_visits'   => PetVisit::count(),
            'packages'     => PackageInquiry::count(),
            'contacts'     => ContactInquiry::count(),
            'categories'   => Category::count(),
            'blogs'        => Blog::count(),
            'new_count'    => PetVisit::where('status', 'new')->count()
                + PackageInquiry::where('status', 'new')->count()
                + ContactInquiry::where('status', 'new')->count(),
            'pending'      => PetVisit::where('status', 'pending')->count()
                + PackageInquiry::where('status', 'pending')->count()
                + ContactInquiry::where('status', 'pending')->count(),
            'done'         => PetVisit::where('status', 'done')->count()
                + PackageInquiry::where('status', 'done')->count()
                + ContactInquiry::where('status', 'done')->count(),
        ];

        // Recent 5 from each, merged & sorted
        $recentVisits    = PetVisit::latest()->take(5)->get()->map(fn($r) => array_merge($r->toArray(), ['type' => 'pet_visit']));
        $recentPackages  = PackageInquiry::latest()->take(5)->get()->map(fn($r) => array_merge($r->toArray(), ['type' => 'package']));
        $recentContacts  = ContactInquiry::latest()->take(5)->get()->map(fn($r) => array_merge($r->toArray(), ['type' => 'contact']));

        $recent = $recentVisits->concat($recentPackages)->concat($recentContacts)
            ->sortByDesc('created_at')->take(10)->values();

        return view('admin.dashboard', compact('stats', 'recent'));
    }
}
