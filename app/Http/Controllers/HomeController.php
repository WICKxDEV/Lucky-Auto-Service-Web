<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\package;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '0')
            {
                $package = package::all();
                return view('user.home',compact('package'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
        $package = package::all();
        return view('user.home',compact('package'));
        }
    }

    public function appointment(Request $request)
    {
        $data = new appointment;

        $data->name=$request->name;
        $data->phone=$request->phone;
        $data->package=$request->package;
        $data->status='In Progress';

        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }
        
        $data->save();

        return redirect()->back()->with('message','Appointment Request Successful. We will contact with you soon');
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $userid=Auth::user()->id;

                $appoint=appointment::where('user_id',$userid)->get();
                return view('user.my_appointment',compact('appoint'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_appointment($id)
    {
        $data=appointment::find($id);
        $data->delete();

        return redirect()->back();
    }

}
