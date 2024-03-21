<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Auth;

class ContactController extends Controller
{
    public function store(Request $request)
    {   
        // dd($request->all());

        if(Auth::check()){
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
                'start_date' =>  date('Y-m-d', strtotime($request->checkin)),
                'end_date' => date('Y-m-d', strtotime($request->checkout)),
                'adults' => $request->get('adults'),
                'children' => $request->get('children'),

            ]);

            $isSuccess = $contact->save();
            
            if ($isSuccess) {
                $notification = array(
                    'message' => 'Booking Reservation successfully!',
                    'alert-type' => 'success'
                );
                
                return redirect()->back()->with($notification);
            } else {
                $notification = array(
                    'message' => 'Somthing Went wrong!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
        }else{
            $notification = array(
                'message' => 'Please login to continue booking reservation or sending an inquiry to',
                'alert-type' => 'error'
            );
            return redirect('/login')->with($notification);
        }

    }

    public function cla()
    {
        return view('site.layouts.cla');
    }
}
