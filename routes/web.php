<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionBankController;
use App\Http\Controllers\SubjectController;


Route::resource('/', FrontendController::class);

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
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

Route::get('questions/export/', [QuestionBankController::class, 'export'])->name('questions.export');


// Report


require __DIR__ . '/auth.php';