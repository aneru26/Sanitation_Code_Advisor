<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class InspectorController extends Controller
{
    public function list()
    {
        $data['getRecord']= User::getInspector();
        $data['header_title'] = "Inspector";
        return view('admin.inspector.list', $data);
    }

    public function add()
    {
        $data['header_title'] = "Add Inspector ";
        return view('admin.inspector.add', $data);
    }

    public function insert(Request $request)
    {
        request()->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
           
        ]);
        
        $inspector = new User;
        $inspector->name = trim($request->name);
        $inspector->last_name = trim($request->last_name);
        $inspector->position = trim($request->position);

        if ($request->hasFile('profile_pic') && $request->file('profile_pic')->isValid()) 
        {
            $file = $request->file('profile_pic');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
    
            $uploadPath = public_path('upload/profile');

        // Store the file in the 'C:\xampp\htdocs\school.com\upload\profile' directory using the Storage facade.
        $file->move($uploadPath, $filename);

        $inspector->profile_pic = $filename;
        }
        $inspector->email = trim($request->email);
        $inspector->password = Hash::make($request->password);
        $inspector->user_type = 3;
        $inspector->save();

        return redirect('admin/inspector/list')->with('succes',"Inspector Added");

        
    }

    public function edit($id)
    {
        $getRecord = User::getSingle($id);
        $data['getRecord'] = $getRecord;
        $data['header_title'] = "Edit Inspector";
        return view('admin.inspector.edit', $data);
    }

    public function update(Request $request,$id)
    {

        $inspector = User::getSingle($id);
        $inspector->name = trim($request->name);
        $inspector->last_name = trim($request->last_name);
        $inspector->position = trim($request->position);


        if ($request->hasFile('profile_pic') && $request->file('profile_pic')->isValid()) 
        {
            $file = $request->file('profile_pic');
            $ext = $file->getClientOriginalExtension();
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $ext;
    
            $uploadPath = public_path('upload/profile');

        // Store the file in the 'C:\xampp\htdocs\school.com\upload\profile' directory using the Storage facade.
        $file->move($uploadPath, $filename);

        $inspector->profile_pic = $filename;
        }
        $inspector->email = trim($request->email);
        $inspector->password = Hash::make($request->password);
        $inspector->user_type = 3;
        $inspector->save();

        return redirect('admin/inspector/list')->with('succes',"Inspector Updated");
    }

    public function delete($id)
    {
        $inspector = User::getSingle($id);
        $inspector->is_delete= 1;
        $inspector->save();

        return redirect()->back()->with('succes',"Inspector Successfully Deleted");
    }

    public function show($id)
    {
        $data['getRecord'] = User::getSingle($id);
    
        if (!empty($data['getRecord']))
        {    
            $data['header_title'] = "Edit Student ";
            return view('admin.inspector.show', $data);
        }
        else
        {
            abort(404);
        }
    }
}
