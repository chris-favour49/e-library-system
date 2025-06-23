<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller {
    use AuthenticatesUsers;

    /**
    * Determine where to redirect users after login based on their status.
    *
    * @return string
    */
    protected function redirectTo() {
        $user = Auth::user();

        if ( $user->status === 'admin' ) {
            return '/admin/dashboard';
        } elseif ( $user->status === 'student' ) {
            return '/student/studentdashboard';
        }

        return '/home';
        // fallback
    }

    public function __construct() {
        $this->middleware( 'guest' )->except( 'logout' );
        $this->middleware( 'auth' )->only( 'logout' );
    }
}
