<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\CateNews;
use Illuminate\Http\Request;

session_start();
class CateNewsController extends Controller
{

    public function auth_login()
    {
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('/dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_cate_news()
    {
        $this->auth_login();
        return view('Admin.cate_news');
    }
    public function save_cate_news(Request $request){
        $this->auth_login();
        $data = $request->all();

        $cate_news = new CateNews();

        $cate_news->cate_news_name = $data['cate_news_name'];
        $cate_news->cate_news_slug = $data['cate_news_slug'];
        $cate_news->cate_news_status = $data['cate_news_status'];
        $cate_news->cate_news_desc = $data['cate_news_desc'];

        $cate_news->save();

        Session::put('message','Cập nhật thành công');
        return Redirect()->back();
    }
    public function all_cate_news(){
        $this->auth_login();

        $cate_news = CateNews::orderBy('cate_news_id','DESC')->paginate(10);
        return view('Admin.user.all_cate_news')->with(compact('cate_news'));
    }
}
