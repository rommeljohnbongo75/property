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
        
        // $request->all();
        //  $property = Listing::get(); 
        if($request->ajax()) {

            //  $data = Event::whereDate('created_at', '>=', $request->start)
            //            ->get(['id', 'title', 'start']);

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
        // switch ($request->type) {
        //    case 'delete':
              $event = Listing::where('id', $request->id)->first();
              return response()->json($event);
            //  break;
    }
    
}