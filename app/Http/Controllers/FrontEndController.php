<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Listing;
use App\Models\Realtor;
use App\Models\Som;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    public function index()
    {
        $latest_listings = Listing::orderBy('id', 'DESC')->where('is_published','1')->limit('10')->get();
        return view('site.layouts.index', compact('latest_listings'));
    }

    public function listings()
    {

        $listings = Listing::orderBy('id', 'DESC')->where('is_published','1')->get();
        return view('site.layouts.listings', compact('listings'));
    }
    
    public function listing($id)
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
        $listing = Listing::with('realtor')->where('is_published','1')->findOrFail($id);
        return view('site.layouts.listing', compact('listing','initialMarkers'));
    }



    public function about()
    {   
        $realtors = Realtor::all();
        $som = Som::with('realtor')->first();
        
        return view('site.layouts.about',compact('som','realtors'));
    }


    public function dashboard()
    {   
        if (Auth::check())
        {
            $userid = Auth::id();
            $lists = Contact::with('listing')->where('user_id',$userid)->get();
            return view('site.layouts.dashboard',compact('lists'));
        }
    }
}
