<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $getRecord = Inspection::getSingle($id);
        // Calculate total demerit score
        $totalDemeritScore = $this->calculateTotalDemeritScore($getRecord);
        $totalDemerit = $this->totaldemerit($getRecord);
    
        $data = [
            'getRecord' => $getRecord,
            'header_title' => 'Result',
            'totalDemeritScore' => $totalDemeritScore,
            'totalDemerit' => $totalDemerit
        ];
    
        $pdf = PDF::loadView('pdf.inspectionResultPdf', $data);
        return $pdf->download('inspection-result.pdf');
    }
    private function totaldemerit($inspection)

{
    $fields = [
        'sanitary_permit', 'health_certificate', 'storage_protection', 'construction_premises', 
        'maintenance_premises', 'toilet_provison', 'hand_facilities', 'water_supply', 
        'liquid_waste', 'wholesomeness_food', 'protection_food', 'vermin_control', 
        'cleanliness_tideness', 'personal_cleanliness', 'housekeeping_management', 
        'condition_appliance', 'cleanliness_appliance', 'disease_control', 'disposal_garbage', 
        'misellaneous_training'
    ];

    $total = 0;

    foreach ($fields as $field) {
        if ($inspection->$field === 'No') {
            $total++;
        }
    }

    return $total ++;
}



private function calculateTotalDemeritScore($inspection)
{
    $fields = [
        'sanitary_permit', 'health_certificate', 'storage_protection', 'construction_premises', 
        'maintenance_premises', 'toilet_provison', 'hand_facilities', 'water_supply', 
        'liquid_waste', 'wholesomeness_food', 'protection_food', 'vermin_control', 
        'cleanliness_tideness', 'personal_cleanliness', 'housekeeping_management', 
        'condition_appliance', 'cleanliness_appliance', 'disease_control', 'disposal_garbage', 
        'misellaneous_training'
    ];

    $total = 0;

    foreach ($fields as $field) {
        if ($inspection->$field === 'No') {
            $total++;
        }
    }

    return $total * 5;
}

}
