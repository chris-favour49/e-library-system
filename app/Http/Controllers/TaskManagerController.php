<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task_Model;
use App\Models\Project_Model;
use App\Models\User;
use App\Models\User_Model;

class TaskManagerController extends Controller {

    // The function that captures all the informations on task

    public function index() {
        $user = User_Model::all();
        $task = Task_Model::leftjoin( 'user_models', 'user_models.id', '=', 'task_models.user_id' )
        ->get( [ 'user_models.id as id','task_models.id as taskid','task_models.isbn as isbn','task_models.book as book','task_models.author as author', 'task_models.category as category',
        'task_models.price as price', 'task_models.copies as copies','task_models.created_at as datecreated' ] );
        return view( 'task.taskmanager' )->with( 'tasks', $task )->with( 'users', $user );

    }

    // The function that saves task

    public function savetask( Request $request ) {

                 Task_Model::create( [
                'user_id'=> $request->user_id,
                'isbn' =>$request->isbn,
                'book'=>$request->book,
                'author'=>$request->author,
                'category'=>$request->category,
                'price' =>$request->price,
                'copies'=>$request->copies,
            ] );
            return back() ->with( 'success', 'You have succefully Created a Task' );
        }

    // end



    // The function that edits task

    public function edittask( $id ) {
        $user = User_Model::all();
        $project = Project_Model::all();
        $task  = Task_Model::find( $id );
        return view( 'task.edittask' )->with( 'task', $task )->with('users', $user)->with('projects', $project);
    }
    // end

    // The function that updates task

    public function updatetask( Request $request ) {
        Task_Model::updateOrCreate( [
            'id'=>$request->taskid,
        ] ,
        [ 'user_id'=> $request->assignee,
                'project_id' =>$request->project,
                'taskname'=>$request->taskname,
                'project'=>$request->project,
                'assignee'=>$request->assignee,
                'due' =>$request->due,
                'status'=>$request->status,
                'priority'=>$request->priority,
            ] );

        return redirect()->route( 'tasks' )->with( 'success', 'Data updated successfully' );

    }
    //end

    // The function that deletes task

    public function deletetask( $id ) {
        $task  = Task_Model::find( $id )->delete();
        return back() ->with( 'success', 'Data Deleted Successfully' );

    }
    //end

}

