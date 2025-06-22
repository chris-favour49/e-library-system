<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Task_Model;
use App\Models\Project_Model;
use App\Models\User;
use App\Models\User_Model;
use App\Models\DocumentModel;

class TaskManagerController extends Controller {

    // The function that captures all the informations on task

    public function index() {
        $user = User_Model::all();
        $task = Task_Model::leftjoin( 'user_models', 'user_models.id', '=', 'task_models.user_id' )
        ->get( [ 'user_models.id as id', 'task_models.id as taskid', 'task_models.isbn as isbn', 'task_models.book as book',
        'task_models.author as author', 'task_models.category as category','task_models.pdf_path as pdf_path','task_models.created_at as datecreated' ] );
        return view( 'task.taskmanager' )->with( 'tasks', $task )->with( 'users', $user );

    }

    // The function that saves task

    public function store( Request $request ) {

        Task_Model::create( [
            'user_id'=> $request->assignee,
            'isbn' =>$request->isbn,
            'book'=>$request->book,
            'author'=>$request->author,
            'category'=>$request->category,
            'pdf_path' =>$request->pdf_path,
        ] );
        return back() ->with( 'success', 'You have succefully Stored a Book' );
    }

    // end

    // The function that edits task

    public function edittask( $id ) {
        $user = User_Model::all();
        $task  = Task_Model::find( $id );
        return view( 'task.edittask' )->with( 'task', $task )->with( 'users', $user );
    }
    // end

    // The function that updates task

    public function updatetask( Request $request ) {
        Task_Model::updateOrCreate( [
            'id'=>$request->taskid,
        ] ,
        [ 'user_id'=> $request->assignee,
        'isbn' =>$request->isbn,
        'book'=>$request->book,
        'author'=>$request->author,
        'category'=>$request->category,
        'pdp_path'=>$request->pdf_path,
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

        // The function to download a file
        public function download( $id ) {
            $task  = Task_Model::find($id);
            $pdf_path = $task->pdf_path;
            if ( !Storage::exists( $pdf_path ) ) {
                return abort( 404, 'file not found' )->with( 'task', $task );
                ;
            }
            return Storage::download( $pdf_path, basename ( $pdf_path ) );
        }

    }

