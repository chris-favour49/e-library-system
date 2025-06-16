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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Task Manager
Route::get( '/tasks', [ TaskManagerController::class, 'index' ] )->name( 'tasks' );
Route::post( '/savetask', [ TaskManagerController::class, 'savetask' ] )->name( 'savetask' );
Route::get( '/edittask/{id}', [ TaskManagerController::class, 'edittask' ] )->name( 'edittask' );
Route::get( '/deletetask/{id}', [ TaskManagerController::class, 'deletetask' ] )->name( 'deletetask' );
Route::post( '/updatetask', [ TaskManagerController::class, 'updatetask' ] )->name( 'updatetask' );

// Users
Route::get( '/users', [ UsersController::class, 'index' ] )->name( 'users' );
Route::post( '/saveuser', [ UsersController::class, 'saveuser' ] )->name( 'saveuser' );

// Project Manager
Route::get( '/projects', [ ProjectTaskController::class, 'index' ] )->name( 'projects' );
Route::post( '/saveproject', [ ProjectTaskController::class, 'saveproject' ] )->name( 'saveproject' );
Route::get( '/viewproject', [ ProjectTaskController::class, 'viewproject' ] )->name( 'viewproject' );

