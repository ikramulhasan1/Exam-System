<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Exam;
use App\Models\Subject;
use App\Models\AnswerScript;
use App\Models\Level;
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
        return view('frontend.dashboard', compact('subjects'));
    }
    public function examList($subjectID)
    {

        $subject = Subject::findOrFail($subjectID);
        // dd($subject->exams);
        return view('frontend.examStart', compact('subject'));
    }

    public function questionPaper($examID)
    {

        $exam = Exam::findOrFail($examID);
        // $subject = Subject::findOrFail($exam->subject_id);
        $questions = QuestionPaper::where('exam_id', $examID)->get();

        // $level = Level::where('exam_id', $examID)->get();

        // $level = Level::all();

        $examTime = $exam->duration * 60;
        return view('frontend.questionpaper', compact('questions', 'exam', 'examTime'));
    }

    public function submitQuestionPaper(Request $request)
    {
        $submittedAnswers = $request->except('exam_id', '_token');
        $examID = $request->exam_id;

        foreach ($submittedAnswers as $qid => $value) {
            $question = QuestionPaper::where('exam_id', $examID)
                ->where('question_id', $qid)
                ->first();
            if ($question->correct_answer == $value) {
                $submitAnswer = 'right';
            } else {
                $submitAnswer = 'wrong';
            }

            AnswerScript::create([

                'user_id' => auth()->user()->id,
                'user_name' => auth()->user()->name,
                'question_id' => $qid,
                'title' => $question->title,
                'option1' => $question->option1,
                'option2' => $question->option2,
                'option3' => $question->option3,
                'option4' => $question->option4,
                'correct_answer' => $question->correct_answer ?? '',
                'submit_answer' => $submitAnswer,
                'exam_id' => $examID,
            ]);

            // save
            $rightAnswers = '';
            $wrongAnswers = '';

            $answerScripts = AnswerScript::where('user_id', auth()->user()->id)
                ->where('exam_id', $examID)
                ->get();
        }

        // return redirect()->route('levels.index')->withSuccess('Level added successfully');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function courses()
    {
        return view('frontend.courses');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
