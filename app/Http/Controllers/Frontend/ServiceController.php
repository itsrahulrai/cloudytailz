<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a single dynamic custom service page.
     */
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->active()->firstOrFail();

        // Other active custom services (for dynamic sidebar or recommendations)
        $otherServices = Service::active()
            ->where('id', '!=', $service->id)
            ->latest()
            ->take(6)
            ->get();

        return view('frontend.service-single', compact('service', 'otherServices'));
    }
}

