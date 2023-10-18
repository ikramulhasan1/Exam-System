<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionBankController;
use App\Http\Controllers\SubjectController;


Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 
Route::resources([
    'subjects' => SubjectController::class,
    'levels' => LevelController::class,
    'questionbanks' => QuestionBankController::class,
    'exams' => ExamController::class
]);


// Report
Route::get('questions/export/', [QuestionBankController::class, 'export'])->name('questions.export');


// Frontends
Route::resource('/', FrontendController::class);
Route::get('examlist/{id}', [FrontendController::class, 'examList'])->middleware(['auth', 'verified'])->name('examlist');
Route::get('questionpaper/{id}', [FrontendController::class, 'questionPaper'])->middleware(['auth', 'verified'])->name('question.paper');

Route::post('submit-paper', [FrontendController::class, 'submitQuestionPaper'])->middleware(['auth', 'verified'])->name('submitted_question_paper');


Route::get('/setting', function () {
    return view('backend.profile.profileSetting');
})->middleware(['auth', 'verified'])->name('profile.setting');


require __DIR__ . '/auth.php';