<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rental;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Location;
use App\Models\MultiImage;
use Illuminate\Http\Request;
use App\Models\MultiImageUpload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RentalController extends Controller
{
    public function store(Request $request)
    {
        // dd("jhhhhjhj");
        $request->validate([
            'name' => 'required',
            'internal_name' => 'required',
            'description' => 'required',
        ]);
        $rantal = new Rental();
        $rantal->name  = $request->name;
        $rantal->internal_name = $request->internal_name;
        $rantal->description = $request->description;
        $rantal->save();
        if ($rantal) {
            return redirect()->route('rental-form')->with('success', 'Rental Added!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function locationStore(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'zip' => 'required',
        ]);
        $location = new Location();
        $location->rental_id   = $request->rental_id;
        $location->email  = $request->email;
        $location->password = Hash::make($request->password);
        $location->address = $request->address;
        $location->address2 = $request->address2;
        $location->city = $request->city;
        $location->zip = $request->zip;

        $location->save();
        if ($location) {
            return redirect()->route('rental-form')->with('success', 'Rental Added!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    // public function photosUpload(Request $request)
    // {
    //      $uploadedFiles = $request->file('files');
    //     foreach ($uploadedFiles as $file) {
    //         // Store the file
    //         $path = $file->store('uploads');
    //         // You can also store additional data in your database if needed
    //     }

    //     // Return a response, redirect, or whatever suits your application
    //     return response()->json(['message' => 'Files uploaded successfully']);

    // // $file = $request->file('file');
    // // // dd($file);
    // // $fileName = time() . '_' . $file->getClientOriginalName();
    // // $file->move(public_path('uploads'), $fileName);

    // // return response()->json(['success' => $fileName]);
    //  }

    public function upload(Request $request)
    {
        $request->validate([
            'images' => 'required',
        ]);
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $counter = 1;
            foreach ($images as $image) {
                $extension = $image->getClientOriginalName();
                $filename = time() . '.' . $extension;
                $image->move('assets/uploads/multipleproductimage/', $filename);

                $request['image'] = $filename;
                //   $location->rental_id = $rantalId;
                $request['rental_id'] = $request->input('rental_id');

                $renter = new MultiImage();
                $renter->rental_id = $request->input('rental_id');
                $renter->image = $filename;
                $renter->main_image = $counter++ ;
                $renter->save();
            }
        }
        if ($images) {
            return redirect()
                ->route('rental-form')
                ->with('success', "Property Update SuccessFully");
        }
    }

    public function messageStore(Request $request)
    {
        $request->validate([
            'message' => 'required',
        ]);
        $message = new Message();
        //   dd($message);
        $message->rental_id   = $request->rental_id;
        $message->message = $request->message;

        $message->save();
        if ($message) {
            return redirect()->route('rental-form')->with('success', 'Message Added!');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function Edit()
    {
        $user = Auth::user();
        // dd($user);
        return view('admin.layouts.rental.rentalform', compact('user'));
    }
    public function update(Request $request)
    {
        $contact = Auth::user();
        $contact->username = $request->max;
        $contact->first_name = $request->name;
        $contact->last_name = $request->last_name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->update();
        if ($contact) {
            return redirect()
                ->route('rental-form')
                ->with('success', "Contact Update SuccessFully");
        } else {
            return redirect()
                ->back()
                ->with('error', 'somthing went wrong');
        }
    }

    public function editrentalform($id)
    {
        $rantal = Rental::with('location','messages')->find($id);
        $user = Auth::user();
        // $location = Location::where('rental_id',$id)->first();
    //  return $location;
        if ($rantal === null) {
           
            abort(404); 
        }
        return view('admin.layouts.rental.editrentalform',compact('rantal','user'));
    }
    public function updaterentalform(Request $request, $id)
    {
        $realtor = Rental::findOrFail($id);
        $realtor->name = $request->name;
        $realtor->internal_name = $request->internal_name;
        $realtor->description = $request->description;
        $isSuccess = $realtor->update();
        if ($isSuccess) {
            return redirect()
                ->route('rental-form')
                ->with('success', "Rental Update SuccessFully");
        } else {
            return redirect()
                ->back()
                ->with('error', 'somthing went wrong');
        }

    }

    public function locationupdaterentalform(Request $request, $id)
    {
        foreach ($request->input('locations') as $locationData) {
            $location = Location::findOrFail($locationData['id']);
            $location->email = $locationData['email'];
            $location->password = $locationData['password'];
            $location->address = $locationData['address'];
            $location->address2 = $locationData['address2'];
            $location->zip = $locationData['zip'];
            $location->update();
        }
        
        if ($location) {
            return redirect()
                ->route('rental-form')
                ->with('success', "Rental Update SuccessFully");
        } else {
            return redirect()
                ->back()
                ->with('error', 'somthing went wrong');
        }

    }

    public function messageupdaterentalform(Request $request, $id)
    {
        foreach ($request->input('messages') as $locationData) {
            $location = Message::findOrFail($locationData['id']);
            $location->message = $locationData['message'];
            $location->update();
        }
        
        if ($location) {
            return redirect()
                ->route('rental-form')
                ->with('success', "Rental Update SuccessFully");
        } else {
            return redirect()
                ->back()
                ->with('error', 'somthing went wrong');
        }

    }
}
