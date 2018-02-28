<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    public function index()
    {
       // $profile = $this->repo_admin->myProfile();
        return view('user.password.index');
    }
}
