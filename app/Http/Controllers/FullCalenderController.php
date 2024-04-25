<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Contact;
use App\Models\Listing;
  
class FullCalenderController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    { 
        if($request->ajax()) {
             $data = Contact::whereDate('created_at', '>=', $request->start)->with('listing')->get();
             return response()->json($data);
        }
        return view('admin.layouts.calender.fullcalender');
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ajax(Request $request)
    {
       
        $event = Listing::where('id', $request->id)->first();
        return response()->json($event);

    }
    
}