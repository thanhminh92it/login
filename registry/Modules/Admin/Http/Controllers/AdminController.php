<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $username = $request->session()->get('username');
        $user = DB::table('account')->select('username')->get();
        return view('admin::index')
            ->with('listuser',$user)
            ->with('user',$username);
    }
}
