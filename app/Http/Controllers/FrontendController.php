<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\QuestionPaper;

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

    public function questionPaper($examID){

        $exam = Exam::findOrFail($examID);
        // $subject = Subject::findOrFail($exam->subject_id);
        $questions = QuestionPaper::where('exam_id', $examID)->get();

        $examTime = $exam->duration * 60;
        return view('questionpaper', compact('questions', 'exam', 'examTime'));
    }

    public function submitQuestionPaper(Request $request)
    {
      
        return redirect()->route('levels.index')->withSuccess('Level added successfully');
    }
    
    
}
