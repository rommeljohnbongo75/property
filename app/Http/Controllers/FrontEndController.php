<?php

namespace App\Http\Controllers;

use App\Models\Som;
use App\Models\Contact;
use App\Models\Listing;
use App\Models\Realtor;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use App\Models\FeaturedLocation;
use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    public function index()
    {
        $latest_listings = Listing::orderBy('id', 'DESC')->get();
        $agents = Realtor::get();
        $banner = HomeBanner::get();
        $location = FeaturedLocation::get();
        return view('site.layouts.index', compact('latest_listings','agents','banner','location'));
    }

    public function listings()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 31.771959,
                    'lng' => 35.217018,
                ],
                'label' => [ 'color' => 'white', 'text' => 'P1' ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 31.894756,
                    'lng' => 34.809322
                ],
                'label' => [ 'color' => 'white', 'text' => 'P2' ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 32.6996,
                    'lng' => 35.3035
                ],
                'label' => [ 'color' => 'white', 'text' => 'P3' ],
                'draggable' => true
            ]
        ];

        $listings = Listing::orderBy('id', 'DESC')->where('is_published','1')->get();
        
        return view('site.layouts.listings', compact('listings','initialMarkers'));
    }
    
    public function listing($id)
    {
        dd("dfgfdgdfgdgdg");
        $listing = Listing::with('realtor')->where('is_published','1')->findOrFail($id);
        dd($listing);
        $initialMarkers = [
            [
                'position' => [
                    'lat' => '31.771959',
                    'lng' => '35.217018',
                ],
                'label' => [ 'color' => 'white', 'text' => 'P1' ],
                'draggable' => true
            ],
        ];

        return view('site.layouts.listing', compact('listing','initialMarkers'));
    }



    public function about()
    {   
        $realtors = Realtor::all();
        $som = Som::with(['realtor'])->first();
        
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
