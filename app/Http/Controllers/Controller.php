<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
     $this->middleware('auth');
    }

    /*public function index(Request $request) {
        $request->user()->authorizeRoles(['user', 'admin']);
        return view('home');
    }*/

    /*public function someAdminStuff(Request $request) {
        $request->user()->authorizeRoles('admin');
        return view('some.view');
    }*/
}
