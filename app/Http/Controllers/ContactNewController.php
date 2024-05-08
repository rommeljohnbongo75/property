<?php

namespace App\Http\Controllers;

use App\Models\ContactNew;
use Illuminate\Http\Request;

class ContactNewController extends Controller
{
    public function index()
    {
        $contacts = ContactNew::get();
        return view('admin.layouts.contactus.contact', compact('contacts'));
    }
    public function contactStore(Request $request)
    {
        $request->validate([
            'fullname' =>'required',
            'email' =>'required',
           'subject' =>'required',
           'message' =>'required',
        ]);

        $contact = new ContactNew();
        $contact->full_name = $request->fullname;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Contact Save SuccessFully.!');
    }
    public function contactDelete($id)
    {
        $contact = ContactNew::findOrFail($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Contact Delete SuccessFully.!');
    }
}
