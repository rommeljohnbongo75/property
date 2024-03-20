<?php

namespace App\Http\Controllers;

use App\Models\Realtor;
use App\Models\Som;
use Illuminate\Http\Request;

class SellerOftheMonth extends Controller
{
    public function index()
    {
        $som = Som::with('realtor')->first();
        $realtors = Realtor::all();
        return view('admin.layouts.som.som', compact('realtors','som'));


    }

    public function store(Request $request)
    {
        $request->validate([
            'realtor_id'=>'required'

        ]);

        $som = new Som([
            'realtor_id' => $request->get('realtor_id'),
        
        ]);

        $isSuccess = $som->save();

        if($isSuccess){
            return redirect(route('som.index'))->with('success', 'Som Added!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');

        }
    }


    public function show($id)
    {
        $som = Som::findOrFail($id);
        $realtors = Realtor::all();
        return view('admin.layouts.som.change-som', compact('realtors','som'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'realtor_id'=>'required'

        ]);

        $som = Som::findOrFail($id);
        $som ->realtor_id = $request->get('realtor_id');
        
        $isSuccess = $som->save();

        if($isSuccess){
            return redirect(route('som.index'))->with('success', 'Som Added!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');

        }
    }
}
