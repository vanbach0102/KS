<?php

namespace App\Http\Controllers;

use App\Models\LoaiPhong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class LoaiPhongController extends Controller
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
    public function add_loaiphong()
    {
        $this->auth_login();
        return view('Admin.loaiphong.add_loai_phong');
    }
    public function all_loaiphong()
    {
        $all = DB::table('loai_phongs')->get();
        $data = view('Admin.loaiphong.all_loai_phong')->with('all_loaiphong',$all);
        return view('admin_layout')->with('all_loaiphong',$data);

    }
    public function save_loaiphong(Request $request)
    {
        $this->auth_login();

        // $data = $request->all();
        // $loai_phong = new LoaiPhong();
        // $loai_phong->loaiPhong = $data['loaiPhong'];
        // $loai_phong->hinhAnh = $data['hinhAnh'];
        // $loai_phong->tinhTrang = $data['tinhTrang'];
        // $loai_phong->save();
        $data = array();
        $data['loaiPhong'] = $request->loaiPhong;
        $data['tinhTrang'] = $request->tinhTrang;
        $get_image = $request->file('hinhAnh');
        if($get_image){
            $new_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$new_image_name));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('C:\xampp\htdocs\QuanLyKS\public\images-ks\phong',$new_image);
            $data['hinhAnh'] = $new_image;
            DB::table('loai_phongs')->insert($data);
            Session::put('message','Thêm thành công');
            return Redirect::to('/add-loai-phong');
        }else{
            $data['loaiPhong'] = null;
            $data['tingTrang'] = null;
            $data['hinhAnh'] = null;

            DB::table('loai_phongs')->insert($data);

            Session::put('message','Thêm thất bại');

            return Redirect::to('/add-loai-phong');
        }


    }
    public function edit_loaiphong($maLoaiPhong)
    {
        $edit_loaiphong = DB::table('loai_phongs')->where('maLoaiPhong',$maLoaiPhong)->get();
        $data = view('Admin.loaiphong.edit_loai_phong')->with('loaiphong',$edit_loaiphong);
        return view('admin_layout')->with('edit_loaiphong',$data);
    }
    public function update_loaiphong(Request $request,$maLoaiPhong)
    {
        $this->auth_login();
        $data = array();
        $data['loaiPhong'] = $request->loaiPhong;

        DB::table('loai_phongs')->where('maLoaiPhong',$maLoaiPhong)->update($data);

        Session::put('message','Cập nhật thành công');

        return Redirect::to('/all-loai-phong');

    }
    public function unset_loaiphong($maLoaiPhong)
    {
    DB::table('loai_phongs')->where('maLoaiPhong',$maLoaiPhong)->update(['tinhTrang' => 0]);
    Session::put('message','Thay đôi trạng thái chưa đặt thành công');
    return Redirect::to('/all-loai-phong');

    }
    public function set_loaiphong($maLoaiPhong)
    {
    DB::table('loai_phongs')->where('maLoaiPhong',$maLoaiPhong)->update(['tinhTrang' => 1]);
    Session::put('message','Thay đôi trạng thái đã đặt thành công');
    return Redirect::to('/all-loai-phong');
    }
    public function delete_loaiphong($maLoaiPhong){
      $this->auth_login();
        DB::table('loai_phongs')->where('maLoaiPhong',$maLoaiPhong)->delete();
        Session::put('message','Xóa thành công');

        return Redirect::to('/all-loai-phong');
    }
}
