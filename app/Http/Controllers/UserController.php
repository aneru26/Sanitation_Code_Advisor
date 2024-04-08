<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function MyAccount()
    {
        $data['getRecord'] = User::getSingle(Auth::user()->id);
        $data['header_title'] = "My Account";
        if(Auth::user()->user_type == 1)
        {
            return view('admin.my_account',$data);
        }
        else if(Auth::user()->user_type == 2)
        {
            
            return view('student.my_account',$data);
        }
        else if(Auth::user()->user_type == 3)
        {
     
            return view('inspector.my_account',$data);
        }
    }

    public function UpdateMyAccountAdmin(Request $request)

    {
        $id = Auth::user()->id;
        request()->validate([
            'email' => 'required|unique:users,email,'.$id
        ]);

        $admin = User::getSingle($id);
        $admin->name = trim($request->name);
        $admin->last_name = trim($request->last_name);
        $admin->position = trim($request->position);
        
        if ($request->hasFile('profile_pic') && $request->file('profile_pic')->isValid()) 
        {
            $file = $request->file('profile_pic');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
    
            $uploadPath = public_path('upload/profile');

        // Store the file in the 'C:\xampp\htdocs\school.com\upload\profile' directory using the Storage facade.
        $file->move($uploadPath, $filename);

        $admin->profile_pic = $filename;
        }
        $admin->email = trim($request->email);
        $admin->save();

        return redirect()->back()->with('succes',"Account successfully Updated");
    }

    public function UpdateMyAccountStudent(Request $request)
    {
        $id = Auth::user()->id;
        
        request()->validate([
            'email' => 'required|unique:users,email,'.$id,
            'password' => 'nullable|min:8'
        ]);

        $student = User::getSingle($id);
        $student->name = trim($request->name);
        $student->last_name = trim($request->last_name);
        $student->gender = trim($request->gender);

        if ($request->hasFile('profile_pic') && $request->file('profile_pic')->isValid()) 
        {
            $file = $request->file('profile_pic');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
    
            $uploadPath = public_path('upload/profile');

        // Store the file in the 'C:\xampp\htdocs\school.com\upload\profile' directory using the Storage facade.
        $file->move($uploadPath, $filename);

        $student->profile_pic = $filename;
        }
        $student->status = trim($request->status);
        $student->email = trim($request->email);
        $student->save();

        return redirect()->back()->with('succes',"Account successfully Updated");
    
    }

    
    public function change_password()
    {
        $data['header_title'] ="Change Password";
        return view('profile.change_password',$data);
    }

    public function update_change_password(Request $request)
    {
        $user = User::getSingle(Auth::user()->id);
        if(Hash::check($request->old_password, $user->password))
        {
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect()->back()->with('succes',"Password successfully Updated");
        }
        else
        {
            return redirect()->back()->with('error',"Old Password is not Correct");
        }
    }



private function storeFile($file, $uploadPath)
{
    $ext = $file->getClientOriginalExtension();
    $randomStr = Str::random(20);
    $filename = strtolower($randomStr) . '.' . $ext;

    $file->move(public_path($uploadPath), $filename);

    return $filename;
}


}
