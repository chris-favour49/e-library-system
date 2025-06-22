<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\controllers\StyleController;
use App\Http\controllers\ClientController;
use App\Http\controllers\StyleparameterController;
use App\Http\controllers\ParameterController;
use App\Http\controllers\AddparameterController;
use App\Http\controllers\projectController;
use App\Http\controllers\ClientContactController;
use App\Http\controllers\TaskManagerController;
use App\Http\controllers\ProjectTaskController;
use App\Http\controllers\UsersController;
use App\Http\controllers\DocumentController;
use App\Http\Controllers\StudentController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/student', [App\Http\Controllers\HomeController::class, 'student'])->name('student');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard')->middleware('auth');




// Task Manager
Route::get( '/library', [ TaskManagerController::class, 'index' ] )->name( 'tasks' )->middleware('auth');
Route::post( '/storebook', [ TaskManagerController::class, 'store' ] )->name( 'savetask' );
Route::get( '/edittask/{id}', [ TaskManagerController::class, 'edittask' ] )->name( 'edittask' );
Route::get( '/deletetask/{id}', [ TaskManagerController::class, 'deletetask' ] )->name( 'deletetask' );
Route::post( '/updatebook', [ TaskManagerController::class, 'updatetask' ] )->name( 'updatetask' );
Route::get( '/download/{id}', [ TaskManagerController::class, 'download' ] )->name( 'download' );

// Users
Route::get( '/users', [ UsersController::class, 'index' ] )->name( 'users' );
Route::post( '/saveuser', [ UsersController::class, 'saveuser' ] )->name( 'saveuser' );

// Project Manager
Route::get( '/librarybooks', [ ProjectTaskController::class, 'index' ] )->name( 'projects' );
Route::get( '/viewproject', [ ProjectTaskController::class, 'viewproject' ] )->name( 'viewproject' );

//Student Manager
Route::get('/welcomepage', [StudentController::class,'index'])->name('e-library');