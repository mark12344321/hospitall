<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;


class HomeController extends Controller
{
    public function redirect(){
          if(Auth::id())
       {
            if(  Auth::user()->usertype == '0'  )
            {
             $doctor = Doctor::all();
              return view('user.home',compact('doctor'));
                //  return dd(0);
            }
            else
            {
               return view('admin.home');
                //   return dd(1);
            }

        }
          else
          {
              return redirect()->back();
          }



    }

    public function index(){

        if(Auth::id()){
            return redirect('home');
        }
        else{
            $doctor = Doctor::all();
            return view('user.home', compact('doctor'));
        }

    }

    public function appointment(Request $request){
              $data = new Appointment();
              $data->name = $request->name;
              $data->email = $request->email;
              $data->doctor_name = $request->doctor_name;
              $data->phone = $request->number;
              $data->date = $request->date;
              $data->message = $request->message;
              $data->status = 'In Progress';
              if(Auth::id())
              {
                $data->user_id = Auth::user()->id;
              }
              $data->save();
              return redirect()->back()->with('message','Appointment Request Successful .
               We will contact with you soon ');
    }

    public function myappointment(){
               if(Auth::id()){
                   $userid=Auth::user()->id;
                   $appoint=Appointment::where('user_id',$userid)->get();

                return view('user.my_appointment',compact('appoint'));
               }
               else
               {
                   return redirect()->back();
               }

    }

    public function cancel_appoint($id){
            $data=Appointment::find($id);
            $data->delete();
            return redirect()->back();

    }
}
