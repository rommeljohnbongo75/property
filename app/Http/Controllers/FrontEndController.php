<?php

namespace App\Http\Controllers;

use App\Models\Som;
use App\Models\Review;
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
        $banner = HomeBanner::where('status', 1)->get();
        $location = FeaturedLocation::get();
        return view('site.layouts.index', compact('latest_listings', 'agents', 'banner', 'location'));
    }

    public function listings()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 31.771959,
                    'lng' => 35.217018,
                ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 31.894756,
                    'lng' => 34.809322
                ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 32.6996,
                    'lng' => 35.3035
                ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' => 40.771959,
                    'lng' => 35.217018,
                ],
                'draggable' => true
            ],
        ];

        $listings = Listing::orderBy('id', 'DESC')->where('is_published', '1')->get();

        return view('site.layouts.listings', compact('listings', 'initialMarkers'));
    }

    public function listing(Request $request, $id)
    {

        $listing = Listing::with('realtor')->where('is_published', '1')->findOrFail($id);
        $Contact = Contact::where('listing_id', $request->id)->select('start_date', 'end_date')->first();
        $review = Review::where('status', 1)->get();
        $location = Listing::findOrFail($id);

        $initialMarkers = [
            [
                'position' => [
                    'lat' => 31.771959,
                    'lng' => 35.217018,
                ],
                'draggable' => true
            ]
        ];

        return view('site.layouts.listing', compact('listing', 'initialMarkers', 'Contact', 'location','review'));
    }



    public function about()
    {
        $realtors = Realtor::all();
        $som = Som::with(['realtor'])->first();

        return view('site.layouts.about', compact('som', 'realtors'));
    }


    public function dashboard()
    {
        if (Auth::check()) {
            $userid = Auth::id();
            $lists = Contact::with('listing')->where('user_id', $userid)->get();
            return view('site.layouts.dashboard', compact('lists'));
        }
    }
    public function filterOrders(Request $request)
    {
        $filter = $request->all();
        // dd($filter);
        $listingpost = Listing::where([
            ['city', 'like', '%' . request('city') . '%'],
            ['bedroom', 'like', '%' . request('bedroom') . '%'],
            ['bathroom', 'like', '%' . request('bathroom') . '%'],

        ])->get();
        // dd($listingpost);    

        return view('site.layouts.filterdata', compact('listingpost'));
    }

    public function review(Request $request)
    {
        Review::create([
            'listing_id' => $request->listing_id,
            'email' => $request->email,
            'description' => $request->description,
        ]);
        return redirect()->back();
    }
}
