<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auth_login()
    {
        $admin_id = Auth::id();
        if($admin_id){
            return Redirect::to('/dashboard');
        }
        else{
            return Redirect::to('/admin');
        }
    }
    public function index()
    {
        return view('admin_login');
    }
    public function showDashboard()
    {
        $this->auth_login();
        return view('Admin.dashboard');
    }

    public function dashboard(Request $request)
    {
        $this->auth_login();
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('admins')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();

        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','Email hoặc mật khẩu sai');
            return Redirect::to('/admin');
        }
    }
    public function logout()
    {
        $this->auth_login();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
