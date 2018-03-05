<?php

namespace App\Http\Controllers\Admin;

use App\Repo\AdminRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;


class AdminController extends Controller
{
    protected $repo;
    public function __construct(AdminRepo $adminRepo)
    {
        $this->repo = $adminRepo;
    }

    public function index()
    {

      return view('admin.dashboard');
    }

    public function getPersona(Request $request){
        $person = $this->repo->getPersona($request['id']);
       return response()->json($person);
    }


    public function delPersona(Request $request){
       $del = $this->repo->deletePerson($request['id']);
        return response()->json(["del"=>$del]);
    }



    public function restoreDel(Request $request){
        $this->repo->restorePerson($request['id_per']);
        return back();
    }

    public function setConfigUser(Request $request){
      return $this->repo->getConfigUser($request['iduser'],$request);
    }




    public function  test(){

        $this->repo->restorePerson(11);
    }
}
