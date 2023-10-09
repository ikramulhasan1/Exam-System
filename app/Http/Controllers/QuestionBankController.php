<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\QuestionBank;
use App\Models\Subject;
use Exception;
use Illuminate\Http\Request;

class QuestionBankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = QuestionBank::all();
        return view('backend.questionbanks.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();
        $levels = Level::all();

        return view('backend.questionbanks.create', compact('subjects', 'levels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            QuestionBank::create($data);
            return redirect()->route('questionbanks.index');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(QuestionBank $questionBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuestionBank $questionBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuestionBank $questionBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuestionBank $questionBank)
    {
        //
    }
}
