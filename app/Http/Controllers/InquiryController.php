<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function index()
    {
        //->latest()
        $inquiries = Contact::orderBy('id', 'DESC')->paginate(1);
        return view('admin.layouts.listing-inquiry.inquiry', compact('inquiries'));
    }


    public function show($id)
    {
        $inquiry = Contact::findOrFail($id);
        return view('admin.layouts.listing-inquiry.single-inquiry', compact('inquiry'));
    }

}
