<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Register extends Model
{
    use HasFactory;

    protected $table ="registers";

    static public function getName($id) 
{
    return self::select('registers.*', 'users.name as created_by_name', 'users.last_name as created_by_last_name')
                ->leftJoin('users', 'users.id', '=', 'registers.created_by')
                ->where('registers.id', $id)
                ->first();
}


    static public function getSingle($id) 
    {
        return self::find($id);
    }

    static public function getRecorduser()
{
    $userId = Auth::id();

    $return = Register::select('registers.*', 'users.name as created_by_name', 'users.last_name as created_by_last_name')
        ->join('users', 'users.id', '=', 'registers.created_by')
        ->where('registers.is_delete','=', 0)
        ->where('registers.created_by', '=', $userId) // Filter records by the authenticated user's ID
        ->whereNotIn('registers.id', function($query) {
            $query->select('register_id')->from('inspections');
        })
        ->orderBy('registers.id', 'desc')
        ->paginate(10);

    return $return;
}


    static public function getRecord()
    {
        $return = Register::select('registers.*','users.name as created_by_name', 'users.last_name as created_by_last_name')
            ->join('users', 'users.id', '=', 'registers.created_by')
            ->where('registers.is_delete','=', 0)
            ->whereNotIn('registers.id', function($query) {
                $query->select('register_id')->from('inspections');
            })
            ->orderBy('registers.id','desc')
            ->paginate(10);
    
        return $return;
    }
    

}
