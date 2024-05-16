<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Contact;
use App\Models\MultiImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                // dd( $request->get('adults')),
                'children' => $request->get('children'),

            ]);

            $isSuccess = $contact->save();
            
            if ($isSuccess) {
                $notification = array(
                    'success' => 'Booking Reservation successfully!',
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
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 28.625485,
                    'lng' => 79.821091
                ],
                'label' => [ 'color' => 'white', 'text' => 'P1' ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 28.625293,
                    'lng' => 79.817926
                ],
                'label' => [ 'color' => 'white', 'text' => 'P2' ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 28.625182,
                    'lng' => 79.81464
                ],
                'label' => [ 'color' => 'white', 'text' => 'P3' ],
                'draggable' => true
            ]
        ];
        
        return view('site.layouts.cla',compact('initialMarkers'));
    }

    public function conatctNew(){

        return view('site.layouts.contact');
    }
    public function rental(){
        $rental = Rental::with('mutipalImage')->get();
        return view('admin.layouts.rental.rental',compact('rental'));
    }
    public function rentalform(){

        $rantalId = Rental::orderBy('created_at', 'desc')->first();
        $user = Auth::user();
        return view('admin.layouts.rental.rentalform',compact('rantalId',"user"));
    }

    public function listingLocation(){

        return view('site.layouts.listings-location');
    }

}
