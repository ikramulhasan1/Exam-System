<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Exam;
use App\Models\Level;
use App\Models\QuestionBank;
use App\Models\QuestionPaper;
use App\Models\Subject;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exams = Exam::all();
        return view('backend.exams.index', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();
        $levels = Level::all();

        return view('backend.exams.create', compact('subjects', 'levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        try {
  
            $data = $request->except('total_questions');
            $exam = Exam::create($data);
        // 
            $questions = QuestionBank::where('subject_id', $request->subject_id)
                                    ->where('level_id', $request->level_id)
                                    ->inRandomOrder()
                                    ->take($request->total_questions)
                                    ->get();

            if (count($questions) > 0) {
               foreach ($questions as $key => $question) {
                    QuestionPaper::create([
                        'exam_id' => $exam->id,
                        'question_id' => $question->id,
                        'title' => $question->title,
                        'option1' => $question->option1,
                        'option2' => $question->option2,
                        'option3' => $question->option3,
                        'option4' => $question->option4,
                        'correct_answer' => $question->correct_answer,
                        'subject_id' => $request->subject_id,
                        'level_id' => $request->level_id,
                    ]);
               }
            }
            // dd($questions);
            return redirect()->route('exams.index');


        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();
        return redirect()->route('exams.index')->withSuccess('Exam deleted successfully');
    }
}