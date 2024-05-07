<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\package;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_package');
    }

    public function upload(Request $request)
    {
        $package=new package;
        $package->pack_name=$request->pack_name;
        $package->pack_price=$request->pack_price;
        $package->seats_wash=$request->seats_wash;
        $package->vacuum_cleaning=$request->vacuum_cleaning;
        $package->exterior_cleaning=$request->exterior_cleaning;
        $package->interior_wet_cleaning=$request->interior_wet_cleaning;
        $package->window_wiping=$request->window_wiping;

        $package->save();

        return redirect()->back()->with('message','Package Added Sussessfully');
    }
}
