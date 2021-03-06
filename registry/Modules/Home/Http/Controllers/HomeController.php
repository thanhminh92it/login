<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $username = $request->session()->get('username');
        return view('home::index')
            ->with('user',$username);
    }

    public function admin(Request $request)
    {
        redirect('/admin');
    }
}
