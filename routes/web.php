<?php

use App\Http\controllers\AddparameterController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\controllers\ClientContactController;
use App\Http\controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\controllers\DocumentController;
use App\Http\controllers\ParameterController;
use App\Http\controllers\projectController;
use App\Http\controllers\ProjectTaskController;
use App\Http\Controllers\StudentController;
use App\Http\controllers\StyleController;
use App\Http\controllers\StyleparameterController;
use App\Http\controllers\TaskManagerController;
use App\Http\controllers\UsersController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard');

Route::get('/student/dashboard', function () {
    return view('studentdashboard');
})->name('student.dashboard');


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