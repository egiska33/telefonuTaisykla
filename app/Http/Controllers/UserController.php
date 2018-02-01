<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $repairs = Auth::user()->repairs;

        return view('users.profile', compact('repairs'));
    }
}
