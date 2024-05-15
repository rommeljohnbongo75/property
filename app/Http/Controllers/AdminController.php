<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Listing;
use App\Models\Realtor;
use App\Models\ContactNew;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use App\Models\FeaturedLocation;

class AdminController extends Controller
{
    public function index()
    {

        $listings = Listing::orderBy('id', 'DESC')->get();
        $total_listing = $listings->where('is_published', '1')->count();
        $total_new_listing = $listings->where('is_published', '0')->count();
        $users = User::all();
        $total_admins = $users->where('role', '0')->count();
        $total_users = $users->where('role', '2')->count();
        $total_realtors = Realtor::count();
        $inquiries = Contact::orderBy('id', 'DESC')->get();
        $listing = Listing::count();
        $home_banner = HomeBanner::count();
        $contact = ContactNew::count();
        $featuredlocation = FeaturedLocation::count();
        return view('admin.layouts.dashboard',compact('total_listing','total_admins' ,'total_users','listings',
                    'total_new_listing','inquiries','total_realtors','listing','home_banner','contact','featuredlocation'));
    }

    
}
