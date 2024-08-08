<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_view(){
        return view('admin.add_doctor');
    }

    public function upload(Request $request){
         $doctor = new Doctor();
         $image = $request->image;
         $image_name = time().'.'.$image->getClientOriginalExtension();
         $request->image->move('doctorname',$image_name);
         $doctor->image=$image_name;

         $doctor->name=$request->name;
         $doctor->phone=$request->phone;
         $doctor->specialty=$request->specialty;
         $doctor->room=$request->room;

         $doctor->save();
         return redirect()->back()->with('message','Added Doctor Successful .');


    }
    public function showappointment(){
              $data=Appointment::all();

              return view('admin.showappointment',compact('data'));
    }
    public function approved($id){
             $data = Appointment::find($id);
             $data->status='approved';
             $data->save();

             return redirect()->back();

    }
    public function canceled($id){
        $data = Appointment::find($id);
        $data->status='canceled';
        $data->save();

        return redirect()->back();

     }

     public function showdoctors(){
        $data=Doctor::all();

        return view('admin.showdoctors',compact('data'));
     }

     public function delete_doctor($id){
         $data=Doctor::find($id);
         $data->delete();
         return redirect()->back();
     }

     public function update_doctor($id){
           $data=Doctor::find($id);

            return view('admin.update_doctor',compact('data'));
     }

     public function edit_doctor(Request $request, $id){

             $doctor = Doctor::find($id);
             $doctor->name=$request->name;
             $doctor->phone=$request->phone;
             $doctor->specialty=$request->specialty;
             $doctor->room=$request->room;
             
             $image = $request->image;
             if($image){
             $image_name = time().'.'.$image->getClientOriginalExtension();
             $request->image->move('doctorname',$image_name);
             $doctor->image=$image_name;
            }
             $doctor->save();
             return redirect()->back()->with('message','Doctor Details Updated Successful. ');

     }


}
