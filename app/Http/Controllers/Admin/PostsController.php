<?php

namespace App\Http\Controllers\Admin;
use App\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class PostsController extends Controller
{
    protected $repo_admin;

    public function __construct(AdminRepo $adminRepo)
    {
        $this->repo_admin = $adminRepo;
    }

    public function index()
    {
        $body = $this->repo_admin->getPostWebPage(1);
      return view('admin.posts.index',compact('body'));
    }

    public function saveData(Request $request){
        if($this->repo_admin->savePostWebPage($request['part'],$request) != null){
            Session::flash('webpage_update','Pagina Web Actualizada correctamente');
            return back();
        }else{
        Session::flash('error','Error !!!!');
        return back();
        }
    }

    

}
