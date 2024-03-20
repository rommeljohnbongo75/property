<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());

        // $request->validate([
        //     'name'=>'required',
        //     'email'=>'required',
        //     'contact_number'=>'required',
        //     'message'=>'required',
        //     'listing_id' => 'required',
        //     'user_id' => 'required',

        // ]);

       
        $curTime = new \DateTime();
        $start = $curTime->format("Y-m-d");
        
        $checkin = date('Y-m-d', strtotime($request->checkin));
        $checkout = date('Y-m-d', strtotime($request->checkout));
      
        $contact = new Contact([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'contact_number' => $request->get('contact_number'),
            'description' => $request->get('message'),
            'listing_id' => $request->get('listing_id'),
            'user_id' => $request->get('user_id'),
            'start' => $start,
            'start_date' => $checkin,
            'end_date' => $checkout,
            'adults' => 1,
            'children' => 1,

        ]);

        $isSuccess = $contact->save();
        
        if ($isSuccess) {
            $notification = array(
                'message' => 'Post created successfully!',
                'alert-type' => 'success'
            );
            
            return redirect('/')->with($notification);
        } else {
            $notification = array(
                'message' => 'Somthing Went wrong!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }

    public function cla()
    {
        return view('site.layouts.cla');
    }
}
