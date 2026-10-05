<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PetVisit;
use App\Models\PackageInquiry;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class FormController extends Controller
{
    // Pet Visit Form Submit
    public function submitPetVisit(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'phone'    => 'required|string|max:20',
            'services' => 'required|string',
        ]);

        PetVisit::create($request->only(['name', 'email', 'phone', 'services', 'message']));

        return response()->json(['success' => true, 'message' => 'Thank you! We will contact you soon.']);
    }

    // Package Booking Form Submit
    public function submitPackage(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'package' => 'required|string',
        ]);

        PackageInquiry::create($request->only(['name', 'phone', 'package']));

        return response()->json(['success' => true, 'message' => 'Package booking received! We will call you shortly.']);
    }

    // Contact Form Submit
    public function submitContact(Request $request)
    {
        $request->validate([
            'fname'   => 'required|string|max:255',
            'lname'   => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
        ]);

        ContactInquiry::create($request->only(['fname', 'lname', 'email', 'phone', 'message']));

        return response()->json(['success' => true, 'message' => 'Message sent! We\'ll get back to you soon.']);
    }
}
