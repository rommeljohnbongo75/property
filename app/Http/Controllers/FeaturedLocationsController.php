<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturedLocation;

class FeaturedLocationsController extends Controller
{
    public function index(){
        $locations = FeaturedLocation::get();
        return view('admin.layouts.home.featured-locations.featuredlocation',compact('locations'));
    }
    public function create(){
        return view('admin.layouts.home.featured-locations.add-location');
    }

    public function store(Request $request){

        // dd("gfhghgfhfghfgh");
        $request->validate([
            "name" => "required",
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);
            $location = new FeaturedLocation();
            $location->location = $request->name;
            if ($request->image) {
                  $image = $request->file('image');
                  $extension = $image->getClientOriginalName();
                  $filename = time() . '.' . $extension;
                  $image->move('assets/uploads/location/', $filename);
                  $location->image = $filename;
            }
            $location->save();
            return redirect()->route('FeaturedLocation.index')->with('success','You have successfully added the location.');
        
    }
    public function edit($id)
    {
        $location = FeaturedLocation::find($id);
        return view('admin.layouts.home.featured-locations.editlocation',compact('location'));

    }
    public function update(Request $request,$id){

            $location =  FeaturedLocation::find($id);
            $location->location = $request->name;
            if ($request->image) {
                  $image = $request->file('image');
                  $extension = $image->getClientOriginalName();
                  $filename = time() . '.' . $extension;
                  $image->move('assets/uploads/location/', $filename);
                  $location->image = $filename;
            }
            $location->update();
            return redirect()->route('FeaturedLocation.index')->with('success','You have successfully added the location.');
        
    }
    public function destroy($id)
    {
        $homebanner = FeaturedLocation::find($id);
        $homebanner->delete();
       return redirect()->route('FeaturedLocation.index')->with('success','You have successfully deleted the location.');
    }
}
