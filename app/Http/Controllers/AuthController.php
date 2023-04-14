<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Role;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExcelExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function showRegister(){
        return view('auth_register');
    }

    public function logout(){
        Auth::logout();
        return Redirect('/admin')->with('message','Đăng xuất thành công');
    }

    public function register(Request $request){
        $this->validation($request);
        $data = $request->all();

        $admin = new Admin();
        $admin->admin_name = $data['admin_name'];
        $admin->admin_email = $data['admin_email'];
        $admin->admin_phone = $data['admin_phone'];
        $admin->admin_password = md5($data['admin_password']);
        $admin->save();

        return redirect('/auth-register')->with('message','Đăng ký thành công');
    }
    public function login_auth(){
        return view('login_auth');
    }
    public function login(Request $request){
        $this->validate($request,[
            'admin_password' => 'required|max:255',
            'admin_email' => 'required|email|max:255',
        ]);
        $data = $request->all();
        if(Auth::attempt(['admin_email' => $request->admin_email, 'admin_password' => $request->admin_password])){

            return redirect('/dashboard');
        }else{

            return redirect('/login_auth')->with('message','Lỗi đăng nhập');


           }

    }
    public function export(){
        return Excel::download(new ExcelExport,'admin.xlxs');
    }

    public function validation($request)
    {
        return $this->validate($request,[
            'admin_name' => 'required|max:255',
            'admin_email' => 'required|email|max:255',
            'admin_password' => 'required|max:255',
            'admin_phone' => 'required|max:255',
        ]);
    }
}
