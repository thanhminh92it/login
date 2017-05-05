<?php

namespace Modules\Login\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;
use DB;
use Mockery\Exception;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('login::index');
    }

    public function login(Request $request)
    {

        $user = $request->input('username');
        $pass = $request->input('password');
        $login = DB::table('account')->where(['username'=>$user, 'password' =>md5($pass)])->get();

        if(count($login) > 0){
//            $class = "alert-success";
//            $message[0] = "Login success";
//            $message[1] = "";
            $request->session()->put('username', $user);
            return redirect('/home');
        }
        $class = "alert-danger";
        $message[0] = "Login fail";
        $message[1] = "Wrong username or password";
        return view('login::index')
            ->with('class', $class)
            ->with('message', $message);
    }

    public function registry(Request $request)
    {
        try{
            $user = $request->input('username');
            $pass = $request->input('password');
            $insert = DB::table('account')->where(['username'=>$user])->get();

            if(count($insert) > 0){
                $class = "alert-danger";
                $message[0] = "Registry fail";
                $message[1] = "Username exits";
                return view('login::index')
                    ->with('class', $class)
                    ->with('message', $message);
            }
            DB::table('account')->insert(
                ['username' => $user, 'password' => md5($pass)]
            );
            $request->session()->put('username', $user);
            return redirect('/home');
        }
        catch (Exception $exception)
        {
            $class = "alert-danger";
            $message[0] = "Registry fail";
            $message[1] = $exception->getMessage();
            return view('login::index')
                ->with('class', $class)
                ->with('message', $message);
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
