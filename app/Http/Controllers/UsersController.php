<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_MOdel;

class UsersController extends Controller {
    public function index() {
        $user = User_Model::
        // ->leftjoin( 'users', 'user_models.user_id', '=', 'users.id' )
        get( [ 'user_models.username as username', 'user_models.email as email',
        'user_models.id as userid', 'user_models.created_at as datecreated', ] );
        return view( 'task.users' )->with( 'tasks', $user );

    }
    // end

    // The function that savesuser

    public function saveuser( Request $request ) {

        User_Model::create( [
            'username'=>$request->username,
            'email'=>$request->email,
            'description'=>$request->description,
        ] );

        return back() ->with( 'success', 'You have succefully Created a User' );
    }
}
