<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('dashboard', compact('subjects'));
    }
    public function examList($subjectID){

        $subject = Subject::findOrFail($subjectID);
        // dd($subject->exams);
        return view('subject-wise-exam', compact('subject'));
    }
    
    
}
