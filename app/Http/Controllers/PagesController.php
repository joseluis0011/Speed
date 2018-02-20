<?php

namespace App\Http\Controllers;
use App\Post;
use App\Repo\AdminRepo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    protected $repo_admin;

    public function __construct(AdminRepo $adminRepo)
    {
        $this->repo_admin = $adminRepo;
    }


    public function home()
    {
        $body = $this->repo_admin->getPostWebPage(1);
        return view('welcome',compact('body'));
    }
}
