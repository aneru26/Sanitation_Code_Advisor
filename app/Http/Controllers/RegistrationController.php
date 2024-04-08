<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{

    public function list()
    {
        
        $data['getRecord']= Register::getRecorduser();
        $data['header_title'] = "Register";
        return view('student.Register.list', $data);
    }

    

    public function add()
    {
        // Check if the user has uploaded any certificates
        $hasCertificates = Certificate::where('submitted_by', Auth::user()->id)->exists();
        
        // If the user has uploaded certificates, allow them to register
        if ($hasCertificates) {
            $data['header_title'] = "Registration";
            return view('student.Register.add', $data);
        } else {
            // Redirect the user back with an error message
            return redirect()->back()->with('error', 'You must upload a certificate before registering.');
        }
    }
    
    public function insert(Request $request)
    {
        $validatedData = $request->validate([
            'cp_number' => 'required|digits:11', // Ensure cp_number is 11 digits long
            // Add other validation rules for your other fields if necessary
        ]);
    
        $register = new Register;
        $register->name_of_establishment = trim($request->name_of_establishment);
        $register->address = trim($request->address);
        $register->owner_lastname = trim($request->owner_lastname);
        $register->owner_firstname = trim($request->owner_firstname);
        $register->cp_number = $validatedData['cp_number'];
        $register->number_of_personel = trim($request->number_of_personel);
        $register->occupancy_classification = trim($request->occupancy_classification);
        $register->created_by = Auth::user()->id;
    
        $register->save();
    
        return redirect('customer/registration/list')->with('succes',"Establishment Register");
    }
    

    public function edit($id)
    {
        $getRecord = Register::getSingle($id);
        $data['getRecord'] = $getRecord;
        $data['header_title'] = "Edit Registration";
        return view('student.Register.edit', $data);
    }


    public function update(Request $request,$id)
    {

        $register = Register::getSingle($id);
        $register->name_of_establishment = trim($request->name_of_establishment);
        $register->address = trim($request->address);
        $register->owner_lastname = trim($request->owner_lastname);
        $register->owner_firstname = trim($request->owner_firstname);
        $register->cp_number = trim($request->cp_number);
        $register->number_of_personel = trim($request->number_of_personel);
        $register->occupancy_classification = trim($request->occupancy_classification);
        $register->created_by = Auth::user()->id;

        $register->save();

        return redirect('customer/registration/list')->with('succes',"Registration Updated");
    }

    public function delete($id)
    {
        $car = Register::getSingle($id);
        $car->is_delete= 1;
        $car->save();

        return redirect()->back()->with('succes',"Registration Successfully Deleted");
    }



    //ADMIN SiDE

    public function adminlist()
    {
        $data['getRecord']= Register::getRecord();
        $data['header_title'] = "Register";
        return view('admin.Register.list', $data);
    }

    public function view($id)
    {
        
        $data['getRecord'] = Register::getName($id);
        if(!empty($data['getRecord']))
        {
            
            $created_by = $data['getRecord']->created_by;
            $data['getCertificate'] = Certificate::getCertificate($created_by);
            $data['header_title'] = "Show Register ";
            return view('admin.Register.view',$data);
        }
        else
        {
                abort(404);
        }
        
    }

    
//Inspector Side


 public function inspectorlist()
 {
     $data['getRecord']= Register::getRecord();
     $data['header_title'] = "Register";
     return view('inspector.Register.list', $data);
 }

 public function inspectorview($id)
 {
    $data['getRecord'] = Register::getName($id);
    if(!empty($data['getRecord']))
    {
        
        $created_by = $data['getRecord']->created_by;
        $data['getCertificate'] = Certificate::getCertificate($created_by);
        $data['header_title'] = "Show Register ";
        return view('inspector.Register.view',$data);
    }
    else
    {
            abort(404);
    }
 }



}
