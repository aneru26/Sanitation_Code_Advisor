<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Certificate extends Model
{
    use HasFactory;


    protected $table ="certificates";


    static public function getSingle($id) 
    {
        return self::find($id);
    }
    
    static public function getRecorduser()
    {
        $userId = Auth::id();
    
        $return = Certificate::select('certificates.*')
            ->where('certificates.is_delete','=', 0)
            ->where('certificates.submitted_by', '=', $userId) // Filter records by the authenticated user's ID
            ->orderBy('certificates.id', 'desc')
            ->paginate(10);
    
        return $return;
    }

    public function getPhotoDirect()
    {
        if(!empty($this->certificate) && file_exists('upload/certificate/'.$this->certificate))
        {
            return url('upload/certificate/'.$this->certificate);
        }
        else
        {
            return asset('upload/profile/user.jpg');
        
        }
    
    }

 
    static public function getCertificate($created_by)
    {
        $return = Certificate::select('certificates.*')
                     ->join('registers', 'registers.created_by', '=', 'certificates.submitted_by')
                     ->where('registers.created_by', '=', $created_by) // Add condition to match user ID
                     ->where('certificates.is_delete', '=', 0)
                     ->orderBy('certificates.id', 'desc')
                     ->distinct()
                     ->get();
    
        return $return;
    }
    
    


}
