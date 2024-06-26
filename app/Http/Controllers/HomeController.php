<?php

namespace App\Http\Controllers;

use App\Models\HomeBanner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = HomeBanner::get();
        return view('admin.layouts.home.banner.banners', compact('banners'));
    }

    public function create()
    {
        return view('admin.layouts.home.banner.add-banner');
    }
    public function store(Request $request)
    {

        // dd("gfhghgfhfghfgh");
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/uploads/home_banner/'), $imageName);

            $image = new HomeBanner();
            $image->image = $imageName;
            $image->save();

            return redirect()
                ->route('banner.index')
                ->with('success', 'You have successfully uploaded the image.')
                ->with('image', $imageName);
        } else {
            return back()
                ->with('error', 'Failed to upload image. Please try again.');
        }
    }

    public function edit($id)
    {
        $banner = HomeBanner::find($id);
        return view('admin.layouts.home.banner.edit-banner', compact('banner'));
    }

    public function update(Request $request, $id)
    {

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/uploads/home_banner/'), $imageName);

            $image = HomeBanner::find($id);
            $image->image = $imageName;
            $image->update();

            return redirect()
                ->route('banner.index')
                ->with('success', 'You have successfully uploaded the image.')
                ->with('image', $imageName);
        } else {
            return back()
                ->with('error', 'Failed to upload image. Please try again.');
        }
    }
    public function destroy($id)
    {
        $homebanner = HomeBanner::find($id);
        $homebanner->delete();
        return redirect()->route('banner.index')->with('success', 'Course deleted successfully');
    }

    public function changestatus(Request $request)
    {
        $userStatus = HomeBanner::find($request->id);

        if (!$userStatus) {
            return back()->with('error', 'Status not found');
        }

        $userStatus->status = $userStatus->status == 1 ? 0 : 1;
        $userStatus->update();

        // Flash success message
        $message = 'Status updated successfully';
        session()->flash('success', $message);

        $lastStatus = HomeBanner::orderBy('created_at', 'desc')->first();

        if ($lastStatus && $lastStatus->status == 0) {
            $lastStatus->status = 1;
            $lastStatus->update();
            $warning = 'The last status was inactive and has been updated to active.';
            session()->flash('success', $warning);

        }

        return response()->json(['success' => true]);
    }
}
