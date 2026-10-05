<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PackageInquiry;
use Illuminate\Http\Request;

class PackageInquiryController extends Controller
{
    public function index()
    {
        $inquiries = PackageInquiry::latest()->paginate(15);
        return view('admin.package.inquiries', compact('inquiries'));
    }

    public function show(PackageInquiry $packageInquiry)
    {
        return view('admin.package.show', compact('packageInquiry'));
    }

    public function updateStatus(Request $request, PackageInquiry $packageInquiry)
    {
        $packageInquiry->update(['status' => $request->status]);
        return back()->with('success', 'Status updated!');
    }

    public function destroy(PackageInquiry $packageInquiry)
    {
        $packageInquiry->delete();
        return back()->with('success', 'Deleted successfully!');
    }
}
