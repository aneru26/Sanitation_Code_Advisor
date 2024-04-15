<?php

namespace App\Http\Controllers;

use App\Models\Inspection;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;


class InspectionController extends Controller
{

    public function list()
    {
        $data['getRecord']= Inspection::getRecord();
        $data['header_title'] = "Register";
        return view('admin.inspection.list', $data);
    }


    public function add($id)
    {
        $data['getRecord'] = Register::getSingle($id);
        $data['header_title'] = "Inspection ";
        return view('admin.inspection.add', $data);
    }

    public function insert(Request $request, $registerId)
    
    {
// Validate the request data as needed

    // Create a new purchase record
    $inspection = new Inspection();
    $inspection->register_id = $registerId;
    $inspection->user_id = Auth::user()->id; // Assuming you have a customers table
    $inspection->sanitary_permit = trim($request->sanitary_permit);
    $inspection->health_certificate = trim($request->health_certificate);
    $inspection->storage_protection = trim($request->storage_protection);
    $inspection->construction_premises = trim($request->construction_premises);
    $inspection->maintenance_premises = trim($request->maintenance_premises);
    $inspection->toilet_provison = trim($request->toilet_provison);
    $inspection->hand_facilities = trim($request->hand_facilities);
    $inspection->water_supply = trim($request->water_supply);
    $inspection->liquid_waste = trim($request->liquid_waste);
    $inspection->wholesomeness_food = trim($request->wholesomeness_food);
    $inspection->protection_food = trim($request->protection_food);
    $inspection->vermin_control = trim($request->vermin_control);
    $inspection->cleanliness_tideness = trim($request->cleanliness_tideness);
    $inspection->personal_cleanliness = trim($request->personal_cleanliness);
    $inspection->housekeeping_management = trim($request->housekeeping_management);
    $inspection->condition_appliance = trim($request->condition_appliance);
    $inspection->cleanliness_appliance = trim($request->cleanliness_appliance);
    $inspection->disease_control = trim($request->disease_control);
    $inspection->disposal_garbage = trim($request->disposal_garbage);
    $inspection->misellaneous_training = trim($request->misellaneous_training);
    $totalDemeritScore = $this->calculateTotalDemeritScore($inspection);

    // Save the calculated percentage
    $inspection->percentage = 100 - $totalDemeritScore;

    // Save the purchase record
    $inspection->save();

 // Check the percentage and redirect accordingly
 if ($inspection->percentage > 64) {
    // Redirect to admin/inspection/list
    return redirect('admin/inspection/list')->with('success', "Inspection Submitted");
} else {
    // Redirect to admin/inspection/compliance
    return redirect('admin/inspection/compliance')->with('success', "Inspection Submitted");
}
}

public function edit($id)
    {
        $getRecord = Inspection::getSingle($id);
        $data['getRecord'] = $getRecord;
        $data['header_title'] = "Edit Inspection";
        return view('admin.inspection.edit', $data);
    }

    public function update(Request $request,$id)
    
    {
// Validate the request data as needed

$inspection = Inspection::find($id);

if (!$inspection) {
    return redirect()->back()->with('error', 'Inspection not found');
}
    
    $inspection->sanitary_permit = trim($request->sanitary_permit);
    $inspection->health_certificate = trim($request->health_certificate);
    $inspection->storage_protection = trim($request->storage_protection);
    $inspection->construction_premises = trim($request->construction_premises);
    $inspection->maintenance_premises = trim($request->maintenance_premises);
    $inspection->toilet_provison = trim($request->toilet_provison);
    $inspection->hand_facilities = trim($request->hand_facilities);
    $inspection->water_supply = trim($request->water_supply);
    $inspection->liquid_waste = trim($request->liquid_waste);
    $inspection->wholesomeness_food = trim($request->wholesomeness_food);
    $inspection->protection_food = trim($request->protection_food);
    $inspection->vermin_control = trim($request->vermin_control);
    $inspection->cleanliness_tideness = trim($request->cleanliness_tideness);
    $inspection->personal_cleanliness = trim($request->personal_cleanliness);
    $inspection->housekeeping_management = trim($request->housekeeping_management);
    $inspection->condition_appliance = trim($request->condition_appliance);
    $inspection->cleanliness_appliance = trim($request->cleanliness_appliance);
    $inspection->disease_control = trim($request->disease_control);
    $inspection->disposal_garbage = trim($request->disposal_garbage);
    $inspection->misellaneous_training = trim($request->misellaneous_training);
    $totalDemeritScore = $this->calculateTotalDemeritScore($inspection);

    // Save the calculated percentage
    $inspection->percentage = 100 - $totalDemeritScore;

    // Save the purchase record
    $inspection->save();

     // Check the percentage and redirect accordingly
 if ($inspection->percentage > 64) {
    // Redirect to admin/inspection/list
    return redirect('admin/inspection/list')->with('success', "Inspection Submitted");
} else {
    // Redirect to admin/inspection/compliance
    return redirect('admin/inspection/compliance')->with('success', "Inspection Submitted");
}
}

    


public function result($id)
{
    $getRecord = Inspection::getSingle($id);
    
    // Calculate total demerit score
    $totalDemeritScore = $this->calculateTotalDemeritScore($getRecord);
    $totalDemerit = $this->totaldemerit($getRecord);


    $data['getRecord'] = $getRecord;
    $data['header_title'] = "Result";
    $data['totalDemeritScore'] = $totalDemeritScore;
    $data['totalDemerit'] = $totalDemerit;

    return view('admin.inspection.result', $data);
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


public function show($id)
{
    $data = Inspection::getId($id);
    $data['header_title'] = "Recommendation";

    // Determine which recommendation view to load based on the ID
    $view = 'recomendation.recomendation' . $id;

    return view($view, $data);
}

public function showrule($id)
{
    $data = Inspection::getId($id);
    $data['header_title'] = "Recommendation";

    // Determine which recommendation view to load based on the ID
    $view = 'recomendationform.recomendation' . $id;

    return view($view, $data);
}

public function compliancelist()
{
    $data['getRecord']= Inspection::getRecordCompliance();
    $data['header_title'] = "Register";
    return view('admin.inspection.compliance', $data);
}



    //customer
public function customerlist()
{
    $data['getRecord']= Inspection::getRecordcustomer();
    $data['header_title'] = "Register";
    return view('student.inspection.list', $data);
}

public function customerlistcompliance()
{
    $data['getRecord']= Inspection::getRecordcustomerCompliance();
    $data['header_title'] = "Register";
    return view('student.inspection.compliance', $data);
}



public function customerresult($id)
{
    $getRecord = Inspection::getSingle($id);
    
    // Calculate total demerit score
    $totalDemeritScore = $this->calculateTotalDemeritScore($getRecord);
    $totalDemerit = $this->totaldemerit($getRecord);


    $data['getRecord'] = $getRecord;
    $data['header_title'] = "Result";
    $data['totalDemeritScore'] = $totalDemeritScore;
    $data['totalDemerit'] = $totalDemerit;

    return view('student.inspection.result', $data);
}


public function customershow($id)
{
    $data = Inspection::getSingle($id);
    $data['header_title'] = "Recommendation";

    // Determine which recommendation view to load based on the ID
    $view = 'recomendation.recomendation' . $id;

    return view($view, $data);
}


//Inspector Side

public function inspectorcompliancelist()
{
    $data['getRecord']= Inspection::getRecordCompliance();
    $data['header_title'] = "Register";
    return view('inspector.inspection.compliance', $data);
}


public function inspectorlist()
{
    $data['getRecord']= Inspection::getRecord();
    $data['header_title'] = "Register";
    return view('inspector.inspection.list', $data);
}


public function inspectoradd($id)
{
    $data['getRecord'] = Register::getSingle($id);
    $data['header_title'] = "Inspection ";
    return view('inspector.inspection.add', $data);
}

public function inspectorinsert(Request $request, $registerId)

{
// Validate the request data as needed

// Create a new purchase record
$inspection = new Inspection();
$inspection->register_id = $registerId;
$inspection->user_id = Auth::user()->id; // Assuming you have a customers table
$inspection->sanitary_permit = trim($request->sanitary_permit);
$inspection->health_certificate = trim($request->health_certificate);
$inspection->storage_protection = trim($request->storage_protection);
$inspection->construction_premises = trim($request->construction_premises);
$inspection->maintenance_premises = trim($request->maintenance_premises);
$inspection->toilet_provison = trim($request->toilet_provison);
$inspection->hand_facilities = trim($request->hand_facilities);
$inspection->water_supply = trim($request->water_supply);
$inspection->liquid_waste = trim($request->liquid_waste);
$inspection->wholesomeness_food = trim($request->wholesomeness_food);
$inspection->protection_food = trim($request->protection_food);
$inspection->vermin_control = trim($request->vermin_control);
$inspection->cleanliness_tideness = trim($request->cleanliness_tideness);
$inspection->personal_cleanliness = trim($request->personal_cleanliness);
$inspection->housekeeping_management = trim($request->housekeeping_management);
$inspection->condition_appliance = trim($request->condition_appliance);
$inspection->cleanliness_appliance = trim($request->cleanliness_appliance);
$inspection->disease_control = trim($request->disease_control);
$inspection->disposal_garbage = trim($request->disposal_garbage);
$inspection->misellaneous_training = trim($request->misellaneous_training);
$totalDemeritScore = $this->calculateTotalDemeritScore($inspection);

// Save the calculated percentage
$inspection->percentage = 100 - $totalDemeritScore;

// Save the purchase record
$inspection->save();

 // Check the percentage and redirect accordingly
 if ($inspection->percentage > 64) {
    // Redirect to admin/inspection/list
    return redirect('inspector/inspection/list')->with('success', "Inspection Submitted");
} else {
    // Redirect to admin/inspection/compliance
    return redirect('inspector/inspection/compliance')->with('success', "Inspection Submitted");
}
}

public function inspectoredit($id)
    {
        $getRecord = Inspection::getSingle($id);
        $data['getRecord'] = $getRecord;
        $data['header_title'] = "Edit Inspection";
        return view('inspector.inspection.edit', $data);
    }


    public function inspectorupdate(Request $request,$id)
    
    {
// Validate the request data as needed

$inspection = Inspection::find($id);

if (!$inspection) {
    return redirect()->back()->with('error', 'Inspection not found');
}
    
    $inspection->sanitary_permit = trim($request->sanitary_permit);
    $inspection->health_certificate = trim($request->health_certificate);
    $inspection->storage_protection = trim($request->storage_protection);
    $inspection->construction_premises = trim($request->construction_premises);
    $inspection->maintenance_premises = trim($request->maintenance_premises);
    $inspection->toilet_provison = trim($request->toilet_provison);
    $inspection->hand_facilities = trim($request->hand_facilities);
    $inspection->water_supply = trim($request->water_supply);
    $inspection->liquid_waste = trim($request->liquid_waste);
    $inspection->wholesomeness_food = trim($request->wholesomeness_food);
    $inspection->protection_food = trim($request->protection_food);
    $inspection->vermin_control = trim($request->vermin_control);
    $inspection->cleanliness_tideness = trim($request->cleanliness_tideness);
    $inspection->personal_cleanliness = trim($request->personal_cleanliness);
    $inspection->housekeeping_management = trim($request->housekeeping_management);
    $inspection->condition_appliance = trim($request->condition_appliance);
    $inspection->cleanliness_appliance = trim($request->cleanliness_appliance);
    $inspection->disease_control = trim($request->disease_control);
    $inspection->disposal_garbage = trim($request->disposal_garbage);
    $inspection->misellaneous_training = trim($request->misellaneous_training);
    $totalDemeritScore = $this->calculateTotalDemeritScore($inspection);

    // Save the calculated percentage
    $inspection->percentage = 100 - $totalDemeritScore;

    // Save the purchase record
    $inspection->save();

   // Check the percentage and redirect accordingly
 if ($inspection->percentage > 64) {
    // Redirect to admin/inspection/list
    return redirect('inspector/inspection/list')->with('success', "Inspection Submitted");
} else {
    // Redirect to admin/inspection/compliance
    return redirect('inspector/inspection/compliance')->with('success', "Inspection Submitted");
}
}

public function inspectorresult($id)
{
$getRecord = Inspection::getSingle($id);

// Calculate total demerit score
$totalDemeritScore = $this->calculateTotalDemeritScore($getRecord);
$totalDemerit = $this->totaldemerit($getRecord);


$data['getRecord'] = $getRecord;
$data['header_title'] = "Result";
$data['totalDemeritScore'] = $totalDemeritScore;
$data['totalDemerit'] = $totalDemerit;

return view('inspector.inspection.result', $data);
}



}


