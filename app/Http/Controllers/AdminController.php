<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\package;

use Illuminate\Support\Facades\Auth;

use App\Models\Appointment;

use Illuminate\Support\Facades\Notification; 

use App\Notifications\SendEmailNotification;

use Twilio\Rest\Client;


class AdminController extends Controller
{
    public function addview()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                return view('admin.add_package');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
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

    public function showappointment()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $data=appointment::all();
                return view('admin.showappointment',compact('data'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
        
    }

    public function approved($id)
    {
        // Find the appointment by its ID
        $data = Appointment::find($id);

        // Update the status to "Approved"
        $data->status = 'Approved';
        $data->save();

        // Construct the WhatsApp message
        $phoneNumber = $data->phone; // Get the phone number
        $message = "Your appointment has been approved."; // Message content
        $encodedMessage = urlencode($message); // Encode the message

        // Construct the WhatsApp URL
        $whatsappUrl = "https://api.whatsapp.com/send?phone={$phoneNumber}&text={$encodedMessage}";

        // Return a redirect to the WhatsApp URL
        return redirect($whatsappUrl);
    }


    public function canceled($id)
    {
         $data=appointment::find($id);
         $data->status='Canceled';
         $data->save();
        return redirect()->back();
    }

    public function showpackages()
    {
         $data=package::all();
        return view('admin.showpackages',compact('data'));
    }

    public function deletepackge($id)
    {
         $data=package::find($id);
         $data->delete();
        return redirect()->back();
    }

    public function updatepackage($id)
    {
        $data=package::find($id);
        
        return view('admin.updatepackage',compact('data'));
    }

    public function editdoctor(Request $request,$id)
    {
        $package=package::find($id);

        $package->pack_name=$request->pack_name;
        $package->pack_price=$request->pack_price;
        $package->seats_wash=$request->seats_wash;
        $package->vacuum_cleaning=$request->vacuum_cleaning;
        $package->exterior_cleaning=$request->exterior_cleaning;
        $package->interior_wet_cleaning=$request->interior_wet_cleaning;
        $package->window_wiping=$request->window_wiping;
        
        $package->save();
        return redirect()->back()->with('message','package Details Updated Successfully');
    }
    
    public function emailview($id)
    {
        $data=appointment::find($id);
    
        return view('admin.emailview',compact('data'));
    }

    public function sendemail(Request $request,$id)
    {
        $data=appointment::find($id);
        
        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];

        Notification::send($data,new SendEmailNotification($details));
    
        return redirect()->back()->with('message','Email send is Successfully');
    }

    public function showappointmentstatus()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $data=appointment::all();
                return view('admin.showappointmentstatus',compact('data'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }
        
    }
    
}
