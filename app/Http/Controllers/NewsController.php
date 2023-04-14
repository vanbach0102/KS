<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\CateNews;
use App\Models\News;
use Illuminate\Http\Request;;

session_start();
class NewsController extends Controller
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
    public function add_news(){
        $this->auth_login();

        $cate_news = CateNews::orderBy('cate_news_id','DESC')->get();

        return view('Admin.add_news')->with(compact('cate_news'));
    }
    public function save_news(Request $request){
        $this->auth_login();
        $data = request()->except(['_token']);
        $this->validate($request,[
            'news_title' => 'required|max:255',
            'news_desc' => 'required|max:255',
            'news_content' => 'required|max:255',
        ]);
        $news = new News();

        $news->news_title = $data['news_title'];
        $news->news_slug = $data['news_slug'];
        $news->news_desc = $data['news_desc'];
        $news->news_content = $data['news_content'];
        $news->news_status = $data['cate_news_id'];
        $news->news_status = $data['news_status'];

        $get_image = $request->file('news_image');
        if($get_image){
            $new_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$new_image_name));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('C:\xampp\htdocs\QuanLyKS\public\images-ks\news',$new_image);
            $data['news_image'] = $new_image;
            DB::table('tbl_news')->insert($data);
            Session::put('message','Thêm thành công');
            return Redirect::to('/add-news');
        }else{
            $data['news_title'] = null;
            $data['status'] = null;
            $data['news_image'] = null;

            Session::put('message','Thêm thất bại');

            return Redirect::to('/add-news');
        }
        $news->save();

        Session::put('message','Cập nhật thành công');
        return Redirect()->back();
    }
    public function all_news(){
        $this->auth_login();

        $news = News::orderBy('news_id','DESC')->paginate(10);

        return view('Admin.list_news')->with(compact('news'));
    }
    public function bai_viet(Request $request){
        $baiViet = News::orderBy('news_id','DESC')->paginate(10);
        return view('Home.pages.all_news')->with(compact('baiViet'));
    }

}
