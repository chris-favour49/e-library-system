<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project_Model;
use App\Models\Task_Model;
use App\Models\User_Model;
use App\Models\User;

class ProjectTaskController extends Controller {

    // The function that captures all the informations on project

    public function index() {
        $user = User_Model::all();
        $task = Task_Model::leftjoin( 'user_models', 'user_models.id', '=', 'task_models.user_id' )
        ->get( [ 'user_models.id as id', 'task_models.id as taskid', 'task_models.isbn as isbn', 'task_models.book as book', 'task_models.author as author', 'task_models.category as category',
        'task_models.price as price', 'task_models.copies as copies', 'task_models.created_at as datecreated' ] );
        return view( 'task.project' )->with( 'tasks', $task )->with( 'users', $user );

    }
    // end

    // The function that savesProject

    public function saveproject( Request $request ) {

        Project_Model::create( [
            'projectname'=>$request->projectname,
            'description'=>$request->description,
        ] );

        return back() ->with( 'success', 'You have succefully Created a Project' );
    }
    // end

    // The function that views task

    public function viewproject() {
        $task = Task_Model::leftjoin( 'project_models', 'project_models.id', '=', 'task_models.project_id' )
        ->get( [ 'project_models.id as id', 'task_models.taskname as taskname',
        'project_models.projectname as project', 'task_models.id as taskid', 'task_models.created_at as datecreated' ] );
        return view( 'task.viewproject' )->with( 'tasks', $task );
    }
    //end
}
