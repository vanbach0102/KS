<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auth_login()
    {
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function index()
    {
        $admin = Admin::with('role')->orderby('admin_id','DESC')->get();
        return view('Admin.user.all_user')->with(compact('admin'));
    }
    public function add_user()
    {
        $this->auth_login();
        return view('Admin.user.add_user');
    }

    public function assign_role(Request $request)
    {
        $this->auth_login();
        if(Auth::id()== $request->admin_id){
            return redirect()->back()->with('message','Không được phép cấp quyền tài khoản đang sử dụng');
        }
        $user = Admin::where('admin_email',$request->admin_email)->first();
        $user->role()->detach();

        if($request->admin_role){
            $user->role()->attach(Role::where('name','admin')->first());

        }
        if($request->author_role){
            $user->role()->attach(Role::where('name','author')->first());

        }
        if($request->user_role){
            $user->role()->attach(Role::where('name','user')->first());

        }
        return redirect()->back()->with('message','Cấp quyền thành công');
    }
    public function delete_user($admin_id)
    {
        $admin = Admin::find($admin_id);

        if(Auth::id() == $admin_id){
            return redirect()->back()->with('message','Không được xóa tài khoản đang sử dụng');
        }else{
            $admin->role()->detach();
            $admin->delete();
        return redirect()->back()->with('message','Xóa user thành công');
        }

    }
}
