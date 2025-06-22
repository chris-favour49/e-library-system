<?php

namespace App\Http\Controllers;
use App\Models\Task_Model;
use App\Models\User_Model;
use App\Models\DocumentModel;

use Illuminate\Http\Request;

class HomeController extends Controller {
    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __construct() {
        $this->middleware( 'auth' );
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */

    public function index() {
        return view ( 'home' )->with( 'status', 'You have succefully Logged in!' );
    }

    public function student() {
        $document = DocumentModel::all();
        $task = Task_Model::leftjoin( 'user_models', 'user_models.id', '=', 'task_models.user_id' )
        ->get( [ 'user_models.id as id', 'task_models.id as taskid', 'task_models.isbn as isbn', 'task_models.book as book',
        'task_models.author as author', 'task_models.category as category',
        'task_models.pdf_path as pdf_path', 'task_models.created_at as datecreated' ] );
        return view( 'task.student' )->with( 'tasks', $task )->with( 'document', $document )->with( 'status', 'You have succefully Logged in!' );

    }
}

