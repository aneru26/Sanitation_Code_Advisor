<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TeamModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Storage;



class StudentController extends Controller
{
    public function list()
    {
        $data['getRecord']= User::getStudent();
        $data['header_title'] = "Student List ";
        return view(request()->is('admin/*') ? 'admin.student.list' : 'teacher.student.list', $data);
    }

    public function add()
    {
        $data['header_title'] = "Add Student ";
        return view(request()->is('admin/*') ? 'admin.student.add' : 'teacher.student.add', $data);
    }

    public function insert(Request $request)
    {
        request()->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'team_id' => 'nullable|integer',
        ]);
        
        $student = new User;
        $student->name = trim($request->name);
        $student->last_name = trim($request->last_name);
        $student->id_number = trim($request->id_number);
        $student->program = trim($request->program);
        $student->year = trim($request->year);
        $student->birthday = trim($request->birthday);
        $student->team_id = $request->team_id ?? null;
        $student->budget = trim($request->budget);
        $student->gender = trim($request->gender);
        $student->mentor = trim($request->mentor);

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
        $student->password = Hash::make($request->password);
        $student->user_type = 2;
        $student->save();

        $redirectPath = $request->is('admin/*') ? 'admin/student/list' : 'teacher/student/list';

    return redirect($redirectPath)->with('succes', "Incubatess Successfully Added");

        
    }

    public function show($id)
    {
        $data['getRecord'] = User::getSingle($id);
    
        if (!empty($data['getRecord']))
        {
          
            $data['header_title'] = "Edit Student ";
            return view(request()->is('admin/*') ? 'admin.student.show' : 'teacher.student.show', $data);
        }
        else
        {
            abort(404);
        }
    }

    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        if(!empty($data['getRecord']))
        {
            $data['header_title'] = "Edit Student ";
            return view(request()->is('admin/*') ? 'admin.student.edit' : 'teacher.student.edit', $data);
        }
        else
        {
                abort(404);
        }
        
    }

    public function update($id, Request $request)
    {
        request()->validate([
            'email' => 'required|unique:users,email,' . $id,
            'password' => 'nullable|min:8'
        ]);

        $student = User::getSingle($id);
        $student->name = trim($request->name);
        $student->last_name = trim($request->last_name);
        $student->id_number = trim($request->id_number);
        $student->program = trim($request->program);
        $student->year = trim($request->year);
        $student->birthday = trim($request->birthday);
        $student->team_id = $request->team_id ?? null;
        $student->budget = trim($request->budget);
        $student->gender = trim($request->gender);
        $student->mentor = trim($request->mentor);

        if(!empty($request->file('profile_pic')))
        {
            if(!empty($student->getProfile))
            {
                unlink('upload/profile/'.$student->profile_pic);
            }
            $ext = $request->file('profile_pic')->getClientOriginalExtension();
            $file = $request->file('profile_pic');
            $randomStr = date('Ymdhis').Str::random(30);
            $filename = strtolower($randomStr).'.'.$ext;
            $file->move(public_path('upload/profile/'), $filename);

            $student->profile_pic = $filename;
        }

        $student->status = trim($request->status);
        $student->email = trim($request->email);
        
        $student->password = Hash::make($request->password);
        $student->save();

        $redirectPath = $request->is('admin/*') ? 'admin/student/list' : 'teacher/student/list';
    
        return redirect($redirectPath)->with('succes', "Incubatess successfully Updated");

       
    }

    public function delete($id)
    {
        $getRecord = User::getSingle($id);
        if(!empty($getRecord))
        {
            $getRecord->is_delete = 1;
            $getRecord->save();

            return redirect()->back()->with('succes',"Incubatess successfully Deleted");
        }
        else
        {
            abort(404);
        }
        
    }
}
