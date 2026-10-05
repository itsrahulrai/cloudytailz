<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class ContactInquiryController extends Controller
{

    public function index()
    {
        $contactInquiries = ContactInquiry::latest()->paginate(15);

        return view('admin.contact.contact', compact('contactInquiries'));
    }

    public function show($id)
    {
        $contactInquiry = ContactInquiry::findOrFail($id);

        return view('admin.contact.show', compact('contactInquiry'));
    }

    public function updateStatus(Request $request, ContactInquiry $contactInquiry)
    {
        $request->validate([
            'status' => 'required|in:new,pending,done'
        ]);

        $contactInquiry->update([
            'status' => $request->status
        ]);

        return back()->with('success', 'Status updated successfully!');
    }

    public function destroy(ContactInquiry $contactInquiry)
    {
        $contactInquiry->delete();

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Inquiry deleted successfully!');
    }
}
