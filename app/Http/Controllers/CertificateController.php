<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CertificateController extends Controller
{
    public function list()
    {
    
        $data['getRecord']= Certificate::getRecorduser();
        $data['header_title'] = "Certidicate";
        return view('student.certificate.list', $data);
    }


    public function add()
    {
       
        $data['header_title'] = "Certificate ";
        return view('student.certificate.add', $data);
    }

    public function insert(Request $request)
    {

        $certificate = new Certificate();
        $certificate->certificate_name = trim($request->certificate_name);
        if ($request->hasFile('certificate') && $request->file('certificate')->isValid()) 
        {
            $file = $request->file('certificate');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
    
            $uploadPath = public_path('upload/certificate');

        // Store the file in the 'C:\xampp\htdocs\school.com\upload\profile' directory using the Storage facade.
        $file->move($uploadPath, $filename);

        $certificate->certificate = $filename;
        }
        $certificate->submitted_by = Auth::user()->id;

        $certificate->save();

        return redirect('customer/certificate/list')->with('succes',"Certificate Uploaded");
    }

    public function delete($id)
    {
        $certificate = Certificate::getSingle($id);
        $certificate->is_delete= 1;
        $certificate->save();

        return redirect()->back()->with('succes',"Certificate Successfully Deleted");
    }
}
