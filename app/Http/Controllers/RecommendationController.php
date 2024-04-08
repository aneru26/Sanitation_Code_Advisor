<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function list()
    {
        $data['header_title'] = "Recommendation";
        return view('recomendation.recomendation1', $data);
    }

    public function listRule()
    {
        $data['header_title'] = "Recommendation";
        return view('recomendationForm.recomendation1', $data);
    }

    public function customerlist()
    {
        $data['header_title'] = "Recommendation";
        return view('student.recomendation.recomendation1', $data);
    }

    //inspector

    public function inspectorlist()
    {
        $data['header_title'] = "Recommendation";
        return view('recomendationForm.recomendation1', $data);
    }
}
