<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bible_StudyController extends Controller
{
    public function index() {
        return view('bible_study_request');
    }

    public function bStudy() {
        return view('bible_study_request_form');
    }

    public function thanks() {
        return view('bs_thankU_page');
    }
}
