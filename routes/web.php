<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');

Route::post('login', [LoginController::class, 'login'])->name('auth.login.submit');
Route::post('register', [RegisterController::class, 'register'])->name('auth.register.submit');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');
    Route::get('/forms/create', [FormController::class, 'create'])->name('forms.create');
    Route::get('/forms/{form}/delete', [FormController::class, 'destroy'])->name('forms.delete');
    Route::get('/forms/{form}', [FormController::class, 'show'])->name('forms.show');
    Route::get('/forms/{form}/questions/create', [QuestionController::class, 'create'])->name('questions.create');
    Route::get('/forms/{form}/questions/{question}/edit', [QuestionController::class, 'update'])->name('questions.update');
    Route::get('/forms/{form}/questions/{question}/delete', [QuestionController::class, 'destroy'])->name('questions.delete');
    Route::get('/forms/{form}/share', [FormController::class, 'share'])->name('forms.share');

    Route::get('feedbacks', [FeedbackController::class, 'index'])->name('feedbacks.index');
    Route::get('feedbacks/{feedback}', [FeedbackController::class, 'show'])->name('feedbacks.show');
    Route::get('feedbacks/{feedback}/delete', [FeedbackController::class, 'destroy'])->name('feedbacks.delete');
});

Route::get('/feedback/form/{form}', [FormController::class, 'loadForm'])->name('feedback.form');