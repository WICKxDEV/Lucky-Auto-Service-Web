<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\package;
use App\Models\Appointment;
use Carbon\Carbon;


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
        // Validate the incoming request
        $request->validate([
            'name' => 'required',
            'numberPlate' => 'required',
            'phone' => 'required',
            'package' => 'required',
            'appointmentDate' => 'required|date',
        ]);

        // Concatenate country code with phone number
        $phoneNumber = $request->input('country_code') . $request->input('phone');
        // Count approved appointments made today
        $approvedAppointmentsCount = Appointment::whereDate('created_at', Carbon::today())
                                                ->where('status', 'Approved')
                                                ->count();

        // Check if daily appointment limit (10) for approved appointments has been reached
        if ($approvedAppointmentsCount >= 10) {
            // Return some response indicating that the limit has been reached
            return redirect()->back()->with('error', 'Daily appointment limit reached for approved appointments. Please try again tomorrow.');
        }

        // Concatenate country code with phone number
        
        // If the limit has not been reached, proceed with creating the appointment
        $data = new Appointment;
        $data->name = $request->name;
        $data->numberPlate = $request->numberPlate;
        $data->phone = $phoneNumber;
        $data->package = $request->package;
        $data->appointmentDate = $request->appointmentDate;
        $data->status = 'In Progress';

        if (Auth::check()) {
            $data->user_id = Auth::user()->id;
        }
        
        $data->save();

        return redirect()->back()->with('message', 'Appointment Request Successful. We will contact with you soon');
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
