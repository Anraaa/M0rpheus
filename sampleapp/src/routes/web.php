<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Auth\AuthenticatedSessionController;
//use App\Http\Controllers\Auth\AuthenticatedSessionController;
//use App\Http\Resources\StudentBioResource;

//Route::get('/mhs/dashboard', [AuthenticatedSessionController::class, 'showStudentBio'])->middleware('auth');

Route::get('/', function () {
    //return view('welcome');
    return redirect('/app/login');
});



