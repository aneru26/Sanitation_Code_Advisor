<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Inspection extends Model
{
    use HasFactory;


    protected $table ="inspections";

    static public function getId($id) 
    {
        return self::find($id);
    }

    static public function getSingle($id) 
    {
        return self::with(['register', 'user'])->find($id);
    }

    static public function getRecordcustomer()
{
    $userId = Auth::id();

    $return = self::select('inspections.*', 'registers.name_of_establishment', 'registers.address', 'registers.owner_lastname', 'registers.owner_firstname', 'registers.number_of_personel', 'registers.occupancy_classification')
        ->join('registers', 'registers.id', '=', 'inspections.register_id')
        ->join('users', 'users.id', '=', 'inspections.user_id')
        ->where('inspections.is_delete', '=', 0)
        ->where('inspections.percentage', '>', 64) // Add this condition
        ->where('registers.created_by', '=', $userId) // Filter inspections by the authenticated user's ID
        ->orderBy('inspections.id', 'desc')
        ->paginate();

    return $return;
}


static public function getRecordcustomerCompliance()
{
    $userId = Auth::id();

    $return = self::select('inspections.*', 'registers.name_of_establishment', 'registers.address', 'registers.owner_lastname', 'registers.owner_firstname', 'registers.number_of_personel', 'registers.occupancy_classification')
        ->join('registers', 'registers.id', '=', 'inspections.register_id')
        ->join('users', 'users.id', '=', 'inspections.user_id')
        ->where('inspections.is_delete', '=', 0)
        ->where('inspections.percentage', '<', 65) // Add this condition
        ->where('registers.created_by', '=', $userId) // Filter inspections by the authenticated user's ID
        ->orderBy('inspections.id', 'desc')
        ->paginate();

    return $return;
}
    
    static public function getRecord()
    {
        $return = self::select('inspections.*','registers.name_of_establishment','registers.address','registers.owner_lastname','registers.owner_firstname','registers.number_of_personel','registers.occupancy_classification' )
            ->join('registers', 'registers.id', '=', 'inspections.register_id')
            ->join('users', 'users.id', '=', 'inspections.user_id')
            ->where('inspections.is_delete', '=', 0)
            ->where('inspections.percentage', '>', 64) // Add this condition
            ->orderBy('inspections.id', 'desc')
            ->paginate();
    
        return $return;
    }

    static public function getRecordCompliance()
    {
        $return = self::select('inspections.*','registers.name_of_establishment','registers.address','registers.owner_lastname','registers.owner_firstname','registers.number_of_personel','registers.occupancy_classification', 'users.name' )
            ->join('registers', 'registers.id', '=', 'inspections.register_id')
            ->join('users', 'users.id', '=', 'inspections.user_id')
            ->where('inspections.is_delete', '=', 0)
            ->where('inspections.percentage', '<', 65) // Add this condition
            ->orderBy('inspections.id', 'desc')
            ->paginate();
    
        return $return;
    }
    


    public function register()
{
    return $this->belongsTo(Register::class);
}

public function user()
{
    return $this->belongsTo(User::class);
}


    static public function getRecordResult()
    {
        $return = self::select('inspections.*','registers.name_of_establishment','registers.address','registers.owner_lastname','registers.owner_firstname','registers.number_of_personel','registers.occupancy_classification' )
            ->join('registers', 'registers.id', '=', 'inspections.register_id')
            ->join('users', 'users.id', '=', 'inspections.user_id')
            ->where('inspections.is_delete', '=', 0)
            ->orderBy('inspections.id', 'desc')
            ->get();
    
        return $return;
    }

  
    
}
