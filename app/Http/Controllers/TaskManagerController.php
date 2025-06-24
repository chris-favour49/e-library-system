<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Task_Model;
use App\Models\User_Model;

class TaskManagerController extends Controller {
    public function index() {
        $user = User_Model::all();
        $task = Task_Model::leftJoin( 'user_models', 'user_models.id', '=', 'task_models.user_id' )
        ->get( [
            'user_models.id as id',
            'task_models.id as taskid',
            'task_models.isbn',
            'task_models.book',
            'task_models.author',
            'task_models.category',
            'task_models.pdf_path',
            'task_models.created_at as datecreated',
        ] );

        return view( 'task.taskmanager', compact( 'task', 'user' ) )->with( 'tasks', $task )->with( 'users', $user );
    }

    public function store( Request $request ) {
        $request->validate( [
            'isbn' => 'required',
            'book' => 'required',
            'author' => 'required',
            'category' => 'required',
            'pdf_path' => 'required|mimes:pdf|max:20480',
        ] );

        $filePath = $request->file( 'pdf_path' )->store( 'books', 'public' );

        Task_Model::create( [
            'user_id' => auth()->id(), // or use $request->assignee if required
            'isbn' => $request->isbn,
            'book' => $request->book,
            'author' => $request->author,
            'category' => $request->category,
            'pdf_path' => $filePath,
        ] );

        return back()->with( 'success', 'You have successfully stored a book.' );
    }

    public function edittask( $id ) {
        $user = User_Model::all();
        $task = Task_Model::findOrFail( $id );
        return view( 'task.edittask', compact( 'task', 'user' ) )->with( 'task', $task )->with( 'users', $user );
    }

    public function updatetask( Request $request ) {
        $task = Task_Model::findOrFail( $request->taskid );

        if ( $request->hasFile( 'pdf_path' ) ) {
            $filePath = $request->file( 'pdf_path' )->store( 'books', 'public' );
            $task->pdf_path = $filePath;
        }

        $task->update( [
            'user_id' => $request->assignee,
            'isbn' => $request->isbn,
            'book' => $request->book,
            'author' => $request->author,
            'category' => $request->category,
        ] );

        return redirect()->route( 'tasks' )->with( 'success', 'Data updated successfully' );
    }

    public function destroy( $id ) {
        $task = Task_Model::findOrFail( $id );
        $task->delete();

        return back()->with( 'success', 'Book deleted successfully!' );
    }

    public function download( $id ) {
        $task = Task_Model::findOrFail( $id );
        if ( !Storage::disk('public')->exists( $task->pdf_path ) ) {
            return back()->with( 'danger', 'File not found.' );
        }

       return Storage::disk('public')->download($task->pdf_path);

    }

    public function view( $id ) {
        $task = Task_Model::findOrFail( $id );

        if ( !Storage::disk( 'public' )->exists( $task->pdf_path ) ) {
            return back()->with( 'danger', 'File not found.' );
        }

        $filePath = Storage::disk( 'public' )->path( $task->pdf_path );

        return response()->file( $filePath, [
            'Content-Type' => 'application/pdf',
        ] );
    }

}
