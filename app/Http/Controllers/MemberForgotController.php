<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberForgotController extends Controller
{
     use SendsPasswordResetEmails;
}
