<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $review = Review::get();
        return view('admin.layouts.review.index',compact('review'));
    }

    public function changestatus(Request $request)
    {
        $userStatus = Review::where('id', $request->user_id)->first();
        
        if ($userStatus) {
            $userStatus->status = $request->status;
            $userStatus->save(); // Save the updated status
    
            return response()->json(['success' => 'Status updated successfully']);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }
    
}
