<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {


        return view('admin.add_doctor');
    }
    public function upload(Request $request)
    {

        $doctor = new doctor;


        if ($request->hasFile('file')) {
            $imagename = rand(11111, 99999) . '.' . $request->file('file')->getClientOriginalExtension();

            $doctor = $request->file('image')->move('doctorimage', $imagename);
        }


        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->image = $request->imagename;

        $doctor->save();

        return redirect()->back()->with('messege', 'doctor added succes');
    }

    public function showappointment(){
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
    }

    public function approved($id){
       
        $data=appointment::find($id);
        $data->status='approved';
        $data->save();
         return redirect()->back();
        

}

public function canceled($id){
       
    $data=appointment::find($id);
    $data->status='canceled';
    $data->save();
     return redirect()->back();
    

}

public function showdoctor($id){
       
    $data=doctor::all();
   
    return view('admin.showdoctor',compact('data'));
    

}

public function deletedoctor($id){
       
    $data=doctor::find($id);
    $data->delete();
    return redirect()->back();
    

}


public function updatedoctor($id){

    $data=doctor::find($id);

return view('admin.update_doctor',compact('data'));

    
}

public function editdoctor(Request $request , $id){

    $doctor=doctor::find($id);
    $doctor->name=$request->name;
    $doctor->phone=$request->phone;
    $doctor->specialty=$request->specialty;
    $doctor->room=$request->room;

$doctor->save();
return redirect()->back()->with('message','Doctor Updated succ');
 
    
}
    }

