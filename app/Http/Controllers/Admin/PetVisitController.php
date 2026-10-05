<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PetVisit;
use Illuminate\Http\Request;

class PetVisitController extends Controller
{
    public function index()
    {
        $inquiries = PetVisit::latest()->paginate(15);
        return view('admin.inquiries.pet-visits', compact('inquiries'));
    }

    public function show($id)
    {
        $inquiry = PetVisit::findOrFail($id);
        return view('admin.inquiries.show', compact('inquiry'));
    }

    public function updateStatus(Request $request, PetVisit $petVisit)
    {
        $petVisit->update(['status' => $request->status]);
        return back()->with('success', 'Status updated!');
    }

    public function destroy(PetVisit $petVisit)
    {
        $petVisit->delete();
        return back()->with('success', 'Deleted successfully!');
    }
}
